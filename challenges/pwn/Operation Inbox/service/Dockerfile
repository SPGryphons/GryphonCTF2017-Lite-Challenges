FROM ubuntu:latest
ENV user=inboxuser
RUN apt-get update
RUN apt-get install -y xinetd
RUN useradd -m $user
RUN echo "$user     hard    nproc       20" >> /etc/security/limits.conf
COPY ./inbox-service /home/$user/inbox-service
COPY ./customservice /etc/xinetd.d/customservice
RUN chown -R root:$user /home/$user
RUN chmod -R 750 /home/$user
EXPOSE 8555
CMD ["/usr/sbin/xinetd", "-d"]
