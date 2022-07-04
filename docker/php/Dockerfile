FROM php:8.1-fpm-alpine

# Set working directory
WORKDIR /var/www/html

#Install dependencies
RUN apk --update add wget \
    curl \
    build-base \
    libmemcached-dev \
    libmcrypt-dev \
    libxml2-dev \
    pcre-dev \
    zlib-dev \
    supervisor \
    autoconf \
    cyrus-sasl-dev \
    libgsasl-dev \
    oniguruma-dev \
    openssl \
    openssl-dev \
    npm

# Add docker php ext repo
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install php extensions
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions mbstring odbc pdo_odbc sqlsrv pdo_sqlsrv zip exif pcntl gd memcached

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
#RUN adduser -g "www-data" www-data

# Copy supervisor configuration
COPY docker/supervisor/supervisord.conf /etc/supervisord.conf

# Copy install script
COPY docker/install/script.sh /tmp/script.sh

#Install dependencies
ENTRYPOINT ["/tmp/script.sh"]
#CMD ["/tmp/script.sh"]
