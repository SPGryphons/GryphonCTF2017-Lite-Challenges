#!/usr/bin/python2

from pwn import *

# Fix my function name :((
def main():
    # Help me connect to the socket prease.
    # Use one of the function provided by the pwntool lib
    p = remote("play.spgame.site", 13337)
    # Help me receive a line from the socket please! Just one!
    line = p.recvline().strip()
    # If the GCTF flag it's in the line, print it out
    if "GCTF:" in line:
        print line
        # Help me sendline to the socket to thank it for the flag!
        p.sendline("Thank you for the flag!")
    else:
        print "GCTF not found"

if __name__ == "__main__":
    main()
