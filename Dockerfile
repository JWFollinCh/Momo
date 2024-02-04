# Utiliza una imagen base de PHP
FROM php:7.4-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el código fuente a la imagen
COPY . /var/www/html

# Configura PHP según sea necesario
# ...

# Expone el puerto si es necesario
EXPOSE 80

# Comando para iniciar la aplicación
CMD ["php", "-S", "0.0.0.0:80"]