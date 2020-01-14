import mysql.connector
import xmltodict
import os
import subprocess
import pydicom
import requests
import json
import pandas as pd

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

os.chdir( '/data/loris/data/' )

def decode(x):
    return x.decode('UTF-8')

def UpdateStudyID( FileID, StudyID ):
    mycursor.execute("UPDATE files SET FileStudyID = %s WHERE FileID = %s LIMIT 1", (StudyID, FileID,) )
    mydb.commit()
    return mycursor.rowcount == 1

def UpdateFiles( ):
    mycursor.execute("SELECT FileID, File FROM files WHERE FileStudyID is NULL");
    myresult = mycursor.fetchall()

    for rec in myresult:
        fileID, filename = rec[0], rec[1]
        print( "FileID", fileID, "filename", filename )
        #example: loris_476804_V1_t1_001.mnc | grep dicom_0x0008:el_0x00
        p = subprocess.Popen( [ "mincheader", filename ], stdout=subprocess.PIPE)
        output = subprocess.check_output( ('grep','dicom_0x0020:el_0x0010'), stdin=p.stdout )
        p.wait()

        studyuid = decode(output).split( "=" )[1].split( '"' )[1]
        print( "studyuid", studyuid )

        try:
            if UpdateStudyID( fileID, studyuid ):
                print( "Update [OK]" )
            else:
                print( "[FAIL]")
        except:
            print( "Could not update studyuid" )

UpdateFiles()
