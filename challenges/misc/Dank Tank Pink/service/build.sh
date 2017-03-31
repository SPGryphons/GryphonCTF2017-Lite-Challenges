#!/bin/sh

docker build -t dbp .
docker run --name dbp -dt -p 9996:9996 dbp
