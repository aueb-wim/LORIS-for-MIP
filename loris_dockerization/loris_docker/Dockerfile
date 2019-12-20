# FROM ubuntu:16.04

# RUN apt-get update
# RUN    apt-get install -y git
# RUN docker-php-ext-install pdo pdo_mysql mysqli
# RUN a2enmod rewrite
#Install Composer
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN php composer-setup.php --install-dir=. --filename=composer
# RUN mv composer /usr/local/bin/
# COPY loris/ /var/www/html/
# EXPOSE 80

FROM ubuntu:16.04

# Install dependencies.
# g++ (v. 5.4) does not work: https://github.com/tensorflow/tensorflow/issues/13308
RUN apt-get update -y
#RUN apt-get install -y 
#RUN apt-get install -y mysql-server mysql-client
RUN apt-get install -y zip curl wget python-software-properties software-properties-common
RUN apt-get install -y language-pack-en-base
ENV LC_ALL C.UTF-8
RUN add-apt-repository -y ppa:ondrej/php 
RUN apt-get update -y
RUN apt-get install -y apache2
RUN apt-get install -y php7.2 php7.2-mysql php7.2-xml php7.2-json php7.2-mbstring php7.2-gd php-ast
RUN apt-get install -y composer
RUN apt-get install -y libapache2-mod-php7.2
RUN a2enmod php7.2
RUN service apache2 restart

# Creating a User for LORIS
RUN useradd -U -m -G sudo -s /bin/bash lorisadmin
RUN echo lorisadmin:12345678 | chpasswd
RUN su - lorisadmin 


COPY ./loris /var/www/loris
RUN chown -R lorisadmin.lorisadmin /var/www/loris

#RUN service apache2 restart


WORKDIR /var/www/loris/tools
RUN bash install_aueb.sh

RUN a2enmod rewrite 
RUN a2ensite loris 
RUN chmod 775 /var/www/loris/project/

#RUN service apache2 reload

#RUN service apache2 restart

#donwload composer
COPY ./other_files/composer-setup.php ./
# RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'baf1608c33254d00611ac1705c1d9958c817a1a33bce370c0595974b342601bd80b92a3f46067da89e3b06bff421f182') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Select php7.2 as default
RUN update-alternatives --set php /usr/bin/php7.2


# Nodejs installation
RUN curl -sL https://deb.nodesource.com/setup_8.x > install_node.sh
RUN bash install_node.sh
RUN apt-get install -y nodejs

COPY other_files/config.xml /var/www/loris/project/config.xml

#Install imaging pipeline
RUN apt-get install -y python3 \
    && apt-get install -y python3-dev \
    && apt-get install -y python3-pip \
    && apt-get install -y libmysqlclient-dev \
    && pip3 install virtualenv \
    && apt-get install -y libc6 libstdc++6 imagemagick perl

EXPOSE 80

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
