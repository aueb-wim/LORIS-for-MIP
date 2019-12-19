FROM mysql:5.7.28

COPY ./loris_database_with_trigger.sql ~/loris_database_with_trigger.sql
WORKDIR ~
RUN mysql -u root -p neopass < loris_database_with_trigger.sql
