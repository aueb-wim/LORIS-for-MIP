import mysql.connector
import xmltodict
import os
import subprocess
import pydicom
import requests
import json
import pandas as pd
from datetime import datetime

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

def decode(x):
    return x.decode('UTF-8')

def UpdateComplete( FileID ):
    mycursor.execute("UPDATE files SET FileStudyComplete = 1 WHERE FileID = %s LIMIT 1", (FileID,) )
    mydb.commit()
    return mycursor.rowcount == 1

def UpdateFiles( ):
    mycursor.execute("""SELECT
                        	fqc.FileID, File, FileStudyID
                        FROM
                        	files_qcstatus fqc, files f
                        WHERE
                        	fqc.FileID = f.FileID
                            AND fqc.QCStatus LIKE 'PASS'
                            AND f.FileStudyComplete = 0;""");

    myresult = mycursor.fetchall()

    ids = []
    files = []
    studies = []

    prefix = "/data/loris/data/"

    for rec in myresult:
        fileID, filename, studyid = rec[0], rec[1], rec[2]
        print( "FileID", fileID, "filename", filename, "studyid", studyid )
        ids.append( fileID )
        files.append( prefix + filename )
        studies.append( studyid )

    if len(files) > 0:
        #save csv file
        df = pd.DataFrame( { 'filename': files,
                             'studyid': studies } )

        dateTimeObj = datetime.now()
        csv_filename = str(dateTimeObj).replace( " ", "_" ) + ".csv"
        #ex. '2019-10-11_20:58:33.304849.csv
        prefix = "/data/loris/csvs/"
        df.to_csv( prefix + csv_filename, index=False)

        #update table
        for fileid in ids:
            try:
                if UpdateComplete( fileid ):
                    print( "Update [OK]" )
                else:
                    print( "[FAIL]")
            except:
                print( "Could not update fileid", fileid )
    else:
        print( "There is nothing to be saved" )

UpdateFiles()
