docker build -t cyanoise .
docker run -p 10010:10010 -dt --name cyanoise cyanoise
