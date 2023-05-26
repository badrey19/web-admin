# Menggunakan image PHP dan Apache
FROM php:7.4-apache

# Mengatur direktori kerja
WORKDIR /var/www/html

# Menyalin file-file aplikasi ke dalam container
COPY index.html /var/www/html/index.html
COPY style.css /var/www/html/style.css
COPY add.php /var/www/html/add.php
COPY save.php /var/www/html/save.php
COPY edit.php /var/www/html/edit.php
COPY update.php /var/www/html/update.php
COPY delete.php /var/www/html/delete.php


# Menginstall ekstensi PHP yang diperlukan
RUN docker-php-ext-install mysqli

# Mengatur konfigurasi Apache
RUN a2enmod rewrite
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80
