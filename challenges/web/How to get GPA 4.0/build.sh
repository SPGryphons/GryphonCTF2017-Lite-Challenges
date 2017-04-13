#!/bin/sh
docker build -t gpa .
docker run --name gpa -dt -p 10015:80 gpa
