@echo off

SET inputfile="input.jpeg"
SET outputfile="banner.jpeg"
SET flagfile="flag.txt"

REM copy image file
copy %inputfile% %outputfile%

REM wait one second
PING -n 2 127.0.0.1 > nul

REM append flag to image
TYPE %flagfile% >> %outputfile%
