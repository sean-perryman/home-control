from flask import Flask
app = Flask(__name__)

@app.route("/projOn")
def projOn():
    execfile("power_on_projector.py")
    
@app.route("/projOff")
def projOff():
    execfile("power_off_projector.py")