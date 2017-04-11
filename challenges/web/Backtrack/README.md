# Backtrack
Set up apache server with PHP.

## Question Text
There is this level-based mini web game. I got halfway through and couldn't go any further so I gave up. Can you do better? Game is at http://play.spgame.site:10014/

## Setup Guide
1. Install Apache2 server
2. Install PHP
3. Move service files to web root directory

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
1. Set up a web proxy (e.g BurpSuite)
2. Configure web browser to go through proxy
3. Modify the HTTP headers when going to `level2.php`, adding HTTP header `Referer` with value `http://play.spgame.site:10014/level3.php`

Flag: GCTF{7H3_R3F_41N7_607_N07H1N6_0N_Y0U}

## Recommended Reads
Nothing
