#!/bin/bash
INPUTFILE="input.jpeg"
OUTPUTFILE="banner.jpeg"
FLAGFILE="flag.txt"

# copy image file
cp $INPUTFILE $OUTPUTFILE

# wait one second
sleep 1

# append flag to image
cat $FLAGFILE >> $OUTPUTFILE
