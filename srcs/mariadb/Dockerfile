FROM debian:buster

#Updating packages
RUN apt-get update

#Install mariadb 
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y apt-utils mariadb-server mariadb-client

#Copy configuration files
COPY /conf/db.sql /etc/mysql/
COPY /tools/setup.sh /

CMD bash setup.sh