FROM php:8.2-apache

# Install required PHP extensions for PsychoStats (MySQL) + common helpers
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
      libzip-dev \
      unzip \
    ; \
    docker-php-ext-install mysqli pdo_mysql; \
    a2enmod rewrite; \
    rm -rf /var/lib/apt/lists/*

# Optional: avoid Apache "ServerName" warning noise
RUN printf "ServerName localhost\n" > /etc/apache2/conf-available/servername.conf \
 && a2enconf servername