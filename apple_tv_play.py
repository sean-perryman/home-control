import socket
import time
s = socket.socket()
s.connect(("10.41.92.201", 4998))
time.sleep(1)
s.send("\rsendir,1:2,2,38580,1,1,348,173,21,22,21,65,21,65,21,65,21,22,21,65,21,65,21,65,21,65,21,65,21,65,21,22,21,22,21,22,21,22,21,65,21,22,21,65,21,65,21,65,21,65,21,22,21,65,21,22,21,65,21,22,21,22,21,22,21,65,21,22,21,22,21,23,21,1480,347,173,21,22,21,65,21,65,21,65,21,22,21,65,21,65,21,65,21,65,21,65,21,65,21,22,21,22,21,22,21,22,21,65,21,22,21,22,21,65,21,22,21,22,21,22,21,22,21,22,21,65,21,22,21,22,21,22,21,65,21,22,21,22,21,23,21,4938\r")
s.recv(256)
s.close()
