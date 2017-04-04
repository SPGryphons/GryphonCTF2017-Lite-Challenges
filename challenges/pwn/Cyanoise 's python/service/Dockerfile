FROM ubuntu:latest
RUN apt-get update && apt-get install -y python
COPY ./MahServer.py /tmp/MahServer.py
RUN chmod +x /tmp/MahServer.py
COPY ./get-Flag /tmp/get-Flag
COPY ./usr/bin/get-Flag /usr/bin/get-Flag
RUN chmod +x /usr/bin/get-Flag
WORKDIR "/tmp"
CMD ["/tmp/MahServer.py"]
EXPOSE 10010
