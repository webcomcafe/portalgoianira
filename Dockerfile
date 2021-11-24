FROM wyveo/nginx-php-fpm:php74

#ARG user
#ARG uid

RUN apt-get -y update && apt-get -y upgrade apt-transport-https

RUN apt-get -y --allow-downgrades install php7.4-dev php7.4-ctype php7.4-curl php7.4-xml php7.4-fileinfo php7.4-gd php7.4-json php7.4-mbstring php7.4-mysql php7.4-sqlite3 php7.4-zip

RUN apt-get -y install php7.4-xdebug

#RUN apt-get -y install build-essential procps curl file git
#
#RUN git clone https://github.com/Homebrew/brew ~/.linuxbrew/Homebrew && \
#    mkdir ~/.linuxbrew/bin && \
#    ln -s ~/.linuxbrew/Homebrew/bin/brew ~/.linuxbrew/bin && \
#    eval $(~/.linuxbrew/bin/brew shellenv) && \
#    brew install mkcert && \
#    mkcert -install

COPY ./.infra/php/php.ini /etc/php/7.4/fpm/conf.d/00-app.ini

RUN chmod -R 0777 /usr/share/nginx

WORKDIR /usr/share/nginx/public_html/

#RUN useradd -G www-data,root -u $uid -d /home/$user $user
#RUN mkdir -p /home/$user/.composer && \
#    chown -R $user:$user /home/$user
#
#USER $user

# RUN chmod -R 0777 /usr/share/nginx/themes /usr/share/nginx/storage

#RUN pecl install xdebug-2.9.8

#COPY ./.infra/xdebug/xdebug.ini /etc/php/7.4/fpm/conf.d/xdebug.ini
