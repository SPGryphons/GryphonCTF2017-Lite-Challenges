# My Awesome Friend
Brief information on how to set up this challenge

## Question Text
My friend concealed an important message in secret.jpg and I have to use
https://futureboy.us/stegano/decinput.html to retrieve it. However, to decode the image, I
would need a password, which my friend hinted that it is hidden in memes.ppt.
Will you help me get the message ?

## Setup Guide
1. Fill this in
2. Commit to git
3. Push to repository

## How to Play
1. Download the .ppt and the image and look for the password in the .ppt
2. Go to https://futureboy.us/stegano/decinput.html .
3. Upload the image, enter the found password and press "Submit".
4. Submit the flag shown on the browser.

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
1.  Download the .ppt and look for the password in it.
    1. Go to slide 5, look at the image.
    (CLUE: GREAT MOMENTS AWAIT AROUND EVERY CORNER.THE FIRST PART IS "just".)
    2. Go to slide 1, look at the bottom left corner of the slide.
    (CLUE: BEHIND EVERY GREAT MEME IS A GREAT STORY. THE SECOND PART IS "do".)
    3. Go to slide 3 , look behind the star image by moving it away.
    (CLUE: THE LAST PART IS "nothing".)

2. Go to https://futureboy.us/stegano/decinput.html
3. Input the image and the enter "justdonothing" as the password.
4. Just press submit and you will see the flag: GCTF{D0NT_L3T_UR_DR34M5_B3_DR34M5}



## Recommended Reads
Nothing
