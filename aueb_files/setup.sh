#!/bin/bash
echo "Creating LORIS database"
cd /data/loris/aueb
bash curl_query.sh
echo "Done"

source /opt/minc/1.9.17/minc-toolkit-config.sh

echo "installing mri module"
cd /data/loris/bin/mri
bash imaging_install_aueb.sh
echo "Done"

echo "Updating folder permisions"
chmod a+rw /data/loris/csvs
chmod a+rw /data/loris/nifti_out
chmod a+rw /data/loris/dicom_post
echo "Done"

echo "Installation completed"
