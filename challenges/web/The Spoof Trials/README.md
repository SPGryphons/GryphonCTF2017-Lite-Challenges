# The Spoof Trials
Set up apache server with PHP and disable directory listing.

## Question Text
The Trials have begun. Prove yourself by completing this set of challenges!  `http://play.spgame.site:10014/`

Creator: @cyanoise

## Setup Guide
1. Install Apache2 server
2. Install PHP
3. Disable directory listing
4. Move service files to web root directory

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
1. Set up a web proxy (e.g BurpSuite)
2. Configure web browser to go through proxy

Level 1 -> Level 2  Edit URL.

Level 2->Level 3  Going to level 3 asks you to come from level 0 so modify the HTTP headers when going to `level3.php` by adding the HTTP header `Referer` with value `http://play.spgame.site:10014/level0.php`.

Level 3 -> Level 4  Level 4 only accepts Android phone of version 10.11.12 and Chrome browser. So modify the user-agent. Shortest possibility: `Android 10.11.12 Chrome/0 Mobile`.

Level 4 -> Level 5  Level 5 will only give the flag in the year 3017. Time since epoch is stored in a cookie. Modify the value to be at least `33040137600`.

Flag: GCTF{F4K3_17_71LL_Y0U_M4K3_17}

## Recommended Reads
Nothing
