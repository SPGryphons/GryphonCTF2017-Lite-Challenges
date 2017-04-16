FROM ubuntu:latest
RUN apt-get update
RUN apt-get install -y xinetd
RUN apt-get install -y python
RUN apt-get install -y libc6-i386
RUN useradd -m dbp
COPY ./dankbankpink.py /home/dbp/dankbankpink.py
RUN chmod +x /home/dbp/dankbankpink.py
COPY ./dbpservice /etc/xinetd.d/dbpservice
RUN chown -R root:dbp /home/dbp
RUN chmod -R 750 /home/dbp
EXPOSE 10007
CMD ["/usr/sbin/xinetd", "-d"]
