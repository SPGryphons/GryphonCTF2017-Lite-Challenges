#!/bin/bash

SERVICE="sqlserver"
PORT=10005

sudo docker build -t $SERVICE . && sudo docker run -dt -p $PORT:3306 --name $SERVICE $SERVICE
