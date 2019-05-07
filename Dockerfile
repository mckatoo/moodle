FROM php:7.3-apache-stretch

RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN yes | pecl install xdebug-2.7.0 \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN usermod -u 431 www-data

RUN set -eux; apt-get update; apt-get install -y wget libzip-dev zlib1g-dev; docker-php-ext-install zip

EXPOSE 80

EXPOSE 443