#!/usr/bin/python
import re
import socket
import threading
import subprocess

class MahServer:
    def __init__(self,host,port):
        """
        Constructor that initalizes the server socket and the wordlist.
        Use host and port parameters for the socket to bind to.
        """
        self.serverSocket=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
        self.serverSocket.bind((host,port))

    def getConnections(self):
        """
        Function to start the socket and wait for connections.
        It multi-threads each connection.
        """
        self.serverSocket.listen(2)     #server set how maximum number of client connections
        while True:
            con,addr = self.serverSocket.accept()   #Begin accepting connections from clients
            print addr          #showing the address of the clients connected for debugging purposes
            threading.Thread(target=self.handleCon,args = (con,)).start()    # starts a thread to handle each connection

    def handleCon(self,con):
        msg=[]
        try:
            while True:
                msg.append("cyanoise prompt > ")
                con.send("\n".join(msg))
                msg=[]
                cmd=con.recv(255)
                cmd=cmd.strip("\n")
                if cmd == "ls":
                    msg.append((subprocess.check_output([cmd])).strip("\n"))
                elif cmd == "cat get-Flag":
                    cmd=cmd.split(" ")
                    msg.append((subprocess.check_output([cmd[0],cmd[1]])).strip("\n"))
                elif cmd == "quit":
                    con.close()
                    break
                elif re.match(".+[\w]",cmd):
                    msg.append("Alphanumerics are not allowed")
                elif re.match(".+[\W]",cmd):
                    try:
                        msg.append((subprocess.check_output([cmd],shell=True)).strip("\n"))
                    except subprocess.CalledProcessError as e:
                        msg.append("Executable not found")
                else:
                    msg.append("Command not defined")
        except socket.error:
            return


MahServer("0.0.0.0",9553).getConnections()
