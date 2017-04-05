#!/usr/bin/python3
import socket

# Config
HOST = 'play.spgame.site'
PORT = 15000
BUFF_SIZE = 4096


def main():
    clientsocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    clientsocket.connect((HOST, PORT))

    dance = ""
    while True:
        data = clientsocket.recv(BUFF_SIZE).decode()
        if "Game:" in data:
            dance = data.strip().split(":")[1][:-5].strip()
            clientsocket.sendall(dance.encode())
            # print(dance)
        elif "GCTF" in data:
            print(data)
            break


if __name__ == '__main__':
    main()
