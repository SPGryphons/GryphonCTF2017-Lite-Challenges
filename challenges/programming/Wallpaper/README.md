# Wallpaper

## Question Text

"KK", a third-year DISM senior who supposedly is the best programmer in SP just left for the bathoom, leaving his laptop active and unlocked at his desk.

His wallpaper looked amazing.. and you considered asking him where he got it from, but that's just awkward. Being ballsy, you decided to use your USB to extract the wallpaper from his laptop.

After having a closer look at the wallpaper, you notice something strange about it. It seems like there's something embedded in that walllpaper..

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
The "embedded" stuff on the wallpaper are QR codes, and interestingly, forms the word "FLAG". Each QR code contain a 16 character string representing 4 bytes of hex data in the format of "0xFF0xFF0xFF0xFF". Decoding every QR code and joining their decoded hex data together will form an encrypted ZIP file. Unarchive it with the password "FLAG" and the GCTF flag of `GCTF{Fr35hy_PR06R4mm1N6_60d}` along with some interesting files will be found in it.

1. Extract the "embedded" QR codes in the wallpaper with Photoshop's Magic Wand (set to 0 tolerance), GIMP or any other photo editing software.
2. Cropping out the first QR code and scanning it reveals "0x500x4B0x030x04", which can be interpreted as hex values "50 4B 03 04".
3. Converting these hex values into ASCII will return "PK..".
4. Searching "50 4B 03 04 PK" will lead to ZIP's file signature.
5. Scanning other parts of the embedded QR codes will reveal that they are all made up of hex values.
6. Participants may now infer that the entire bunch of embedded QR codes make up a ZIP file.
7. Write a program to slice up the embedded QR codes into individual QR codes. Recommended: python and PIL (pillow image processing) library
8. Make the program decode every QR code from left to right, starting from the top row. Recommened: zbarlight libary
9. Join together all decoded strings from the QR codes to form a long hex string.
10. Convert them from hex strings ("0x500x4B0x030x040x140x00..") to hex values (0x50 0x4B 0x03 0x04 0x14 0x00 ..). Recommended: binascii (hexlify)
11. Write out the hex values to a file. Recommended: python IO read/write files
12. The file will be an encrypted ZIP archive, extract it with the password of "FLAG", which was the shape of the embedded QR codes.
13. Open "flag.txt" in it.

## Recommended Reads
* http://www.garykessler.net/library/file_sigs.html - File signatures
* https://pillow.readthedocs.io/en/4.1.x/reference/Image.html - Image processing in python
* https://zbarlight.readthedocs.io/en/latest/V - Decoding QR codes in python
* https://docs.python.org/2/library/binascii.html#binascii.unhexlify - Converting hex values in python
* https://learnpythonthehardway.org/book/ex16.html - Writing to files in python
