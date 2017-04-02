#!/bin/sh
mysql -u root -p3amCode < /tmp/dump.sql
mysql -u root -p3amCode -e "GRANT SELECT ON myappointments.* TO 'myappointments'@'localhost' IDENTIFIED BY 'myappointmentsDB';"
