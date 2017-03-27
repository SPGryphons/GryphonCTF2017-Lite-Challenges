# Erebus' Invitation

## Question Text
A sleazy looking email popped up in your spam folder earlier today. Being tempted, you opened it and realized that the email is blank with no body and subject. The only information you have is the sender's email address `erebus@zipped.com`, and a file named `invitation.jpg` attached to the email.
Creator: Optixal

## Setup Guide
1. For the sake of immersiveness, use scallion to generate pub/priv key pair for custom onion url.
2. Host service files on dark web using the keys with free hosting solutions such as Daniel's hosting or Freedom Hosting II.

## How to Play
No instructions.

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
1. The attachment `invitation.jpg` contains a ZIP file appended to the end of itself. Using the clue from the question text (`erebus@zipped.com`), participants can simply rename `invitation.jpg` to `invitation.zip`. Alternatively for more advanced participants, we can open `invitation.jpg` in a hex editor, scroll to the bottom and find that there is a "PK" (ZIP) file located there. Furthermore, participants may also use `binwalk` to carve out the hidden ZIP file.
2. Once the ZIP file is obtained, unzip it. Participants who renamed `invitation.jpg` to `invitation.zip` may find that unzipping it by default on Windows/Linux will fail. Instead they should use WinRAR. Further explanation will be provided when needed.
3. Inside the zip, a text file named `location.txt` will be found there. The text file will contain the text `darkgod3exhwm23m.onion is your destination.`.
4. Use an anonymizing service to browse to that [url](http://darkgod3exhwm23m.onion). (Requires Tor, Tails, Freenet)
5. Flag will displayed in plaintext on the site. `GCTF{P1L6R1M463_H45_B36UN.3NL16H73NM3N7_4W4175}`

## Recommended Reads
Simple Binwalk Tutorial: https://github.com/briankip/binwalk-tutorial
