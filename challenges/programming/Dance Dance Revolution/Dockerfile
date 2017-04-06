FROM ubuntu:latest
RUN apt-get update && apt-get install -y python3
COPY ./service/dance_socketserver.py /tmp/dance_socketserver.py
RUN chmod +x /tmp/dance_socketserver.py
WORKDIR "/tmp"
CMD ["python3","/tmp/dance_socketserver.py"]
EXPOSE 10011
