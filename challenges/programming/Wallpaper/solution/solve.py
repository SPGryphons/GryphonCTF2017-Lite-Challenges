#!/usr/bin/python

from PIL import Image
import zbarlight, binascii

challengeLocation = "wallpaper_qrs.png"
outputFile = "solved.zip"

qrWidth = 29
hexdata = ""

with Image.open(challengeLocation) as img:
    for h in range(img.height / qrWidth):
        for w in range(img.width / qrWidth):
            qr = img.crop((w * qrWidth, h * qrWidth, w * qrWidth + qrWidth, h * qrWidth + qrWidth)) # Chop into individual QR codes
            qrReadable = qr.resize((66, 66)) # Resize due to zbarlight requirement for 66x66 minimum QR code size
            codes = zbarlight.scan_codes('qrcode', qrReadable)
            try:
                print codes[0]
                hexdata += codes[0].decode("UTF-8")
            except TypeError:
                pass
            qr.close()
            qrReadable.close()

hexdata = hexdata.replace("0x", "")
with open(outputFile, 'wb') as f:
    f.write(binascii.unhexlify(hexdata))
    print "File written to {}!".format(outputFile)
