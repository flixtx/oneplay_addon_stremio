# Use uma imagem base com PHP e Apache
FROM php:8.1-apache

# Instale extensões do PHP, se necessário
RUN docker-php-ext-install pdo pdo_mysql

# Copie os arquivos do site para o diretório raiz do servidor
COPY . /var/www/html

# Ajuste as permissões, se necessário
RUN chown -R www-data:www-data /var/www/html

# Exponha a porta 80 para o servidor Apache
EXPOSE 80

CMD ["apache2-foreground"]
