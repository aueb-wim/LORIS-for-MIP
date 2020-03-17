#!/bin/bash
echo "Creating dicom input folders"
mkdir dicom_in

echo "Building docker images"
docker-compose build

echo "Running docker containers"
docker-compose up -d

while [ 1 -eq 1 ]
do
   docker inspect loris_mysql | grep "Running"
   if [ $? -eq 0 ]
   then
       echo "mysql container is up"
       # container my be running but is not fully up, so wait a bit
       sleep 2m
       break
   fi
done

echo "setting up loris container"

docker exec -it loris_apache bash /data/loris/aueb/setup.sh
