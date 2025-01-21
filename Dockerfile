# Use uma imagem base com PHP e Apache
FROM php:8.1-apache

# Habilitar o módulo rewrite do Apache
RUN a2enmod rewrite

# Copiar os arquivos da aplicação para o contêiner
COPY . /var/www/html/

# Definir permissões adequadas para o diretório
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Configurar o VirtualHost para permitir o uso de .htaccess
RUN echo "<Directory /var/www/html>
    AllowOverride All
    Require all granted
</Directory>" > /etc/apache2/conf-available/allow-override.conf \
    && a2enconf allow-override

# Reiniciar o serviço do Apache
RUN service apache2 restart

# Expor a porta 80
EXPOSE 80

# Comando padrão para iniciar o Apache
CMD ["apache2-foreground"]
