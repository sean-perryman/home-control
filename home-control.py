from flask import Flask
app = Flask(__name__)

# Default Route
@app.route("/")
def main():
    return "Welcome!"

# Projector On
@app.route("/projOn")
def projOn():
    execfile("power_on_projector.py")
 
# Projector Off   
@app.route("/projOff")
def projOff():
    execfile("power_off_projector.py")
    
# Power on receiver
@app.route("/recvOn")
def recvOn():
    execfile("receiver_on.py")

# Receiver Source - BluRay
@app.route("/recvSrcBD")
def recvSrcBD():
    execfile("receiver_src_bd.py")