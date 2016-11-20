# Drupal

Install drush

sudo apt-get install drush

log in as super user

sudo su

make directory under html folder and give permission to read and write

root@moin-VirtualBox:/var/www/html# mkdir drupal
root@moin-VirtualBox:/var/www/html# cd drupal
root@moin-VirtualBox:/var/www/html/drupal# 

To remove folder of files html folder 

rm -rf drupal

To give permission to all folder and files under html direcory

To change all the directories to 755 (drwxr-xr-x):

find /var/www/html -type d -exec chmod 755 {} \;

To change all the files to 644 (-rw-r--r--):

find /var/www/html -type f -exec chmod 644 {} \;

Download drupal from web using drush

drush dl drupal-8

Now rename the folder name of drupal-8 to drupal

mv drupal-8.2.3 drupal

Configure a MySQL User and Database for Drupal

mysql -u root -p

create a database for your Drupal installation

mysql> create database drupaldb;

create a user that the Drupal software can use to connect to the database.

mysql> CREATE USER drupaluser@localhost IDENTIFIED BY 'root';

To drop user created by accidentally

mysql> DROP USER 'drupaluser'@'localhost';

granting the user permissions. Drupal needs a variety of permissions in order to function correctly.

GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP,INDEX,ALTER,CREATE TEMPORARY TABLES,LOCK TABLES ON drupal.* TO drupaluser@localhost;

To implement these changes right now, we need to flush the privilege information to disk:

FLUSH PRIVILEGES;

Now, we can exit our interactive MySQL session:

Exit;
