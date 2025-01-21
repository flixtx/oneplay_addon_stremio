# Use uma imagem base com PHP e Apache
FROM php:8.1-apache

# Habilitar o módulo rewrite do Apache
RUN a2enmod rewrite

# Copiar os arquivos da aplicação para o contêiner
COPY . /var/www/html/

# Definir permissões adequadas para o diretório
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expor a porta 80
EXPOSE 80

# Comando padrão para iniciar o Apache
CMD ["apache2-foreground"]
