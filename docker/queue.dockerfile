# Stage 1: Build frontend assets using Node
FROM node:18 AS frontend

# Set working directory
WORKDIR /var/www/app

# Copy only package files to install dependencies first to leverage Docker cache
COPY package.json package-lock.json ./

# Install frontend dependencies
RUN npm install

# Copy rest of the frontend code (after npm install to avoid re-running npm install unnecessarily)
COPY . .

# Build assets using Vite
RUN npm run build


# Stage 2: Use official PHP image with CLI
FROM php:8.2-cli-buster

# Set working directory
WORKDIR /var/www/app

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxpm-dev \
    libwebp-dev \
    libldap2-dev \
    libmagickwand-dev \
    zlib1g-dev \
    libzip-dev \
    libsasl2-dev \
    unzip \
    curl \
    tzdata \
    --no-install-recommends && \
    apt-get clean && rm -r /var/lib/apt/lists/*

# Configure and install GD
RUN docker-php-ext-configure gd --with-webp --with-jpeg --with-xpm --with-freetype && \
    docker-php-ext-install -j$(nproc) gd

# Configure and install LDAP
RUN docker-php-ext-configure ldap && \
    docker-php-ext-install ldap

# Install additional PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    intl \
    pcntl \
    zip \
    bcmath \
    exif

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set timezone
RUN ln -fs /usr/share/zoneinfo/Asia/Dubai /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata

# Copy full Laravel application (including composer.json)
COPY . /var/www/app

# Install PHP dependencies with Composer (this will create the vendor directory)
RUN composer install --no-dev --optimize-autoloader

# Install Laravel Pail package
#RUN composer require laravel/pail

# Copy frontend build artifacts (manifest.json, JS/CSS) into the Laravel public directory
COPY --from=frontend /var/www/app/public/build /var/www/app/public/build

# Set correct file permissions
RUN chown -R www-data:www-data /var/www/app && \
    chmod -R 755 /var/www/app

# Switch to non-root user for running the application
USER www-data

# Run Laravel queue worker (for CLI production use case)
ENTRYPOINT ["php", "artisan", "queue:work", "--sleep=3", "--max-time=1800"]
