import socket
import time
s = socket.socket()
s.connect(("10.41.92.201", 4998))
time.sleep(1)
s.send("\rsendir,1:1,1,40064,1,1,341,170,22,63,22,21,22,63,22,21,22,21,22,63,22,21,22,63,22,21,22,63,22,21,22,63,22,63,22,21,22,63,22,21,22,21,22,21,22,63,22,63,22,63,22,21,22,63,22,21,22,63,22,63,22,21,22,21,22,21,22,63,22,21,22,63,22,1028,341,170,22,63,22,21,22,63,22,21,22,21,22,63,22,21,22,63,22,21,22,63,22,21,22,63,22,63,22,21,22,63,22,21,22,21,22,21,22,21,22,21,22,21,22,21,22,63,22,63,22,63,22,63,22,63,22,63,22,63,22,63,22,21,22,21,22,1028,341,170,22,63,22,21,22,63,22,21,22,21,22,63,22,21,22,63,22,21,22,63,22,21,22,63,22,63,22,21,22,63,22,21,22,21,22,21,22,63,22,63,22,63,22,21,22,63,22,21,22,63,22,63,22,21,22,21,22,21,22,63,22,21,22,63,22,1028,341,170,22,63,22,21,22,63,22,21,22,21,22,63,22,21,22,63,22,21,22,63,22,21,22,63,22,63,22,21,22,63,22,21,22,21,22,21,22,21,22,21,22,21,22,21,22,63,22,63,22,63,22,63,22,63,22,63,22,63,22,63,22,21,22,21,22,5128\r")
s.recv(256)
s.close()