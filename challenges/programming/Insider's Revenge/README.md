# Insider's Revenge

## Question Text

Your company has been experiencing financial difficulties, which has been amplified recently by a series of insiders and hackers leaking sensitive information to the public or the companies' competitor.

Due to this, and as a low-level Technician, your pay has been cut multiple times and the company now owes you over 6 months worth of pay.

To make matters worse, there has been rumors that lay-offs would likely be coming soon, especially in your sector. Your colleague in the HR department has just informed you that you are one of them and the company would not be able to pay the wages they owe you.

After being mistreated for almost a year, you decide to preemptively seize the information in the companies' databases before your access is revoked and sell it off to make back the money they owed and as revenge to the company.

You know the companies' SQL server is at port `8770` of `play.spgame.site` and you must use your username of `Technician` and password of `password` to get the data. You also heard there was an important piece of data in the table `operations` where column `index` is `2`. Time to get to work.

Created by ESLunarPhoenix

## Setup Guide
1. Install Docker
2. Run Build.sh
3. Configure Container with Manual Config File
4. \* This Question will use port 8770

## How to Play
1. Learn basic SQL commands(Select)

## Distribution
No Distribution

## Solution
1. Run `mysql -h play.spgame.site -u Technician -ppassword --port 8770 gctfdb` to get into the database
2. Run `select * from gctfdb.operations;`
3. Get the flag `GCTF{C0n9r4tz_sq1_u53r}`

## Recommended Reads
Nothing
