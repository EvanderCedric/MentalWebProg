FROM php:8.2-cli

# Install OpenSSL library
RUN apt-get update && apt-get install -y \
    libssl1.0.0 \
    libssl-dev

# Copy application files
WORKDIR /app
COPY . .

# Install Composer dependencies
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-dev --optimize-autoloader

# Expose the application port
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
