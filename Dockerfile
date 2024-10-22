# Dockerfile
FROM php:8.1-apache

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite if necessary
RUN a2enmod rewrite

# Make sure the PHP script can read environment variables
# This could also be modified directly if PHP were to be installed locally
RUN sed -i 's/^variables_order = "GPCS"/variables_order = "EGPCS"/' /usr/local/etc/php/php.ini-production \
    && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini