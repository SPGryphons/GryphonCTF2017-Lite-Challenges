# Operation Inbox

## Question Text

We have high suspicions that one of our agents has been actively communicating with a rogue cyber mercanary group called "Erebus". We believe that the agent may have strong ties with said group, but we cannot confirm it.

We need you to help us confirm our suspicions. We have seized the agent's laptop for you to perform "ethical hacking" on. **Get into his email account, and retrieve his inbox.**

Note, we have attached a copy of the source code used in the email program the agent uses. It should come in useful. The agent's email can be accessed with `nc play.spgame.site 8555`.

Created by Optixal

## Setup Guide
1. Ensure port 8555 is available
2. Run `build.sh` in `distrib` folder to build docker img and run a container instance

## How to Play
`nc play.spgame.site 8555`

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
1. Perform a simple buffer overflow attack by entering "YYYYYYYYYYYYYYYYYY" in the input

## Recommended Reads
http://www.thegeekstuff.com/2013/06/buffer-overflow/?utm_source=feedly
