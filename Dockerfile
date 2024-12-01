FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application code
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Run database migrations (optional, be cautious)
RUN php artisan migrate --force && php artisan db:seed --force


# Generate Passport encryption keys (no interaction)
RUN php artisan passport:keys --no-interaction

# Create a personal access client (no interaction)
RUN php artisan passport:client --personal --no-interaction

# Create a symbolic link for storage
RUN php artisan storage:link

# Set permissions
RUN chown -R www-data:www-data /var/www
RUN chmod -R 775 storage bootstrap/cache

# Expose port 8080
EXPOSE 8080

# Start the Laravel application server and queue worker
CMD ["sh", "-c", "php artisan queue:work & php artisan serve --host=0.0.0.0 --port=8080"]
