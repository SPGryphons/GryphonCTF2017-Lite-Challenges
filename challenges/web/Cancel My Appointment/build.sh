#!/bin/sh
docker build -t appointments .
docker build -f Dockerfile.appointments -t db-appointments .
docker run --name db-myappointments -e MYSQL_ROOT_PASSWORD=3amCode -e MYSQL_USER=myappointments -e MYSQL_PASSWORD=myappointmentsDB -e MYSQL_DATABASE=myappointments -d db-appointments
docker run --name appointments -dt --link db-myappointments -p 10008:80 appointments
