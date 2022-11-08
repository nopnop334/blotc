FROM php:7.4-apache
RUN apt-get update && \
    a2enmod rewrite && \
    apt-get -y autoremove && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* 
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf
COPY ./ /var/www/html
ENV TZ=Asia/Bangkok
