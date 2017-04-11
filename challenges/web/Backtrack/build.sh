#!/bin/sh

docker build -t backtrack .
docker run --name backtrack -dt -p 10014:80 backtrack
