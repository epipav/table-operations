FROM php:7.4-cli

#install software-properties to add ppa repository
#RUN sed -i 's|docker.com/linux/debian|docker.com/linux/ubuntu|g' /etc/apt/sources.list
#RUN apt-get update && apt-get install -y software-properties-common
#RUN add-apt-repository ppa:ondrej/php && apt-get update  

#install php7.3
RUN apt-get update
#RUN apt install -y php7.4 curl php7.4-xml
RUN apt install curl

#RUN apt install -y php-mysql
#RUN apt install php7.4-pdo
#RUN apt install -y php-curl
RUN apt install -y wget
RUN apt install -y git
RUN apt install -y zip unzip


#install node and npm
RUN curl -sL https://deb.nodesource.com/setup_12.x  | bash -
RUN apt-get install -y nodejs

RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony
RUN chmod a+x /usr/local/bin/symfony


#make room for app
RUN mkdir -p table-operations
WORKDIR /table-operations

RUN php -m


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN composer global require hirak/prestissimo

#RUN composer install --no-scripts --no-interaction --no-autoloader --no-dev --prefer-dist
#RUN npm install
COPY ./package.json package.json
RUN npm install

COPY ./composer.json composer.json
COPY ./composer.lock composer.lock
RUN composer install --no-scripts --no-interaction --no-autoloader --no-dev --prefer-dist 
#RUN composer require symfony/maker-bundle --dev
RUN composer dump-autoload


COPY ./assets assets
COPY ./config config
COPY ./src src
COPY ./templates templates
COPY ./.env .env
COPY ./wait-for-it.sh wait-for-it.sh
COPY ./bin/console bin/console
#
COPY ./webpack.config.js webpack.config.js

#COPY ./ /table-operations/
COPY ./.env /table-operations/.env



#build vue project
ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo_mysql

RUN chmod a+x wait-for-it.sh
RUN npm run dev