#!/usr/bin/python3
import base64
import hashlib
import random
import socket
import threading

from Cryptodome.Cipher import AES
from Cryptodome.Util import Padding

HOST = '0.0.0.0'
PORT = 10012
TIMEOUT = 30.0
BUFF_SIZE = 4096


# min_value >= 2    max_value > min_value
def generate_primes(min_value=2, max_value=100000):
    max_value += 1
    numbers = [True] * max_value
    numbers[0] = numbers[1] = False
    primes = []

    for (i, isPrime) in enumerate(numbers):
        if isPrime:
            primes.append(i)
            for x in range(i * i, max_value, i):
                numbers[x] = False
    return [p for p in primes if p >= min_value]


def handler(conn, addr):
    conn.settimeout(TIMEOUT)
    try:
        """
        Diffie-Hellman Key Exchange
        p, g : prime numbers
        A : Alice computed
        b : Bob private
        B : Bob computed

        (g^a mod p)^b mod p = g^(ab) mod p
        (g^b mod p)^a mod p = g^(ba) mod p
        """

        p = random.choice(generate_primes(min_value=1000))
        g = random.choice(generate_primes(max_value=(p - 1)))

        conn.sendall("Key Exchange Sequence Initiated\n"
                     "===============================\n"
                     "\n"
                     "Here are the two base values we will agree on:\n"
                     "p: {}\n"
                     "g: {}\n".format(p, g).encode()
                     )

        # Get a value
        conn.sendall("Your computed value : ".encode())
        A = conn.recv(BUFF_SIZE).decode().strip()
        if not A.isdigit() or int(A) >= p or p - int(A) == 1:
            conn.sendall("Invalid value\n".encode())
            conn.close()
            return
        A = int(A)

        # Generate b value and send B value
        b = random.randint(100, p - 2)
        B = pow(g, b, p)
        conn.sendall("Server computed value : {}\n\n".format(B).encode())

        # Generate shared key
        shared_key_int = pow(A, b, p)

        # Hash shared key as 16 byte/128 bit input for AES.
        md5_hasher = hashlib.md5()
        md5_hasher.update((shared_key_int).to_bytes((shared_key_int.bit_length() + 7) // 8, "big"))
        key_hash_bytes = md5_hasher.digest()

        # Generate AES 128 ECB cipher
        aes_cipher = AES.new(key_hash_bytes, AES.MODE_ECB)

        # Encrypt and base64 encode flag
        flag = b"GCTF{7H3_6R4ND_3XCH4N63_4ND_7H3_6R347_D3CRYP7}"
        padded_flag = Padding.pad(flag, 16, style="pkcs7")
        encrypted_flag = aes_cipher.encrypt(padded_flag)
        base64_flag = base64.b64encode(encrypted_flag).decode()

        conn.sendall(
            "Digest the shared key with MD5 to build an AES-128-ECB key to decrypt the following base64 encoded message:\n"
            "{}\n".format(base64_flag).encode()
        )
    except socket.timeout:
        conn.sendall("\n\nTime out from inactivity.\n".encode())
        print("{} timed out.".format(addr))
    except Exception as e:
        print("{} disconnected".format(addr))
    conn.close()
    return


def main():
    serversocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    serversocket.bind((HOST, PORT))
    serversocket.listen(10)
    print("Diffie server started...")

    while True:
        try:
            conn, addr = serversocket.accept()
            print("New connection from {}".format(addr))

            # Start new thread to handle connection
            t = threading.Thread(target=handler, args=(conn, addr))
            t.start()
        except KeyboardInterrupt:
            break

    serversocket.close()
    print("\nDiffie server stopped")


if __name__ == '__main__':
    main()
