# Cancel My Appointment
Requires PHP web server and a MySQL Database.

## Question Text
I just found out I wouldn't be free for my injection appointment at the hospital! Could you help me cancel my appointment?

My username and password is.... Ah I think you'll find a way in without it, right?

The hospital website is at http://play.spgame.site:10002

Creator: zxlim

## Setup Guide
1. Set up a PHP web server and MySQL Database.
3. Import dump.sql located inside `generate` folder to your database.
3. Place all the files in the `service` folder to web root.
4. Modify the variables defined in `includes/constants.php` according to your database setting.
5. In the docker container, import the sql file at /tmp and set the permissions correctly for the db user.
## How to Play
Log into the application and cancel the user's appointment.

## Solution
Log into the application using SQL Injection e.g. use `' or 1=1 #` as the username.

Once in, click on "View All Appointments" button.

Using your browser's developer tools, remove the attribute "disabled" from the "Cancel" button element.
Finally, click the button and you will get the flag.

Flag: GCTF{4N_1NJ3C710N_4_D4Y_G1V35_7H3_FL46_4W4Y}
