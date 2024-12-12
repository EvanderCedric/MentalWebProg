FROM php:8.2-cli

# Install the required dependencies
RUN apt-get update && apt-get install -y \
    libssl1.1 \
    libssl-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set the working directory
WORKDIR /app

# Copy application files
COPY . .

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm composer-setup.php && \
    composer install --no-dev --optimize-autoloader

# Expose the application port
EXPOSE 8080

# Run the application
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
