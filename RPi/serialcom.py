import serial
import RPi.GPIO as GPIO      
import os, time
 
GPIO.setmode(GPIO.BOARD)    
port = serial.Serial("/dev/ttyACM1", baudrate=9600, timeout=0.5)
sig = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h']
alloff = ['q','e','t','u','o','a','d','g']
allon = ['w','r','y','i','p','s','f','h']
 
#while True:
for i in range(-1,16):
    port.write(sig[i])
    rcv = port.read(50)
    print (rcv)
    
for i in range(0,8):
    port.write(alloff[i])
    rcv = port.read(50)
    print (rcv)

for i in range(0,8):
    port.write(allon[i])
    rcv = port.read(50)
    print (rcv)
    

    