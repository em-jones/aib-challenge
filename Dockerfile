FROM php
RUN apt-get update
RUN apt-get install -y git
COPY . /usr/src/app
WORKDIR /usr/src/app
CMD php composer.phar install && php phpunit