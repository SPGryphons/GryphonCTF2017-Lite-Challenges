#!/bin/bash

SERVICE="operationinbox"
PORT=10004

sudo docker build -t $SERVICE . && sudo docker run -dt -p $PORT:$PORT --name $SERVICE $SERVICE
