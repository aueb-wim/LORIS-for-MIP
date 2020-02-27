# [![Build Status](https://travis-ci.org/aces/Loris.svg?branch=master)](https://travis-ci.org/aces/Loris) LORIS setup for the Medical Informatics Platform of the Human Brain Project

This is a setup of LORIS' v21.0.1 tailored for the hospitals that have joined the Human Brain Project and use the [Medical Informatics Platform](https://github.com/HBPMedical).

<br>

## Installation

### Dockerization

* Clone this repo
* run docker-compose up --build
* docker exec -it loris_apache bash
curl_query.sh creates the db schema, mysqluser and frontend user of loris
    * Mysql root access -> 172.28.1.2, root, neopass
    * for Mysql loris user -> lorisuser, neopass
    * loris frontpage user -> lorisuser, 1234
* bash /data/loris/aueb/curl_query.sh
If you attempt to login now the design will not load display correctly, to fix that you need to execute the update_interface.sql to the mysql-container.

At the mysql-container execute
```shell
UPDATE `LORIS`.`psc` SET `MRI_alias`='DCC' WHERE `CenterID`='1';
INSERT INTO Visit_Windows (Visit_label,  WindowMinDays, WindowMaxDays, OptimumMinDays, OptimumMaxDays, WindowMidpointDays) VALUES ('V1', '0', '2147483647', '40', '60', '50');
```

(Note that when you execute imaging_install_aueb.sh, your working directory must be /data/loris/bin/mri, also you must source beforehand minc-toolkit-config.sh )
* source /opt/minc/1.9.17/minc-toolkit-config.sh
* cd /data/loris/bin/mri
and execute imaging_install_aueb.sh in /data/loris/bin/mri
* bash imaging_install_aueb.sh

And now the setup has been completed and you are ready to make use of the containers.

Note that when you login into loris_apache container you must see that your environment is displayed as (loris-mri-python).

For the execution of the python scripts proceed to /data/loris/python

6. Quality control

In order to mark all newly inserted mincs as "Pass"

Images in our case are ought to be initialized with a 'PASS' label upon being imported to LORIS. This is done by triger "files_AFTER_INSERT"

```shell
DELIMITER $$
CREATE DEFINER = CURRENT_USER TRIGGER `LORIS`.`files_AFTER_INSERT` AFTER INSERT ON `files` FOR EACH ROW
BEGIN
	INSERT INTO files_qcstatus
	SET	FileID = NEW.FileID,
     SeriesUID = NEW.SeriesUID,
     EchoTime = NEW.EchoTime,
     QCStatus = "Pass",
     QCFirstChangeTime = unix_timestamp( NOW() ),
     QCLastChangeTime = unix_timestamp( NOW() );
END $$ql
```

Loris does not store the StudyID of the mincs files into the database. One workaround is to modify the "files" table

```shell
ALTER TABLE files ADD FileStudyID TEXT DEFAULT NULL;
```

and execute fill_studyid.py which read the mnic header of each file to fill the missing studyid information.

```shell
sudo apt-get install minc-tools
python fill_studyid.py
```

In order to discriminize which files with "PASS" have been examined for the next stage we add one column

```shell
ALTER TABLE files ADD FileStudyComplete INT DEFAULT 0;
```

7. Insert Data

Make sure that pre and post folders exists, otherwise create them.

```shell
cd ~
mkdir pre post
```

Place your dicoms files to /home/loris/pre

It is recommended to make use of https://github.com/aueb-wim/DataQualityControlTool/ to find invalid .dcm files that you should not include while uploading a dicom, otherwise the upload will fail.

Example:
Upload a dicom folder to loris_apache container from host to /home/lorisadmin/pre
```shell
docker cp folder_path_from_host loris_apache:/home/lorisadmin/pre
```


Execute

```shell
python dicom_uploader.py
```

dicom_uploader.py will process each dicom-folder within the folder <b>pre</b> and afterwards moves that dicom-folder to the <b>post</b> folder.
