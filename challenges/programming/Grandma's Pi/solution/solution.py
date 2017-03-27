#!/usr/bin/python3

digits_of_pi = "314159265358979323846264338327950288419716939937510582097494459230781640628620899862803482534211706798214808651328230664709384460955058223172535940812848111745028410270193852110555964462294895493038196"

text_file = "Grandma's Pi.txt"
with open(text_file, "r") as f:
    text = f.readline()

hidden_text = ""
i = 0 # Text character index
j = 0 # Pi digit index
while True:
    i += int(digits_of_pi[j])
    if i >= len(text):
        break
    hidden_text += text[i]
    i += 1
    j += 1

print(hidden_text)
