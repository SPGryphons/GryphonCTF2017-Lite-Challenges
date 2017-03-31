## Deathline75 's digger

Setup the socket and distribute the files

## Question Text
Dr Tan Pan Bin has a math program that he loves to use.  
However the program has expired and he can no longer use it.  
Can you help Dr Tan obtain 10 other licenses (9 for insurance)?
Dr Tan has provided you with a license validator

## Setup Guide
1. set up the server socket with docker
2. distribute the file in the distrib folder

## How to Play

Figure out the algorithm from the license binary

## Solution
Pardon my engrish  
This is the original solution. This question is subjected to change.
1. Upon reverse engineering the program in IDA or Hopper values of 0 and 9 and 9 and 17 can be seen in the algorithm function. Below each of the numbers can a __ZNKSs6substrEmm function can be seen being called. Using the function it can be know substring had been called.
```
.text:0000000000400C8E                 mov     rsi, [rbp+var_48] ; unsigned __int64
.text:0000000000400C92                 mov     ecx, 9
.text:0000000000400C97                 mov     edx, 0          ; unsigned __int64
.text:0000000000400C9C                 mov     rdi, rax        ; this
.text:0000000000400C9F                 call    __ZNKSs6substrEmm ; std::string::substr(ulong,ulong)
.text:0000000000400CA4                 lea     rax, [rbp+var_20]
.text:0000000000400CA8                 mov     rsi, [rbp+var_48] ; unsigned __int64
.text:0000000000400CAC                 mov     ecx, 11h
.text:0000000000400CB1                 mov     edx, 9          ; unsigned __int64
.text:0000000000400CB6                 mov     rdi, rax        ; this
.text:0000000000400CB9                 call    __ZNKSs6substrEmm ; std::string::substr(ulong,ulong)
```
2. Upon debugging the application it can be seen that the application loops 9 times twice adding up the values of the ascii together  
```
.text:0000000000400D1C                 mov     eax, [rbp+var_34]
.text:0000000000400D1F                 movsxd  rdx, eax
.text:0000000000400D22                 lea     rax, [rbp+var_30]
.text:0000000000400D26                 mov     rsi, rdx
.text:0000000000400D29                 mov     rdi, rax
.text:0000000000400D2C                 call    __ZNSsixEm      ; std::string::operator[](ulong)
.text:0000000000400D31                 movzx   eax, byte ptr [rax]
.text:0000000000400D34                 movsx   eax, al
.text:0000000000400D37                 add     [rbp+var_3C], eax
.text:0000000000400D3A                 add     [rbp+var_34], 1
```
the  add     [rbp+var_3C], eax refers to adding a value to a remote variable which is usually not how assembly does this. Assembly would usually transfer the value of the address into a register then add the value to it. In this case it would likely be due to the var_3C is a accumulator that is being used between iteration. This can also be said for the var_34 which has 1 being added to it. var_34 is most likely the increment in a for loop or while loop in the program.(In this case it is a for loop)

3.  Lastly, in the checker function, there is one last compare. It checks a variable against 3C which would is 60 in decimal.
```
.text:0000000000400DB2                 push    rbp
.text:0000000000400DB3                 mov     rbp, rsp
.text:0000000000400DB6                 mov     [rbp+var_4], edi
.text:0000000000400DB9                 cmp     [rbp+var_4], 3Ch
.text:0000000000400DBD                 jnz     short loc_400DC6
.text:0000000000400DBF                 mov     eax, 1
.text:0000000000400DC4                 jmp     short loc_400DCB
```
How  we know that the checker function is being called is from the main function. The algorithm function movs a value into eax and in this call eax movs the value to edi. edi is then called in the checker function as a parameter and then used be compared to 60. With this we can be sure that algorithm returns an int which is passed on to checker as a parameter
```
.text:0000000000400E79                 call    _Z9algorithmSs  ; algorithm(std::string)
.text:0000000000400E7E                 mov     edi, eax        ; int
.text:0000000000400E80                 call    _Z7checkeri     ; checker(int)
```

4. Finally, we can generate the code to make random keys  
```powershell  
$alpha="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789"
for($a=0;$a -lt 5000;$a++){
for($i=0;$i -lt 18; $i++){
$string+=Get-Random -InputObject $alpha.ToCharArray()
}
$string[0..8]| %{$adder+=[int]$_}
$string[9..17] | %{$minuser+=[int]$_}
$r=$adder-$minuser
if(($r -eq 60)){
$string
}
$string=""
$r=$adder=$minuser=0
}
```
5. Make a socket connection and manually input 10 licenses and the flag will be shown
Flag is GCTF{D4NK_B4NK_P1N}
