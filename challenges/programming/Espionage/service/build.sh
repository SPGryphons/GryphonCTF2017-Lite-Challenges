#!/bin/bash

SERVICE="proprietaryinfo"
PORT=10003

sudo docker build -t $SERVICE . && sudo docker run -dt -p $PORT:22 --name $SERVICE $SERVICE
