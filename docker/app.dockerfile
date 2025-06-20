# Stage 1: Build frontend assets using Node
FROM php:8.4-fpm-alpine

# Install Node.js and npm
RUN apk add --update --no-cache nodejs npm

# Install PHP extensions
RUN set -ex \
	&& apk add --update --no-cache \
	postgresql-dev \
	git zlib-dev freetype \
	libpng libjpeg-turbo freetype-dev \
	libpng-dev libjpeg-turbo-dev libwebp-dev \
	libzip-dev zip \
	&& docker-php-ext-configure gd \
	--with-freetype \
	--with-jpeg \
	--with-webp        

RUN docker-php-ext-install pdo_pgsql mysqli pdo pdo_mysql  gd zip pcntl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer



# Set working directory
WORKDIR /var/www/app

# Copy package files first (better for caching)
# COPY package.json package-lock.json ./

# # Install npm dependencies
# RUN npm install

# # Copy the rest of the application
 COPY . .

 #composer install
# RUN composer update

# # Run Vite build during image build (optional, for production)
# RUN npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/app

# Switch user if needed
# USER www-data

# Start PHP-FPM (main service)
# CMD ["php",'artisan','migrate']
