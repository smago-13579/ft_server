# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: smago <smago@student.21-school.ru>         +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/08/09 14:21:26 by smago             #+#    #+#              #
#    Updated: 2020/08/12 19:21:19 by smago            ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
LABEL maintainer="smago"

RUN	apt-get update && apt-get -y upgrade
RUN	apt-get -y install nginx mariadb-server openssl curl
RUN	apt-get -y install php7.3 php-fpm php-mysql wget vim
RUN apt-get -y install php-curl
RUN apt-get -y install php-xml
RUN apt-get -y install php-xmlrpc
RUN apt-get -y install php-intl
RUN apt-get -y install php-exif
RUN apt-get -y install php-gd
RUN apt-get -y install php-iconv
RUN apt-get -y install php-json
RUN apt-get -y install php-posix
RUN apt-get -y install php-mbstring
RUN apt-get -y install php-simplexml
RUN apt-get -y install php-zip

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xzf latest.tar.gz -C /var/www/
RUN tar xzf phpMyAdmin-5.0.2-all-languages.tar.gz -C /var/www/wordpress/
RUN rm -f latest.tar.gz phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv /var/www/wordpress/phpMyAdmin-5.0.2-all-languages /var/www/wordpress/phpMyAdmin

RUN chown -R www-data:www-data /var/www/* && chmod 775 -R /var/*

RUN openssl req -newkey rsa:2048 -subj "/C=RU/ST=MO/L=Moscow/O=School21/OU=IT/CN=smago" -x509 -nodes -days 365 \
	-keyout /tmp/domain.key -out /tmp/domain.crt 
COPY srcs/localhost /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
COPY srcs/wp-config.php /var/www/wordpress/
COPY srcs/start.sh /tmp
COPY srcs/config.inc.php /var/www/wordpress/phpMyAdmin
COPY srcs/switch_autoindex.sh /tmp/

EXPOSE	80 443

CMD bash tmp/start.sh



