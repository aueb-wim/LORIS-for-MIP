# [![Build Status](https://travis-ci.org/aces/Loris.svg?branch=master)](https://travis-ci.org/aces/Loris) LORIS setup for the Medical Informatics Platform of the Human Brain Project

This is a setup of LORIS' v21.0.1 tailored for the hospitals that have joined the Human Brain Project and use the [Medical Informatics Platform](https://github.com/HBPMedical). The purpose of this dockerized version of LORIS is to add MRI Quality Control functionality to the MIP's [DataFactory](https://github.com/aueb-wim/ehr-datafactory-template) (as an extra step prior to the MRI volumetric brain feature extraction pipeline). This version of LORIS has been modified in order to store additional information about the patients (subjects) which is neccessary for the linkage of the two systems (LORIS and MIP). Also, the procedure of uploading DICOM files (batches) into LORIS has been automated and customized (see **Uploading DICOMS into LORIS** section). In addition, the procedure of extracting NIFTI files from LORIS to MIP's DataFactory imaging pipeline has been automated.


## Prerequisites

* docker: version 19 or later
* docker compose: version 1.22 or later

Optional tools

* [HBP-MIP Data Quality Control Tool](https://github.com/HBPMedical/DataQualityControlTool)

### Reserved ports

* 8082: for MySQL 5.7 container
* 8088: for apache-php container 

These ports may change in the configuration (just edit docker-compose.yml file). 

## Deployment steps in MIP hospital local server

1. Clone this repo into `/data/LORIS/` on MIP hospital local server.

2. In the folder `/data/LORIS/` run:
  
```bash
bash install.sh
```

(Note that when you execute imaging_install_aueb.sh, your working directory must be /data/loris/bin/mri, also you must source beforehand minc-toolkit-config.sh )

#### Notes

* Mysql root access -> 172.28.1.2, root, neopass
* for Mysql loris user -> lorisuser, neopass
* loris frontpage user -> lorisuser, 1234

## Usage of LORIS for MRI Quality Control in MIP

### Importing DICOMS into LORIS

The incoming DICOMS must be placed in the `/data/LORIS/dicom_in` folder. The structure of the subfolders must be like:

```bash
.
|-- <patientID-1>
|    |-- <patientID>_1
|    |   |-- dcm files of multiple scan series having the same StudyID(aka visitID)
|    |  .
|    |  .
|    |-- <patientID>_N
|  .
|  .
|-- <patiendID-N>
```

The [HBP Data Quality Control](https://github.com/HBPMedical) tool has the functionality of producing automatically the above folder structure, while filtering out dcm files that are invalid or don't meet the [HBP-MIP DICOM minimum requirements](https://hbpmedical.github.io/deployment/data/).

In `loris_apache` container we run:
Execute

```shell
python /data/loris/python/dicom_uploader.py
```

dicom_uploader.py will process each dicom-folder within the folder `/data/LORIS/dicom_in` in the host machine and afterwards moves that dicom-folder into the <b>dicom_post</b> folder. If the uploading process is succesful then the `dicom_in` and the `dicom_post` folders will be empty.


### Performing Quality Control check using LORIS

Open a web browser in `<miphospital_serverIP>:8088` and log in LORIS. The defualt user is **lorisuser** and password **1234**.

In `Candidate -> Access Profile` page, the user can see all the patients imported into LORIS. Each patient (candidate in LORIS terms) has two internal indentifier columns, `PSCID` and `DCCID`. In this table the user can be informed about the patient gender, DoB and the total visit number. The external `PatientID` and `StudyID` are stored in the LORIS database and are accessable in `Imaging -> DICOM Archive` page.

In `Imaging -> Imaging Browser` page there are all the patient's MRI visits represented as rows in a table. By clicking in the `native` link in a row under the column `Links`, the user can see all the MRI scans series that the patient had in that particular MRI Session.  

In `Imaging Browser -> View Session` page the user can pick and view any MRI series in the **Brain Browser**. By default, all the MRI series have `QC status` flag set to `Pass` when imported into LORIS. The user could set the `QC status` to `Fail` and that MRI series would not be exported into the **Data Factory** imaging pipeline.

In `Imaging -> DICOM Archive`, the user can export all the MRI series that have `QC status` set to `Pass` in the `View Session` page, and haven't be exported previously, by pressing the `Export Batch` button. Also, the user can view for every MRI scan that has been exported the corresponding batch number. 

Each batch of MRIs Series are stored in the `nifti_out` folder, with folder name `batch_` + `<number>`. The nifti files are stored in a folder structure that is compliant with the Data Factory requirements of the Imaging Pipeline. 
 