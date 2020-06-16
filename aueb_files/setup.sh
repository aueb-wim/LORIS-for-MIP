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

echo "Updateting mysql and frontent users in LORIS database"
mysql -u root --password=neopass -h $MYSQL_HOST --database=LORIS < /data/loris/aueb/sql/loris_mandatory.sql
mysql -u root --password=neopass -h $MYSQL_HOST --database=LORIS < /data/loris/aueb/sql/update_interface.sql
mysql -u root --password=neopass -h $MYSQL_HOST --database=LORIS < /data/loris/aueb/sql/trigger.sql
echo "Done"

echo "Updating folder permisions"
chgrp www-data -R /data/loris/csvs
chgrp www-data -R /data/loris/nifti_out
chgrp www-data -R /data/loris/dicom_post

chmod -R g+rw /data/loris/csvs
chmod -R g+rw /data/loris/nifti_out
chmod -R g+rw /data/loris/dicom_post
echo "Done"

echo "Installation completed"
