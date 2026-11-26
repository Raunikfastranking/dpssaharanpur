FROM php:8.3-apache

# Enable Apache modules required by .htaccess (clean URLs, CORS headers)
RUN a2enmod rewrite headers

# Allow .htaccess overrides under the document root
RUN sed -ri 's/AllowOverride\s+None/AllowOverride All/g' /etc/apache2/apache2.conf

# PHP runtime settings suitable for this site
RUN { \
    echo 'memory_limit=256M'; \
    echo 'max_execution_time=60'; \
    echo 'upload_max_filesize=20M'; \
    echo 'post_max_size=25M'; \
    echo 'display_errors=Off'; \
    echo 'log_errors=On'; \
} > /usr/local/etc/php/conf.d/dps.ini

WORKDIR /var/www/html

EXPOSE 80
