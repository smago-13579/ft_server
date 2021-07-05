#!/bin/bash

if grep -q "autoindex on" /etc/nginx/sites-available/localhost
then
	sed -i "s/autoindex on/autoindex off/" /etc/nginx/sites-available/localhost
	service nginx restart
	echo "autoindex - off"
elif grep -q "autoindex off" /etc/nginx/sites-available/localhost
then
	sed -i "s/autoindex off/autoindex on/" /etc/nginx/sites-available/localhost
	service nginx restart
	echo "autoindex - on"
fi
