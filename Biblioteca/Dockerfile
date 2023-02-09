# Use the official PHP image as the base image
FROM php:8.1-apache

# Copy the Laravel project into the container
COPY C:/Users/theus/Documents/GitHub/Projeto-Biblioteca/Biblioteca /var/www/html/

# Change the working directory to the Laravel project directory
WORKDIR /var/www/html

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev \
    zlib1g-dev \
    libzip-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install zip

# Enable the Apache mod_rewrite module
RUN a2enmod rewrite

# Expose port 80 in the container to port 8000 on the host machine
EXPOSE 80
CMD ["apache2-foreground"]
