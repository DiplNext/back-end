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
    postgresql-dev \
    zip \
    unzip

# Add docker php ext repo
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install php extensions
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions mbstring odbc pdo_odbc sqlsrv pdo_sqlsrv pgsql pdo_pgsql zip exif pcntl gd memcached

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install latest version of Node JS
RUN apk add nodejs npm


# Copy install script.sh
#COPY docker/install/script.sh /tmp/script.sh

# Copy supervisor configuration
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
#RUN chmod +x /tmp/script.sh

EXPOSE 9000

#Install dependencies
#ENTRYPOINT ["/tmp/script.sh"]
#CMD ["/tmp/script.sh"]
