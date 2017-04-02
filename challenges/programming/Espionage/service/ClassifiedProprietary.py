#!/usr/bin/python

import sys
from random import sample

decoder=[]
CTF_Flag=[]

UserInput = raw_input("Access Code Please ==> ")

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
var=" "

scrambled=e+a+d+j+b+i+m+b+f+g+c+m+f+g+b+a+h+k+l+i
AccessCode=n+z+w+x+p+var+p+o+n+i+var+t+y+s+q

if UserInput==AccessCode:
	for c in scrambled:
		decoder.append(chr(ord(c) + 1))
else:
	scrambled=sample(scrambled, len(scrambled))
	for c in scrambled:
		decoder.append(c)

CTF_Flag=''.join(decoder)
print "GCTF{"+CTF_Flag+"}"
