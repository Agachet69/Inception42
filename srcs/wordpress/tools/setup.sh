#!/bin/sh
echo "test" 
set -e
if [ ! -f /var/www/html/wordpress/wp-config.php ]
then
wp config create 	 --allow-root \
					--skip-check \
					--dbname=$DB_NAME \
					--dbuser=$DB_USER \
					--dbpass=$DB_PASSWORD \
					--dbhost=$DB_HOST \
					--dbprefix=wp_ \
					--path=/var/www/html/wordpress
sleep 10

wp core install		--allow-root \
					--url=$WP_URL \
					--title="tbillon's inception" \
					--admin_user=$WP_ADMIN \
					--admin_password=$WP_ADMIN_PASSWORD \
					--admin_email=$WP_ADMIN_EMAIL \
					--path=/var/www/html/wordpress

wp user create user	"$WP_REG_USER@$WP_URL" \
					--allow-root \
					--role=author \
					--user_pass=$WP_REG_USER_PASSWORD \
					--path=/var/www/html/wordpress
fi
/usr/sbin/php-fpm7.3 -F --nodaemonize
