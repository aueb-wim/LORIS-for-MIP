import argparse
import logging
import os
import glob
import shutil
import pandas as pd
import subprocess

DEFAULT_PROTOCOL = "T1"
DEFAULT_REPETITION = "1"
DEFAULT_ORGANISATION = ['PatientID', 'StudyID', 'SeriesDescription', 'SeriesNumber']

def decode(x):
    return x.decode('UTF-8')

def getval(x):
    return decode( x ).split( "=" )[1].split( '"' )[1]

def FindNextSubFolder( path ):
    os.chdir( path )
    L  = os.listdir()
    #print( L )
    i = 0
    len_L = len(L)
    while i < len_L:
        if not L[i].startswith( "batch" ):
            del L[i]
            i -= 1
            len_L -= 1
        i += 1
    #print( L )
    def f(x):
        return int( x.split("_")[1] )
    def lastEl( x ):
        if len(x) == 0:
            return 0
        return x[-1]
    L = sorted( list( map( f, L ) ) )
    return "batch_" + str( lastEl(L)+1 )

def main():
    logging.basicConfig(level=logging.INFO)

    args_parser = argparse.ArgumentParser()
    args_parser.add_argument("input_file")
    #args_parser.add_argument("output_folder")
    args = args_parser.parse_args()

    #/data/loris/nifti_out
    output_folder = FindNextSubFolder( '/data/loris/nifti_out')

    if not os.path.exists(output_folder):
        os.makedirs(output_folder)

    organize_nifti(args.input_file, output_folder)


def organize_nifti(input_file, output_folder):

    print( input_file )

    df = pd.read_csv( input_file, sep = "," )

    filenames = df['filename'].tolist()
    studyids = df['studyid'].tolist()

    print( studyids)

    for nii_file, studyid in zip(filenames,studyids):# in glob.glob(os.path.join(input_file, "*.nii")):
        logging.info("Processing %s..." % nii_file)

        nii_file_basename = os.path.basename(nii_file)

        filename = nii_file

        p = subprocess.Popen( [ "mincheader", filename ], stdout=subprocess.PIPE)
        seriesnumber = subprocess.check_output( ('grep','dicom_0x0020:el_0x0011'), stdin=p.stdout )
        p.wait()

        p2 = subprocess.Popen( [ "mincheader", filename ], stdout=subprocess.PIPE)
        seriesdesc = subprocess.check_output( ('grep','dicom_0x0008:el_0x103e'), stdin=p2.stdout )
        p2.wait()

        p3 = subprocess.Popen( [ "mincheader", filename ], stdout=subprocess.PIPE)
        patientid = subprocess.check_output( ('grep','dicom_0x0010:el_0x0020'), stdin=p3.stdout )
        p3.wait()

        seriesnumber = getval( seriesnumber )
        seriesdesc = getval(seriesdesc)
        patientid = getval(patientid)

        metadata = dict()
        metadata['SeriesDescription'] = DEFAULT_PROTOCOL#str(seriesdesc)#DEFAULT_PROTOCOL
        metadata['SeriesNumber'] = DEFAULT_REPETITION#str(seriesnumber)#DEFAULT_REPETITION
        metadata['PatientID'] = str(patientid)#nii_file_basename.split('_')[0]
        metadata['StudyID'] = str(studyid)#nii_file_basename.split('_')[1][:-4]

        print( metadata )

        nii_file_output_fullpath = output_folder
        for attribute in DEFAULT_ORGANISATION:
            nii_file_output_fullpath = os.path.join(nii_file_output_fullpath, metadata[attribute])

        if not os.path.exists(nii_file_output_fullpath):
            os.makedirs(nii_file_output_fullpath)
        nii_file = nii_file[:-3] + "nii"
        logging.info("Copying %s to %s..." % (nii_file, nii_file_output_fullpath))
        print(nii_file, nii_file_output_fullpath)

        shutil.copy2(nii_file, nii_file_output_fullpath)
    logging.info("DONE")


if __name__ == '__main__':
    main()
