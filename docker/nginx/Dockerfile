FROM nginx:stable-alpine

ADD ./nginx.conf /etc/nginx/nginx.conf
ADD ./default.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/html
RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN chown laravel:laravel /var/www/html