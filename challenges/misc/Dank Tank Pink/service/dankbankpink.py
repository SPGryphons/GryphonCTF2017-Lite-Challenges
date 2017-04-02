#!/usr/bin/python
import sys
from select import select

def console_out(data, sep="\n"):
    sys.stdout.write(data + sep)
    sys.stdout.flush()

def console_in(prompt):
    timeout = 10
    console_out(prompt, sep="")
    rlist, _, _ = select([sys.stdin], [], [], timeout)
    if rlist:
        s = sys.stdin.readline()
        return s
    else:
        console_out("Too slow...")
        exit()
def checker(licence,stuff):
    if len(licence) != 18:
        return "invalid length of license",False
    if licence in stuff:
         return "license has already been submitted",False
    add=minus=0
    for c in licence[0:9]:
         add+=ord(c)
    for c in licence[9:18]:
        minus+=ord(c)
    if (add-minus)==60:
        stuff.append(licence)
        return "license is valid",True
    else:
        return "license is invalid",False

stuff=[]
i=0
flag=True
while i!=10 and flag:
    license=console_in("Please enter a unique license:\n")
    msg,flag=checker(license,stuff)
    console_out(msg)
    i=i+1
if i==10 and flag:
    print "GCTF{D4NK_B4NK_P1N}"
