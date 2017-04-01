# Web Sniffer
Distribute the file.

## Question Text
The web isn't as safe as you think. We monitored an unsecured web connection and believe that a flag may be among the connections between the server and client. Take this packet capture file and perform network analysis to find the flag.

Hint: Try filtering the junk connections and viewing only "http".

## How to Play
1. Start Kali virtual machine
2. Open the pcap file in Wireshark

## Distribution
Distribute all the contents inside `distrib` folder to the users.

## Solution
1. Open with Wireshark
2. Filter "http"
3. Packet No. 16 is a HTTP POST request with the flag as the POST parameter value.

Flag: GCTF{N0_FL46_15_54F3_0N_7H3_W3B}
