# Secret Cipher

## Question Text
We found a text file containing some secret message. It is up to you to find out what it means!

Hint: There are two classical ciphers being used. The second one is a version that incorporates the first.

## How to Play
Decode the message and find the flag

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
1. Decode "WKH NHB LV JUBSKRQ" with Caesar Cipher which produces "THE KEY IS GRYPHON".
2. Decode "MTRU{JFLV70_D4573P}" with Vigenere Cipher with the key "GRYPHON" to produce the flag.

Flag: GCTF{CRYP70_M4573R}

## Recommended Reads
Classical Ciphers: http://practicalcryptography.com/ciphers/classical-era/
