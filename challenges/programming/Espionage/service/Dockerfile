FROM ubuntu:latest
ENV user=Infiltrator
RUN apt-get update
RUN apt-get install -y openssh-server lshell
RUN mkdir /var/run/sshd
RUN useradd -m $user
RUN mkdir /home/$user/folder1
RUN mkdir /home/$user/folder2
RUN mkdir /home/$user/folder3
RUN mkdir /home/$user/folder4
COPY ./ClassifiedProprietary.py /home/$user/folder3/ClassifiedProprietary.py
RUN chmod +x /home/$user/folder3/ClassifiedProprietary.py
RUN chown -R root:$user /home/$user
RUN chmod -R 750 /home/$user
RUN chsh -s /usr/bin/lshell Infiltrator
RUN echo "Infiltrator:12345678" | chpasswd
COPY ./lshell.conf /etc/lshell.conf
EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

