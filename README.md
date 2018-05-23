# aws_laravel

# Guide on setting up AWS EC2 Ubuntu Instance for Laravel

## Setting LAMP stack using Amazon EC2, Followed the tutorial from https://www.youtube.com/watch?v=Um1zQKPVFfU
Follow Video from 1 to 4

###Install apache server

sudo apt-get install apache2

###Restart apache server

sudo service apache2 restart
sudo apt-get install mysql-server
*PLEASE REMEMBER THE PASSWORD
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql

####To confirm the sql installation, username and password
mysql_secure_installation

###Check password whether correct
mysql -u root -p

###Edit the security inbound rule of the EC2 Instance

Type:HTTP 
Source: Anywhere

###Use workbench to test connection to the SQL database
https://www.mysql.com/products/workbench/

###Installing Composer

cd /var/www/html
sudo curl -O https://getcomposer.org/composer.phar
sudo mv composer.phar composer
sudo chmod +x composer
sudo mv composer /usr/local/bin

####Check composter is installed correctly

composer

###Installing necessary dependencies
sudo apt-get install php-mbstring
sudo apt-get install php-xml
sudo apt-get install zip unzip

###Using Composer to install Laravel (Project name is "laravel")

sudo composer create-project laravel/laravel laravel --prefer-dist

###Edit Apache config file
cd /etc/apache2/sites-available
Edit '000-default.conf' (use your prefered text editor)

<Directory "var/www/html/laravel">
AllowOverride all
Require all granted
</Directory>

After finish Editing
Invoke sudo a2enmod rewrite

### Enable writing permission for "ubuntu" user
cd /var/www/html
sudo chmod 777 -R laravel/
sudo service apache2 restart


#Laravel Tutorial

## Following tutorial from https://laracasts.com/series/laravel-from-scratch-2017


### 01-Laravel Installation and Composer
### 02-Basic Routing and Views
### 03-Laravel Valet is Your Best Friend
### 04-Database Setup and Sequel Pro
### 05-Pass Data to Your Views
### 06-Working With the Query Builder
### 07-Eloquent 101
### 08-Controllers
### 09-Route Model Binding
### 10-Layouts and Structure
### 11-Form Request Data and CSRF
### 12-Form Validation 101
### 13-Rendering Posts
### 14-Laravel Mix and the Front-end
### 15-Eloquent Relationships and Comments
### 16-Add Comments
### 17-Rapid Authentication and Configuration (Not Impletemented)
### 18-Associating With Users
### 19-Associating With Users Part 2
### 20-Archives
### 21-View Composers
### 26-Sending Email


Skipping Tutorial 22,23,24,25
