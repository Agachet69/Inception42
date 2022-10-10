FROM debian:buster

RUN apt-get update -y \
&& apt-get install -y \
nginx openssl

RUN openssl req -newkey rsa:4096 \
            -x509 \
            -sha256 \
            -days 365 \
            -nodes \
            -out /etc/nginx/example.crt \
            -keyout /etc/nginx/example.key \
            -subj "/C=FR/ST=Lyon/L=Lyon/O=42School/OU=agachet/CN=agachet"

COPY ./default ./etc/nginx/sites-enabled/

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
