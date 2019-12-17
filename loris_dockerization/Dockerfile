FROM php:7.2-apache

RUN apt-get update
RUN    apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
COPY loris/ /var/www/html/
EXPOSE 80

FROM ubuntu:16.04

# Install dependencies.
# g++ (v. 5.4) does not work: https://github.com/tensorflow/tensorflow/issues/13308
RUN apt-get update && apt-get install -y \
    #&& apt-get install -y mysql-server mysql-client \
    && apt-get install -y zip curl wget python-software-properties software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y apache2 \
    && apt-get install -y php7.2 php7.2-mysql php7.2-xml php7.2-json php7.2-mbstring php7.2-gd php-ast \
    && apt-get install -y composer \
    && apt-get install -y libapache2-mod-php7.2 \
    && a2enmod php7.2 \
    && service apache2 restart

# Creating a User for LORIS
RUN useradd -U -m -G sudo -s /bin/bash lorisadmin \
    passwd lorisadmin \
    su - lorisadmin \

#donwload composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
&& php -r "if (hash_file('SHA384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Select php7.2 as default
RUN update-alternatives --set php /usr/bin/php7.2

# Nodejs installation
RUN curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash - \
    apt-get install -y nodejs

#Install imaging pipeline
RUN apt-get install python3 \
    && apt-get install python3-dev \
    && apt-get install python3-pip \
    && apt-get install libmysqlclient-dev \
    && pip3 install virtualenv \
    && apt-get install libc6 libstdc++6 imagemagick perl

# Clone.
#RUN git clone https://github.com/deepmind/scalable_agent.git
#WORKDIR scalable_agent

# Build dynamic batching module.
#RUN TF_INC="$(python -c 'import tensorflow as tf; print(tf.sysconfig.get_include())')" && \#
#    TF_LIB="$(python -c 'import tensorflow as tf; print(tf.sysconfig.get_lib())')" && \
#  g++-4.8 -std=c++11 -shared batcher.cc -o batcher.so -fPIC -I $TF_INC -O2 -D_GLIBCXX_USE_CXX11_ABI=0 -L$TF_LIB -ltensorflow_framework

# Run tests.
#RUN python py_process_test.py
#RUN python dynamic_batching_test.py
#RUN python vtrace_test.py

# Run.
#CMD ["sh", "-c", "python experiment.py --total_environment_frames=10000 --dataset_path=../dataset && python experiment.py --mode=test --test_num_episodes=5"]

# Docker commands:
#   docker rm scalable_agent -v
#   docker build -t scalable_agent .
#   docker run --name scalable_agent scalable_agent
