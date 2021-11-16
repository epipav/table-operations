FROM php:7.4-cli

#install software-properties to add ppa repository
#RUN sed -i 's|docker.com/linux/debian|docker.com/linux/ubuntu|g' /etc/apt/sources.list
#RUN apt-get update && apt-get install -y software-properties-common
#RUN add-apt-repository ppa:ondrej/php && apt-get update  

#install php7.3
RUN apt-get update && apt install -y curl wget git zip unzip


#install node and npm
RUN curl -sL https://deb.nodesource.com/setup_12.x  | bash -
RUN apt-get install -y nodejs

#install symfony dev server
RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony
RUN chmod a+x /usr/local/bin/symfony


#make room for app
RUN mkdir -p table-operations
WORKDIR /table-operations

RUN php -m

#copy project files
COPY ./ /table-operations/
COPY ./.env /table-operations/.env

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install


#build vue project
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo_mysql

RUN chmod a+x wait-for-it.sh

RUN npm install && npm run dev