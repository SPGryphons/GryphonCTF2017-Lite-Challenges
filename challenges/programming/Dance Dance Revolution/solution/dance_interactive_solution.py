"""Just press arrow keys and then Enter"""

import socket
import threading
import tkinter as tk
from queue import Queue

root = tk.Tk()
root.geometry("10x10")

# Config
HOST = 'play.spgame.site'
PORT = 10011
BUFF_SIZE = 4096

q = Queue()


def game():
    clientsocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    clientsocket.connect((HOST, PORT))

    dance = ""
    while True:
        data = clientsocket.recv(BUFF_SIZE).decode()
        print(data)
        if "GCTF" in data or "Too slow" in data or "Wrong move" in data:
            break
        if "You :" not in data:
            continue
        while True:
            move = q.get()
            if move != "Enter":
                dance += move + " "
            else:
                print(dance)
                clientsocket.sendall(dance.encode())
                dance = ""
                break


def up(event):
    q.put("Up")


def down(event):
    q.put("Down")


def left(event):
    q.put("Left")


def right(event):
    q.put("Right")


def enter(event):
    q.put("Enter")


root.bind('<Up>', up)
root.bind('<Down>', down)
root.bind('<Left>', left)
root.bind('<Right>', right)
root.bind('<Return>', enter)

t = threading.Thread(target=game)
t.start()

root.mainloop()
