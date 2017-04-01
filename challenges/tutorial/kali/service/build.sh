docker build -t kali .
docker run --name kali -dt -p 13337:13337 kali
