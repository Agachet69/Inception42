FROM debian:buster

RUN apt-get update -y \
&& apt-get install -y unzip wget curl
RUN apt-get install -y php7.3 php7.3-fpm php7.3-mysql php-common php7.3-common php7.3-json php7.3-readline

COPY /wp-config.php ./
COPY /www.conf /etc/php/7.3/fpm/pool.d
COPY /start.sh ./

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

CMD bash /start.sh

EXPOSE 9000
