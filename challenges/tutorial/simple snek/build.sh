#!/bin/sh
docker build -t simplesnek .
docker run --name simplesnek -dt -p 10013:80 simplesnek
