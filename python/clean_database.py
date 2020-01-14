import mysql.connector
import xmltodict
import os
import subprocess
import pydicom
import requests
import json
import pandas as pd

fin = open("/home/lorisadmin/cred.txt", "r" )
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

os.chdir( '/data/loris/bin/mri/tools' )

def decode(x):
    return x.decode('UTF-8')

def GetMriUploads( ):
    mycursor.execute("SELECT UploadID FROM mri_upload" )
    myresult = mycursor.fetchall()
    ret = [ i[0] for i in myresult ]
    return ret

def UpdateMriUploads( ):
    mycursor.execute("UPDATE mri_upload SET Inserting = 0" )
    mydb.commit()
    return mycursor.rowcount > 0

def DeletePass( ):
    mycursor.execute("DELETE FROM files_qcstatus" )
    mydb.commit()
    return mycursor.rowcount > 0


def DeleteACQDates( ):
    mycursor.execute("DELETE FROM mri_acquisition_dates" )
    mydb.commit()
    return mycursor.rowcount > 0

def DeleteSession( ):
    mycursor.execute("DELETE FROM session" )
    mydb.commit()
    return mycursor.rowcount > 0

def DeleteScanner( ):
    mycursor.execute("DELETE FROM mri_scanner WHERE ID != 0" )
    mydb.commit()
    return mycursor.rowcount > 0

def DeleteCandidates( ):
    mycursor.execute("DELETE FROM candidate" )
    mydb.commit()
    return mycursor.rowcount > 0

if UpdateMriUploads():
    print( "There were uploads that were stopped during their insertion in the pipeline" )

#deletes pass from qcstatus, otherwise the delete_imaging_upload.pl can't delete the corresponding upload
DeletePass()

gmu = GetMriUploads()
#print( gmu )

if os.path.exists( 'imaging_upload_backup.tar.gz' ):
    p_rm = subprocess.Popen( [ "rm", 'imaging_upload_backup.tar.gz' ], stdout=subprocess.PIPE)
    output = p_rm.communicate()
    #print( output )

for i in gmu:
    print('[OK]')
    #e.x ./delete_imaging_upload.pl -uploadID 108 -ignore
    p = subprocess.Popen( [ "delete_imaging_upload.pl", "-uploadID", str(i), "-ignore" ], stdout=subprocess.PIPE)
    output = p.communicate()#.split() ) )
    print( output )

    if os.path.exists( 'imaging_upload_backup.tar.gz' ):
        p_rm = subprocess.Popen( [ "rm", 'imaging_upload_backup.tar.gz' ], stdout=subprocess.PIPE)
        output = p_rm.communicate()
        #print( output )

#delete rest
DeleteACQDates()
DeleteSession()
DeleteScanner()
DeleteCandidates()

exit(0)
