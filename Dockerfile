FROM ubuntu:18.04
#RUN apt-get update
#RUN apt-get install ca-certificates apt-transport-https
#RUN wget -q https://packages.sury.org/php/apt.gpg -O- | sudo apt-key add -
#RUN echo "deb https://packages.sury.org/php/ stretch main" | sudo tee /etc/apt/sources.list.d/php.list
ENV TZ=Europe/Madrid
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update
RUN apt-get install -y \
php7.2 \
php7.2-bcmath \
php7.2-cli \
php7.2-common \
php7.2-curl \
php7.2-gd \
php7.2-gmp \
php7.2-intl \
php7.2-json \
php7.2-mbstring \
php7.2-mysql \
php7.2-opcache \
php7.2-pgsql \
php7.2-phpdbg \
php7.2-readline \
php7.2-sqlite3 \
php7.2-xml \
php7.2-xmlrpc \
php7.2-zip \
php-xdebug \
sqlite3
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer* /usr/bin/composer
ADD . /app
WORKDIR /app
RUN composer install
EXPOSE 8080
CMD ["bin/console","server:run"]

