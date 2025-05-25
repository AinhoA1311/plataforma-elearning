# 1. Imagen base PHP 8.1 FPM
FROM php:8.1-fpm

# 2. Instalar dependencias necesarias para pgsql y otras extensiones PHP
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip unzip git curl vim sqlite3 libsqlite3-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql zip mbstring exif pcntl bcmath xml

# 3. Instalar Composer (gestor de paquetes PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Establecer directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# 5. Copiar todos los archivos del proyecto al contenedor
COPY . .

# 6. Instalar dependencias PHP del proyecto sin paquetes de desarrollo y optimizando autoloaders
RUN composer install --no-dev --optimize-autoloader

# 7. Dar permisos correctos para que PHP (www-data) pueda escribir en storage y bootstrap/cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Exponer el puerto 8000 para el servidor PHP integrado
EXPOSE 8000

# 9. Comando para arrancar el servidor Laravel en producción escuchando en todas las IPs en el puerto 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

