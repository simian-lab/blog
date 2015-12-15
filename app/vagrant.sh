#!/usr/bin/env bash

# First off, let's install the required software
add-apt-repository -y ppa:chris-lea/node.js
apt-get update
apt-get install -y apache2 php5 libapache2-mod-php5 php5-cli php5-mysql php5-gd
debconf-set-selections <<< 'mysql-server-<5.5> mysql-server/root_password password s1m14n'
debconf-set-selections <<< 'mysql-server-<5.5> mysql-server/root_password_again password s1m14n'
apt-get install mysql-server mysql-client libmysqlclient-dev -y
apt-get install nodejs -y

# Make sure we got git
apt-get install git -y

# Get Bower
npm install -g bower

# Create a database
mysql --user=root --password=s1m14n < /vagrant/stack/local-db.sql

# Install WP-CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

# Get the config files going
cp /vagrant/stack/local-config.php /vagrant/wp-config.php
cp /vagrant/stack/local-virtualhost.conf /etc/apache2/sites-available/blogsimian.conf

# Make sure log folder exists
mkdir /vagrant/logs

# Point everything in the right direction
rm -rf /var/www
ln -fs /vagrant /var/www

# Make sure apache handles our stuff
a2enmod headers
a2enmod rewrite
a2ensite blogsimian

# Restart for good measure
service apache2 restart -y

# Install dependencies
npm install
npm install gulp -g