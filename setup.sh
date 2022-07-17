#! /bin/bash

set -e

composer install
composer dump-autoload

$DB_HOST
$DB_PORT
$DB_NAME
$DB_USERNAME
$DB_PASSWORD

touch config/config.php
cd config
echo "<?php" > config.php
echo "" >> config.php
echo "Configure the following environment variables"
echo "Enter the IP for the database server: "
read DB_HOST
echo "\$DB_HOST=\"${DB_HOST}\";" >> config.php
echo "Enter the PORT for the database server: "
read DB_PORT
echo "\$DB_PORT=\"${DB_PORT}\";" >> config.php
echo "Enter the name of the database: "
read DB_NAME
echo "\$DB_NAME=\"${DB_NAME}\";" >> config.php
echo "Enter the username of the mysql server: "
read DB_USERNAME
echo "\$DB_USERNAME=\"${DB_USERNAME}\";" >> config.php
echo "Enter the password for the mysql server: "
read DB_PASSWORD
echo "\$DB_PASSWORD=\"${DB_PASSWORD}\";" >> config.php
echo "?>" >> config.php

cd ..

mysql -u $DB_USERNAME -p $DB_NAME < schema/schema.sql