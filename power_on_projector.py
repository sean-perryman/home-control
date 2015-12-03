import socket

s = socket.socket()
s.connect(("10.41.92.103", 8899))
s.send("\r*pow=on#\r")
print s.recv(256)