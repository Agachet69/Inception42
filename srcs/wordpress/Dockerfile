FROM	debian:buster

RUN		DEBIAN_FRONTEND=noninteractive apt-get -y update && apt-get -y upgrade && apt-get install -y apt-utils
RUN		apt-get -y install postfix
RUN		apt-get -y install  \
		wget                \
		systemd		        \
		php7.3 php7.3-fpm   \
		php-mysql			\
		php-fpm 			\
		php-pdo 			\
		php-gd 				\
		php-cli 			\
		php-mbstring			

RUN		mkfifo /var/spool/postfix/public/pickup
RUN		service postfix restart

RUN		wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN		chmod +x wp-cli.phar
RUN		mv wp-cli.phar /usr/local/bin/wp

RUN 	mkdir -p /var/www/html/wordpress

# WORKDIR	/var/www/html/wordpress

#Set un and open rights 
RUN		wp core download --path=/var/www/html/wordpress --allow-root
RUN		chown -R www-data:www-data /var/www/html/wordpress/*
RUN		chmod -R 755 /var/www/html/wordpress/*

#Copy configuration files
COPY	./tools/setup.sh /var/www/html/wordpress/
RUN		chmod 777 /var/www/html/wordpress/setup.sh

#Change config listen address in php7.3-fpm
RUN		sed -i -e 's/listen = \/run\/php\/php7.3-fpm.sock/listen = wordpress:9000/g' \
		/etc/php/7.3/fpm/pool.d/www.conf

#Start services 
RUN		systemctl enable php7.3-fpm.service
RUN		service php7.3-fpm start
#RUN		service php7.3-fpm stop

EXPOSE	9000

ENTRYPOINT [ "./var/www/html/wordpress/setup.sh" ]
