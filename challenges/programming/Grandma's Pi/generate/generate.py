#!/usr/bin/python3

input_file = "Bacon Ipsum.txt"
output_file = "Grandma's Pi.txt"
flag = "GCTF{5UG4R_5P1C3_4ND_3V3RYTH1NG_N1C3}"
hidden_text = "Grandma baked my favourite! A Lemon Meringue Pie! Wha.. What's this? There's a flag in the pie. " + flag

digits_of_pi = "314159265358979323846264338327950288419716939937510582097494459230781640628620899862803482534211706798214808651328230664709384460955058223172535940812848111745028410270193852110555964462294895493038196"

# Read text file
with open(input_file, "r") as f:
    input_text = f.readline()

new_text = ""

for i, c in enumerate(hidden_text):
    pi_digit = digits_of_pi[i]
    new_text += input_text[i:i + int(pi_digit)]
    new_text += c

# Write new text
with open(output_file, "w") as f:
    f.write(new_text)
