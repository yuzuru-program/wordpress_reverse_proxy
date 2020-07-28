FROM wordpress:latest

ADD ./www/wp-config.php /var/www/
ADD ./ports.conf /etc/apache2/ports.conf

RUN chown -R 1000:1000 /var/www/wp-config.php

RUN groupmod -g 1000 www-data
RUN usermod -u 1000 -g 1000 www-data