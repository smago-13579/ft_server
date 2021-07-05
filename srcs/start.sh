#remove default
echo "remove default"
rm -rf /etc/nginx/sites-enabled/default
rm -rf /etc/nginx/sites-available/default

#start sql
service mysql start

#create database
echo "create database"
mysql -e "CREATE USER 'smago'@'localhost' IDENTIFIED BY 'admin';"
mysql -e "CREATE DATABASE smago_database;"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'smago'@'localhost';"
mysql -e "FLUSH PRIVILEGES;"

#change permissions
echo "change permissions"
chmod 777 -R /var/lib/php/*

#start php && nginx
service php7.3-fpm start
service nginx start
service php7.3-fpm status

echo "all done!!!"

bash
