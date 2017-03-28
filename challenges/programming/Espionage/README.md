# Espionage

## Question Text

Your company is in dire straits and is losing money due to their competitor

Their competitor has created a new Proprietary designs and software that is beating everything your company has on the market

To try and prevent the companies' bankruptcy, they hired a Industrial Espionage Agent to steal the formulas for our use. 

However, the data is protected by a program the Agent was unable to break into. 

He has left the file in a remote, protected server along with an image file with an account.

Your Job is to gain access to the server, find the file and extract the data protected by the program. Analysts has marked the server at port `8970` of `play.spgame.site`. Good Luck Agent.

## Setup Guide
1. Install Docker
2. Run Build.sh
3. Configure Container with Manual Config File
4. \* This Question will use port 8970

## How to Play
Learn basic Linux commands(cd, ls, cat, ssh, ./)
Learn basic python programming and use it to get the Flag

## Distribution
An Image of an account and IP address

## Solution
1. ssh into the docker container
2. cd into folder3
3. cat the file
4. piece together the scrambled variable to get the access code(or just print the access code)
5. run the program and get the flag `GCTF{e45y_t0_d3c0d3_41ght}`

## Recommended Reads
1. https://www.hostinger.com/tutorials/ssh/basic-ssh-commands
2. https://linux.die.net/man/1/ssh
3. https://wiki.python.org/moin/SimplePrograms
