FROM mysql:5.7

ENV MYSQL_DATABASE=gctfdb
ENV MYSQL_ROOT_PASSWORD=GryphonCTFLite

ENV MYSQL_USER=sam
ENV MYSQL_PASSWORD=1234

COPY ./runme.sh /runme.sh
RUN chmod 754 /runme.sh
COPY ./sqlstatements /sqlstatements

EXPOSE 3306
