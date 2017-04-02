FROM ubuntu:latest
ENV user=Infiltrator
RUN dpkg --add-architecture i386
RUN apt-get update
RUN apt-get install -y openssh-server lshell
RUN mkdir /var/run/sshd
RUN sed -i.factory-defaults -e 's/#PasswordAuthentication.*/PasswordAuthentication yes/' /etc/ssh/sshd_config
RUN chmod a-w /etc/ssh/sshd_config.factory-defaults
RUN sed -i 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' /etc/pam.d/sshd
RUN useradd -m $user
RUN echo "$user     hard    nproc       20" >> /etc/security/limits.conf
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile
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
