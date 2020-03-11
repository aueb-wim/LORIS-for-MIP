#!/bin/bash
echo "Creating dicom input folders"
mkdir dicom_in

echo "Building docker images"
docker-compose build

echo "Running docker containers"
docker-compose up -d

echo "setting up loris container"

docker exec -it loris_apache bash /data/loris/aueb/setup.sh
