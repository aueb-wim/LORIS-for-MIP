import os
import subprocess
import pandas as pd
import argparse
import sys

parser = argparse.ArgumentParser(description='A tool that removes the provided invalid dcms files.')

parser.add_argument('--dcm_root_folder', type=str,
                    help='the root folder with dicom files e.x. /home/lorisadmin/Desktop/pre')
parser.add_argument('--dcm_csv_folder', type=str,
                    help='the root folder with that contains the csv file with the invalid dicom files e.x. /home/lorisadmin/Desktop/report_folder_dcm')

args = parser.parse_args(sys.argv[1:])

if args.dcm_root_folder == None or args.dcm_csv_folder == None:
    parser.print_help()
    exit(0)

def decode(x):
    return x.decode('UTF-8')

df = pd.read_csv( args.dcm_csv_folder + "/invaliddicoms.csv", encoding='utf-8' )

filenames = ( args.dcm_root_folder + "/" + df['Folder'] + "/" + df['File'] ).tolist()
#print( df )

for file in filenames:

    #delete file
    p_rm = subprocess.Popen( [ "rm", file ], stdout=subprocess.PIPE)
    output = p_rm.communicate()
    print( 'output', output )
