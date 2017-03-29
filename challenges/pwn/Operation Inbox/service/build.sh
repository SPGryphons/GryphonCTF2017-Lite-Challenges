#!/bin/bash

SERVICE="operationinbox"
PORT=8555

sudo docker build -t $SERVICE . && sudo docker run -dt -p $PORT:$PORT --name $SERVICE $SERVICE
