# Done In A Diffie
Pip install Start python socket server.

## Question Text
Aw snap... Our key exchange client program has been corrupted. Luckily we have a backup plan. There is a manual key exchange server located at `nc play.spgame.site 10012`.

Created by cyanoise

## Setup Guide
1. Intstall PyCryptoDome for python 3 (pip3 install pycryptodomex / python3 -m pip install pycryptodomex)
2. Modify port number
3. Start python socket server

## Solution
1. Perform Diffie-Hellman Key Exchange with server.
2. Hash the shared key with MD5 to produce a 16 byte hash (in bytes).
3. Decode the base64 encoded encrypted string into bytes.
4. Build the AES-128-ECB key with the shared key hash.
5. Perform decryption on the ciphertext to obtain the flag.

Flag: GCTF{7H3_6R4ND_3XCH4N63_4ND_7H3_6R347_D3CRYP7}

## Recommended Reads
[Diffie-Hellman Key Exchange In Plain English](https://security.stackexchange.com/questions/45963/diffie-hellman-key-exchange-in-plain-english#answer-60659)
