
# Usa la imagen base de PHP con Apache (versión 8.2 sugerida)
FROM php:8.2-apache

# INSTALA LA EXTENSIÓN NECESARIA PARA POSTGRESQL (pdo_pgsql)
# También se necesita la librería cliente de Postgres.
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copia todos los archivos de tu proyecto (código PHP, index.php, etc.) al directorio web de Apache
COPY . /var/www/html/

# Exponer el puerto 80 (el puerto HTTP por defecto de Apache)
EXPOSE 80