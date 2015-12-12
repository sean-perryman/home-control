import socket
import config.py

print projector_ip
c = raw_input("Press enter to continue.")

s = socket.socket()
s.connect(("10.41.92.200", 8899))
s.send("\r*pow=on#\r")
s.close()
