import socket

s = socket.socket()
s.connect(("10.41.92.200", 8899))
s.send("\r*pow=off#\r")
s.close()