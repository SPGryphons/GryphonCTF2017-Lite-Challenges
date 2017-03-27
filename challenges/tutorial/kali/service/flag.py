#!/usr/bin/python
import random
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

console_out("Here is the flag: GCTF{1_c0n7r0l_71m3_cr34710n_d357ruc710n_p0w3r}")

