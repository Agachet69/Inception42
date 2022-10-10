mkdir /var/www/wordpress
cd /var/www/wordpress
mv /wp-config.php ./
wp core download --allow-root
wp core install --url="localhost" --title="AGACHET'S SITE BY 'ENFIN'/ $1" --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASSWORD --admin_email=$ADMIN_EMAIL --allow-root
wp user create $USER_NAME $USER_EMAIL --user_pass=$USER_PASSWORD --role=editor --allow-root
chown www-data:www-data /var/www
chmod 744 /var/www
mkdir /run/php


#wget https://wordpress.org/latest.tar.gz
#tar xvf latest.tar.gz
#cp -a wordpress/. /var/www/wordpress
#mv www.conf /etc/php/7.3/fpm/pool.d/




exec php-fpm7.3 -F

#cd ../../..
#wp core config --dbname=wordpress --dbuser=utilisateur --dbpass=motdepasse --dbhost=localhost --dbprefix=wp_ --allow-root
#cd var/www/wordpress
#wp core install --url="votredomaine.com" --title="Titre du Site" --admin_user="nomdutilisateur_admin" --admin_password="motdepasse_administrateur" --admin_email="votre@email.com"
#wp core config --dbname=wordpress --dbuser=utilisateur --dbpass=motdepasse --dbhost=localhost --dbprefix=wp_ --allow-root
