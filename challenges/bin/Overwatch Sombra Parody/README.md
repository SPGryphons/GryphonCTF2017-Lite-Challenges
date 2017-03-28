## Overwatch Sombra Parody

Distribute the file

## Question Text
Sombra is trying to show that she's the best **HACKERMAN** around but she needs some help with getting the flag. She knows that 'A' in ASCII starts at 65 and that something in the code is written backwards. Can you help her get the flag?


## Setup Guide
Distribute the file
## How to Play
1. Modify the binary given
2. Use http://www.keystone-engine.org/ to find the hex need to modify the operations
3. Obtain the flag

## Solution
 Use objdump -d on the binary provided.  
 In the main function at address 0x400d77 is 2 mov function modify the value being moved to 80 and 15(Hex editor) or another option would be to NOP the checks on the values provided.

```
400d77:       c7 45 d8 e8 03 00 00    movl   $0x3e8,-0x28(%rbp)
400d7e:       c7 45 dc 64 00 00 00    movl   $0x64,-0x24(%rbp)
400d85:       8b 45 d8                mov    -0x28(%rbp),%eax
400d88:       8b 55 dc                mov    -0x24(%rbp),%edx
400d8b:       01 d0                   add    %edx,%eax
```
```
400dbf:       83 7d d8 50             cmpl   $0x50,-0x28(%rbp)
400dc3:       75 06                   jne    400dcb <main+0x5d>
400dc5:       83 7d dc 0f             cmpl   $0xf,-0x24(%rbp)
400dc9:       74 07                   je     400dd2 <main+0x64>
```
 The goal is to change the values being loaded at 0x400d77 to 80 and 0x400d7e to 15 (the program checks for the values 80 and 15) and the add operation at 0x400d8b to sub  (To know how to change the address to sub keystone should be used)
 After modification :
 ```
 400d77:       c7 45 d8 50 00 00 00    movl   $0x50,-0x28(%rbp)
 400d7e:       c7 45 dc 0f 00 00 00    movl   $0xf,-0x24(%rbp)
 400d85:       8b 45 d8                mov    -0x28(%rbp),%eax
 400d88:       8b 55 dc                mov    -0x24(%rbp),%edx
 400d8b:       29 d0                   sub    %edx,%eax
 ```
Run the file to get flag.
Flag is written backwards in base 64. Reverse the string then decode base64

Flag is GCTF{S0MBR4_S0_H4CK3R_M4N}
