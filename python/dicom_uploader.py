import mysql.connector
import xmltodict
import os
import subprocess
import pydicom
import requests
import json
import pandas as pd

fin = open("/data/loris/aueb/cred.txt", "r" )
interface_username, interface_password = fin.read().split()

# data to be sent to api - login
data = { "username" : interface_username,
         "password" : interface_password
        }
# sending post request, storing token and creating header for further requests
r = requests.post(url = "http://localhost/api/v0.0.2/login/", json = data)
token = r.json()['token']
header = { "Authorization" : "Bearer " + token }

#load database configuration from config.xml file
fin = open("/var/www/loris/project/config.xml", "r")

ret = xmltodict.parse( fin.read() )
host = ret['config']['database']['host']
username = ret['config']['database']['username']
password = ret['config']['database']['password']
database = ret['config']['database']['database']

mydb = mysql.connector.connect(
  host=host,
  user=username,
  passwd=password,
  database=database
)

mycursor = mydb.cursor()

os.chdir( '/data/loris/dicom_in' )

def decode(x):
    return x.decode('UTF-8')

def CandidateExist( patientID ):
    print( patientID )
    mycursor.execute("SELECT externalid FROM candidate WHERE externalid = %s LIMIT 1", (patientID,) )
    myresult = mycursor.fetchall()
    #True if externalid is in candidates
    return len(myresult) == 1

def GetMaximumCandID(centername='DCC'):
    #COALESCE treats null as 0
    #mycursor.execute("SELECT COALESCE( max(candid), 0 ) FROM candidate")
    mycursor.execute("SELECT COALESCE( max(PSCID), 0 ) FROM candidate WHERE PSCID REGEXP '" + centername + "[0-9]+'" );
    myresult = mycursor.fetchall()
    return myresult[0][0]

def GetCandidateInfo( ExternalID ):
    #COALESCE treats null as 0
    #mycursor.execute("SELECT COALESCE( max(candid), 0 ) FROM candidate")
    mycursor.execute("SELECT CandID, PSCID FROM candidate WHERE ExternalID = %s LIMIT 1", (ExternalID,) );
    myresult = mycursor.fetchall()
    return myresult[0][0], myresult[0][1]

def GetVisitLabels( CandID ):
    r = requests.get(url = "http://localhost/api/v0.0.2/candidates/" + str(CandID), headers=header)
    return ( r.json()['Visits'] )

def UpdateExternalID( CandidateID, ExternalID ):
    mycursor.execute("UPDATE candidate SET externalid = %s WHERE CandID = %s LIMIT 1", (ExternalID, CandidateID,) )
    mydb.commit()
    return mycursor.rowcount == 1

def GetT1Protocol( ):
    mycursor.execute("SELECT TR_min, TR_max, TE_min, TE_Max FROM mri_protocol WHERE scan_type = 44 LIMIT 1" );
    myresult = mycursor.fetchall()
    return myresult[0][0], myresult[0][1], myresult[0][2], myresult[0][3]

def UpdateT1Protocol( TR_min, TR_max, TE_min, TE_max ):
    mycursor.execute("UPDATE mri_protocol SET TR_min = %s-0.1, TR_max = %s+0.1, TE_min = %s-0.1, TE_max = %s+0.1 WHERE scan_type = 44 LIMIT 1", ( float(TR_min), float(TR_max), float(TE_min), float(TE_max),) )
    mydb.commit()
    return mycursor.rowcount == 1

def InsertCandidate( PatientID, DoB, Sex, CenterID=1, ProjectID=1 ):

    ymd_dob = str(pd.to_datetime( DoB, format='%Y-%m-%d' )).split()[0]
    #print( ymd_dob )

    # data to be sent to api -- creates a new profile
    data = { "Candidate" : {
                "Project" : "loris",
                "DoB"     : ymd_dob,#"YYYY-MM-DD",
                "Gender"  : Sex
                }
            }

    #print( data )

    #print( header )
    # sending post request and saving response as response object
    r = requests.post(url = "http://localhost/api/v0.0.2/candidates/", json = data, headers=header)

    # extracting response text
    #print( 'Status code', r.status_code, type(r.status_code) )
    #if response was success we return the CandID(auto increment) of the record inserted in the candidate table
    if r.status_code == 201:
        candidate_id = r.json()['Meta']['CandID']
        if UpdateExternalID( candidate_id, PatientID ):
            print( "Update externalid " )
        else:
            print( "Could not update externalid" )
            exit(0)
        return True

    return ( False )#return (ret==1)#, "record inserted.")

def CreateCandidate( patientID, patientName, patientSex, patientBod ):
    #inserts candidate
    print( "Creating candidate")

    centername = 'DCC'

    if patientSex == "M":
        patientSex = "Male"
    elif patientSex == "F":
        patientSex = "Female"
    return InsertCandidate( patientID, patientBod, patientSex )

def GetNextVisitLabel( VisitLabels ):
    if len(VisitLabels) == 0:
        return 1
    def f(x):
        return x[1:]
    visits = sorted( list( map( int, map( f, VisitLabels ) ) ) )
    return ( visits[-1] + 1 )

minuTR, maxuTR, minuTE, maxuTE, = GetT1Protocol()

for folder in os.listdir( ):
    #files = subprocess.call(  )

    p = subprocess.Popen( [ "find", "./" + folder, "-name", "*dcm" ], stdout=subprocess.PIPE)
    files = list( map( decode, p.communicate()[0].split() ) )
    print( files[0] )

    #use First file to extract header-informations
    patient = pydicom.dcmread( files[0] )
    patientID = patient.PatientID
    patientName = patient.PatientName
    patientSex = patient.PatientSex
    patientBod = patient.PatientBirthDate
    patientTR = patient.RepetitionTime
    patientTE = patient.EchoTime

    #check if Patient exist
    if CandidateExist( patientID ) == False:
        if CreateCandidate( patientID, patientName, patientSex, patientBod ):
            print( "Create candidate" )
        else:
            print( "Could not create candidate" )
            exit(0)
    else:
        print( "Candidate already in database" )

    # /candidates/$CandID
    CandID, PSCID = GetCandidateInfo( patientID )
    VisitLabels = GetVisitLabels( CandID )
    Next_V = GetNextVisitLabel( VisitLabels )
    #print( VisitLabels )
    print( 'Candidate Info', CandID, PSCID )
    print( 'Next Visit Label', Next_V )

    #print( dir(patient) )
    #print( patient.SeriesNumber, patient.SeriesDescription )#canOptions)
    #exit(0)

    patient_name_dicom = PSCID + "_" + str(CandID) + "_V" + str(Next_V)

    do_update = False

    #process all files
    for file in files:
        tmp_patient = pydicom.dcmread( file )
        tmp_patientTR = patient.RepetitionTime
        tmp_patientTE = patient.EchoTime
        #dcmodify-header

        tmp_patient.PatientName = patient_name_dicom
        pydicom.dcmwrite( file, tmp_patient,  write_like_original=False )
        ####subprocess-call

        #apply-> dcmodify -ma "(0008,9206)=" *.dcm
        #print(  "dcmodify -ma (0008,9206)='' "+ file )
        #print( os.getcwd() )
        p_mod = subprocess.Popen( [ "dcmodify", "-ma", "'(0008,9206)='", file ], stdout=subprocess.PIPE)
        mod_list = list( map( decode, p_mod.communicate()[0].split() ) )
        p_mod = subprocess.Popen( [ "dcmodify", "-ma", "'(0008,9207)='", file ], stdout=subprocess.PIPE)
        mod_list = list( map( decode, p_mod.communicate()[0].split() ) )
        #print( mod_list )
        #print( mod_list[0] )


        #update Max, Min ( which protocol? e.x. t1 )
        check = False
        try:
            if "T1" in tmp_patient.ProtocolName:
                check = True
        except:
            print( file, "does not have Protocolname" )

        try:
            if "T1" in tmp_patient.SeriesDescription:
                check = True
        except:
            print( file, "does not have SeriesDescription" )

        if check:#.startswith( "T1" ):
                if tmp_patientTR > maxuTR:
                    maxuTR = tmp_patientTR
                    do_update = True
                if tmp_patientTR < minuTR:
                    minuTR = tmp_patientTR
                    do_update = True
                if tmp_patientTE > maxuTE:
                    maxuTE = tmp_patientTE
                    do_update = True
                if tmp_patientTE < minuTE:
                    minuTE = tmp_patientTE
                    do_update = True

    if do_update:
        print( "Update mri_protocol for T1", minuTR, maxuTR, minuTE, maxuTE )
        UpdateT1Protocol( minuTR, maxuTR, minuTE, maxuTE )

    #delete .bak files
    p_back = subprocess.Popen( [ "find", "./" + folder, "-name", "*.bak" ], stdout=subprocess.PIPE)
    files_back = list( map( decode, p_back.communicate()[0].split() ) )
    for z in files_back:
        p_rm = subprocess.Popen( [ "rm", z ], stdout=subprocess.PIPE)
        p_rm.communicate()

    #print( minuTR, maxuTR, minuTE, maxuTE )
    #input()
    #continue
    #print( files )
    tar_name = patient_name_dicom + ".tar.gz"
    print( folder )
    p = subprocess.Popen( [ "tar", "czf",  "/data/incoming/" + tar_name, "./" + folder ] ) # Success!
    p.communicate()

    #/data/incoming/DCC000006_6_V1.tar.gz N DCC000006_6_V1
    f = open("/home/lorisadmin/input.txt", "w")
    f.write( "/data/incoming/" + tar_name + " N " + patient_name_dicom )
    f.close()

    file_input = open("/home/lorisadmin/input.txt", "r")
    p_upload = subprocess.Popen( ["/data/loris/bin/mri/batch_uploads_imageuploader.pl", "-profile", "prod"], stdin=file_input ) # Success!
    p_upload.communicate()

    p_mv = subprocess.Popen( [ "mv",  "./" + folder, "../post" ] ) # Success!
    p_mv.communicate()

    print( patientTR )

print( maxuTR )
exit(0)
