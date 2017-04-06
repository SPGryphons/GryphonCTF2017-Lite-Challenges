#!/usr/bin/python3
import random
import socket
import threading

HOST = '0.0.0.0'
PORT = 10011
TIMEOUT = 3.0
BUFF_SIZE = 1024


def generate_dance():
    dance_choices = ["Up", "Down", "Left", "Right"]
    dance_input = random.randint(1, 4)
    dance_instruction = []
    for i in range(dance_input):
        while True:
            choice = random.choice(dance_choices)
            if choice not in dance_instruction:
                dance_instruction.append(choice)
                break
    return " ".join(dance_instruction)


def handler(conn, addr):
    conn.settimeout(TIMEOUT)
    try:
        # Introduction
        conn.sendall(
            "Welcome to Dance Dance Revolution! All you need to do is send back the same steps that you receive.\n"
            "You only have 3 seconds to send it back though.\n\nGet Ready!\n".encode()
        )

        # Game
        for i in range(100):
            game_dance = generate_dance()
            conn.sendall("\n\nRound {:03}\n"
                         "========="
                         "\nGame: {}\n"
                         "You : ".format(i + 1, game_dance).encode()
                         )
            user_dance = conn.recv(BUFF_SIZE).decode()

            # Lose
            if user_dance.strip() != game_dance:
                conn.sendall("\nWrong move wavey man!\n".encode())
                conn.close()
                print("{} wrong move.".format(addr))
                return

        # Win
        conn.sendall("\nDayum son that's some impressive dancing.\nGCTF{C0M3_0N_B4RB13_L375_60_P4R7Y}\n".encode())

        print("{} got flag.".format(addr))
    except socket.timeout:
        conn.sendall("\n\nToo slow... You gotta dance faster!\n".encode())
        print("{} timed out.".format(addr))
    except Exception as e:
        print("{} disconnected".format(addr))
    conn.close()
    return


def main():
    serversocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    serversocket.bind((HOST, PORT))
    serversocket.listen(10)
    print("Dance server started...")

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
    print("\nDance server stopped")


if __name__ == '__main__':
    main()
