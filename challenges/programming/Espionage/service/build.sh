#!/bin/bash
# Sample run and build docker script

SERVICE="proprietaryinfo"
PORT=8970

sudo docker build -t $SERVICE . && sudo docker run -dt -p $PORT:22 --name $SERVICE $SERVICE
