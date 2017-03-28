#!/usr/bin/env python

import sys
from random import sample

def write(data, sep="\n"):
	sys.stdout.write(data + sep)
	sys.stdout.flush()

decoder=[]
CTF_Flag=[]

write("Access Code Please ==> ", "")
UserInput = raw_input()

a="3"
b="^"
c="b"
d="4"
e="d"
f="c"
g="2"
h="0"
i="s"
j="x"
k="f"
l="g"
m="/"
n="i"
o="h"
p="t"
q="y"
r="u"
s="s"
t="e"
u="e"
v="o"
w="n"
x="'"
y="a"
z="s"

scrambled=e+a+d+j+b+i+m+b+f+g+c+m+f+g+b+a+h+k+l+i
AccessCode=n+z+w+x+p+" "+p+o+n+i+" "+t+y+s+q

if UserInput==AccessCode:
	for c in scrambled:
		decoder.append(chr(ord(c) + 1))
else:
	scrambled=sample(scrambled, len(scrambled))
	for c in scrambled:
		decoder.append(c)

CTF_Flag=''.join(decoder)
write("GCTF{"+CTF_Flag+"}")
#print "d34x^s/^c2b/c2^30fgs"
#print "e45y_t0_d3c0d3_41ght"
