## Overwatch Sombra Parody

Distribute the file

## Question Text
Sombra is trying to show that she's the best **HACKERMAN** around but she needs some help with getting the flag. She knows that 'A' in ASCII starts at 65 and that something in the code is written backwards. Can you help her get the flag?


## Setup Guide
Distribute the file
## How to Play
1. Modify the binary given
2. Obtain the flag

## Solution
1. Use objdump -d on the binary provided
2. In the main function at address 0x400d77 is 2 mov function modify the value being moved to 80 and 15(Hex editor) or another option would be to NOP the checks on the values provided.
3. After that is a Add instruction, that can be change to Sub (Keystone can be used to get the hex for the new instruction. Hex editing is required to modify the file)
4. Run the file to get flag.
5. Flag is written backwards in base 64. Reverse the string then decode base64

Flag is GCTF{S0MBR4_S0_H4CK3R_M4N}
