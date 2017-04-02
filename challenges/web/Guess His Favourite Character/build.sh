#!/bin/sh
docker build -t guesscharacter .
docker run --name guesscharacter -p 10006:80 -dt guesscharacter
