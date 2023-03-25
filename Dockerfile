FROM registry.gitlab.com/pmberjaya/php-server:8.1-image

#Composer#
COPY composer.json /var/www/html/

WORKDIR /var/www/html

RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-scripts --no-autoloader
#End of Composer#
RUN docker-php-ext-install mysqli pdo pdo_mysql
#Code Setting#
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/supervisord.conf /etc/supervisord.conf
COPY ./docker/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./docker/php.ini /usr/local/etc/php
COPY . /var/www/html/
RUN composer dump-autoload
RUN php artisan config:clear
#End Of Code Setting#

# COPY .env.alpha .env

RUN chown -R www-data /var/www/html/storage && \
	chown -R www-data /var/www/html/public && \
	chgrp -R www-data storage /var/www/html/storage && \
	chmod -R ug=r+w+x storage /var/www/html/storage && \
	chown -R www-data:www-data /tmp

EXPOSE 80 443
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]