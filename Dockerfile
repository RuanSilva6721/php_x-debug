FROM php:8.1-apache

COPY 99-xdebug.ini "${PHP_INI_DIR}/conf.d"
# Instala as dependências necessárias para o Xdebug e ferramentas de linha de comando
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip


# Define o diretório de trabalho da aplicação
WORKDIR /var/www/html

# Copia os arquivos do aplicativo para o contêiner
COPY . .

# Configura o Apache para executar na porta 9003
RUN sed -i 's/80/9003/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Expor a porta 9003
EXPOSE 9003

# Inicia o servidor Apache
CMD ["apache2-foreground"]