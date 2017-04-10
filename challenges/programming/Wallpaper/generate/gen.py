#!/usr/bin/python

import pyqrcode, os, binascii
from PIL import Image

designLocation = "design.txt"
blankImgLocation = "blank.png"
zipLocation = "wallpaper.zip"
distribLocation = "wallpaper_qrs.png"

design = [line.strip().split(',') for line in open(designLocation, 'r')]
design = [[int(i) for i in line] for line in design]

width = 29 # Version 3 QRs
canvas = Image.new("RGB", (width * len(design[0]), width * len(design)))

with open(zipLocation, 'rb') as f:
    hexdata = binascii.hexlify(f.read())
    hexdata = ['0x' + hexdata[offset:offset+2] for offset in range(0, len(hexdata), 2)]

for row in range(len(design)):
    for col in range(len(design[row])):
        if design[row][col] == 1:
            dataSegment = ""
            for i in range(4):
                dataSegment += hexdata.pop(0)
            qr = pyqrcode.create(dataSegment)
            qr.png("tmp.png", scale=1, quiet_zone=0)
            with Image.open("tmp.png") as img:
                canvas.paste(img, (col * width, row * width))
            os.remove("tmp.png")
        else:
            with Image.open(blankImgLocation) as blankImg:
                canvas.paste(blankImg, (col * width, row * width))

canvas.save(distribLocation)
