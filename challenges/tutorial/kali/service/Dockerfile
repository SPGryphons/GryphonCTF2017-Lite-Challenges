FROM ubuntu:latest
RUN apt-get update
RUN apt-get install -y xinetd python libc6-i386
RUN useradd -m kali
COPY ./flag.py /home/kali/flag.py
RUN chmod +x /home/kali/flag.py
COPY ./kaliservice /etc/xinetd.d/kaliservice
RUN chown -R root:kali /home/kali
RUN chmod -R 750 /home/kali
EXPOSE 13337
CMD ["/usr/sbin/xinetd","-d"]
