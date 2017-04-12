#!/bin/sh

docker build -t spoof .
docker run --name spoof -dt -p 10014:80 spoof
