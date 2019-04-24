#!/bin/bash

#Restart apache2 service, if running
service apache2 restart

#These first two lines are not needed if apache2 and php are already installed
apt-get install apache2
apt-get install php libapache2-mod-php

#Create dirs inside of webserver root 
mkdir /var/www/html/media


cp zero.php /var/www/html/zero.php
cp 35d6d33467aae9a2e3dccb4b6b027878.php /var/www/html/35d6d33467aae9a2e3dccb4b6b027878.php
cp 8cbad96aced40b3838dd9f07f6ef5772.php /var/www/html/8cbad96aced40b3838dd9f07f6ef5772.php
cp b8a9f715dbb64fd5c56e7783c6820a61.php /var/www/html/b8a9f715dbb64fd5c56e7783c6820a61.php
cp f17b2e37789a14d06e8e63c0a1a37c27.php /var/www/html/f17b2e37789a14d06e8e63c0a1a37c27.php
cp media/* /var/www/html/media/
cp *.jpg /var/www/html/media/

#Restart apache2 service again
service apache2 start


