FROM mysql:5.7.28

ENV MYSQL_ROOT_PASSWORD=neopass
ENV MYSQL_DATABASE=LORIS
ENV MYSQL_USER=lorisuser
ENV MYSQL_PASSWORD=neopass

RUN echo $MYSQL_ROOT_PASSWORD 

COPY ./loris_database_with_trigger.sql /loris_database_with_trigger.sql

ENTRYPOINT /etc/init.d/mysql start
# WORKDIR ~
#RUN mysql -u root -psecret  < loris_database_with_trigger.sql
