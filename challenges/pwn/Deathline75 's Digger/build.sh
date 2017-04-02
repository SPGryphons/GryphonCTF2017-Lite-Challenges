#!/bin/sh

docker build -t deathlinedigger .
docker run --name deathlinedigger -dt -p 10009:80 deathlinedigger
