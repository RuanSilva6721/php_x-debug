FROM php:8.2-cli

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
WORKDIR /app