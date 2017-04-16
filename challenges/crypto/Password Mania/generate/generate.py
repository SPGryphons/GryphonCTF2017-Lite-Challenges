#!/usr/bin/python3

"""
Generates password.lst
"""

from string import ascii_uppercase, digits
import random

charset = ascii_uppercase + digits + "_"

with open("passwords.lst", "a") as f:
    for i in range(100000):
        # Generate fake flag
        random_text = ""
        for j in range(35):
            random_text += random.choice(charset)
        fake_flag = "GCTF{" + random_text + "}\n"
        f.write(fake_flag)

        # Insert real flag
        if i == 87654:
            f.write("GCTF{L1K3_F1ND1N6_4_N33DL3_1N_4_H4Y574CK}\n")
