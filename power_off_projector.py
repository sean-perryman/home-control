import socket
import config

s = socket.socket()
s.connect((projector_ip, 8899))
s.send("\r*pow=off#\r")
s.close()