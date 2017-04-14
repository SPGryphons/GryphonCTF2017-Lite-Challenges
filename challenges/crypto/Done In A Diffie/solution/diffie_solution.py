#!/usr/bin/python3
import base64
import hashlib
import random
import socket

from Cryptodome.Cipher import AES

# Config
HOST = 'localhost'
PORT = 10012
BUFF_SIZE = 4096


def main():
    clientsocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    clientsocket.connect((HOST, PORT))

    p = 0
    g = 0
    a = 0
    A = 0
    B = 0
    base64_flag = ""

    loop_flag = True
    while loop_flag:
        data = clientsocket.recv(BUFF_SIZE).decode()
        print(data)
        lines = data.split("\n")
        for line in lines:
            if "Time out from inactivity" in line:
                print("Timeout")
                return
            elif "p:" in line:
                p = int(line.split(":")[1].strip())
            elif "g:" in line:
                g = int(line.split(":")[1].strip())
            elif "Your computed value" in line:
                a = random.randint(2, p - 2)
                A = pow(g, a, p)
                print("a : {}", "A : {}".format(a, A))
                clientsocket.sendall("{}".format(A).encode())
            elif "Server computed value" in line:
                B = int(line.split(":")[1].strip())
            elif "decrypt the following" in lines[0]:
                base64_flag = lines[1].strip()
                loop_flag = False
                break

    clientsocket.close()

    shared_key = pow(B, a, p)

    # Hash shared key as 16 byte/128 bit input for AES.
    md5_hasher = hashlib.md5()
    md5_hasher.update(str(shared_key).encode())
    key_hash_bytes = md5_hasher.digest()

    # Generate AES 128 ECB cipher
    aes_cipher = AES.new(key_hash_bytes, AES.MODE_ECB)

    encrypted_flag = base64.b64decode(base64_flag)
    decrypted_flag = aes_cipher.decrypt(encrypted_flag)
    print(decrypted_flag)


if __name__ == '__main__':
    main()
