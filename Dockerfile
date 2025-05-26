# 1. Imagen base: PHP 8.1 con FPM
FROM php:8.1-fpm

# 2. Instalar dependencias necesarias para PostgreSQL y Laravel
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip unzip git curl vim libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql bcmath mbstring pcntl exif zip xml

# 3. Instalar Composer desde imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Establecer carpeta de trabajo
WORKDIR /var/www/html

# 5. Copiar el contenido del proyecto al contenedor
COPY . .

# 6. Instalar dependencias PHP del proyecto optimizadas para producción
RUN composer install --no-dev --optimize-autoloader

# 7. Asignar permisos para Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Exponer el puerto 8000 para Laravel serve
EXPOSE 8000

# 9. Arrancar Laravel en producción
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]


