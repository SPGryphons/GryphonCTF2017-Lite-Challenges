#!/bin/sh
docker build -t starwars .
docker run -d -p 10000:80 --name starwars starwars
docker start starwars
