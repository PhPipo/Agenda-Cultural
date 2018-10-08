FROM ubuntu:18.04
ENV TZ=Europe/Madrid
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update
RUN apt-get install -y php7.2 php7.2-bcmath php7.2-cli php7.2-common php7.2-curl php7.2-gd php7.2-gmp \
php7.2-intl php7.2-json php7.2-mbstring php7.2-mysql php7.2-opcache php7.2-pgsql php7.2-phpdbg \
php7.2-readline php7.2-sqlite3 php7.2-xml php7.2-xmlrpc php7.2-zip php-xdebug sqlite3
ADD . /app
WORKDIR /app
EXPOSE 8080
CMD ["bin/console","server:run"]

