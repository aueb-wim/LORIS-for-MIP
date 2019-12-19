FROM mysql:5.7.28
#ENV MYSQL_ROOT_PASSWORD neopass
#ENV MYSQL_DATABASE LORIS
#ENV MYSQL_USER lorisuser
#ENV MYSQL_PASSWORD neopass
RUN echo $MYSQL_ROOT_PASSWORD
COPY ./loris_database_with_trigger.sql /loris_database_with_trigger.sql
COPY ./loris_database_with_trigger.sql /docker-entrypoint-initdb.d/dump.sql
#RUN /etc/init.d/mysql start
#EXPOSE 3306
#RUN chown -R mysql:mysql /var/lib/mysql /var/run/mysqld
#CMD service mysql start
## WORKDIR ~
#RUN mysql -root -psecret "" < loris_database_with_trigger.sql
