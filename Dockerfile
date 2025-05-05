FROM php:8.1-apache

# نصب افزونه‌های مورد نیاز PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# کپی فایل‌های پروژه به دایرکتوری وب سرور
COPY . /var/www/html/

# فعال‌سازی mod_rewrite برای Apache
RUN a2enmod rewrite

# تنظیمات Apache
COPY .htaccess /var/www/html/
