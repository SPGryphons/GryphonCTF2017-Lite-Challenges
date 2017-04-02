#!/bin/sh

docker build -t dbp .
docker run --name dbp -dt -p 10007:10007 dbp
