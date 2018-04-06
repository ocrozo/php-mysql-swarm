FROM php:7-apache

# Installer l'extension mysql
RUN docker-php-ext-install mysqli

# Activer le module rewrite dans apache
RUN a2enmod rewrite
RUN service apache2 restart

# Pour intégrer le dossier de votre site web directement dans l’image
COPY www/ /var/www/html
