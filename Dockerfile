FROM php:7.2
EXPOSE 8080
WORKDIR /app
CMD ["bin/console","server","start"]