# Another Star Wars Story
Set up a web server and disable directory listing.

## Question Text
The Empire has once again built another Death Star. The Rebels intercepted critical information and have managed to gain access to the administrator console. You have been tasked to shut down the Death Star before it destroys another planet!

Hint: May the Source be with you!

Creator: cyanoise

## Setup Guide
1. Set up a web server.
2. Place all the files.
3. Disable directory listing.

## How to Play
Find the secret PIN to access the Death Star's controls and shut it down.

## Solution
The secret PIN is 0504 which is in the script tag in the source code of deathstar.html.

Looking at the source code of controlpanel.html, there is a comment that says "Shutdown.html". Access the shutdown page by force browsing, editing the browser URL to go directly to shutdown.html.

Flag is GCTF{D0_0R_D0_N07_TH3R3_15_N0_7RY}
