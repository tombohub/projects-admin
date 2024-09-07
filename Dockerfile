# Step 1: Use an official PHP image as the base image
FROM php:8.3-fpm

# Step 2: Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    unzip \
    git \
    nginx

# Step 3: Install PHP extensions required for Laravel
RUN docker-php-ext-install pdo mbstring tokenizer xml gd

# Step 4: Set the working directory
WORKDIR /var/www

# Step 5: Install Composer (Laravel's dependency manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 6: Copy the Laravel application files into the container
COPY . /var/www

# Step 7: Install Laravel dependencies using Composer
RUN composer install

# Step 8: Set proper file permissions for Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache

# Step 9: Copy Nginx configuration file for Laravel
COPY ./nginx/nginx.conf /etc/nginx/nginx.conf

# Step 10: Expose port 80 for Nginx
EXPOSE 80

# Step 11: Start Nginx and PHP-FPM
CMD service nginx start && php-fpm
