#!/bin/sh
docker build -t guesscharacter .
docker run --name guesscharacter -p 10003:80 -dt guesscharacter
