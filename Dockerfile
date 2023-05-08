FROM php:8.2-apache

# Instala as dependências necessárias para o Xdebug e ferramentas de linha de comando
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && pecl install xdebug-3.1.1 \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip

# Configura o Xdebug
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Define o diretório de trabalho da aplicação
WORKDIR /var/www/html

# Copia os arquivos do aplicativo para o contêiner
COPY . .

# Configura o Apache para executar na porta 9001
RUN sed -i 's/80/9001/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Expor a porta 9001
EXPOSE 9001

# Inicia o servidor Apache
CMD ["apache2-foreground"]