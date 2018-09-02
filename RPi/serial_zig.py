import serial

# Enable USB Communication
port = serial.Serial('/dev/ttyUSB0', 9600,timeout=.5)
sig = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h']
alloff = ['q','e','t','u','o','a','d','g']
allon = ['w','r','y','i','p','s','f','h']

#while True:
 #   port.write('Hello User \r\n')         # write a Data
    #incoming = ser.readline().strip()
    #print 'Received Data : '+ incoming
 
for i in range(0,8):
    port.write(allon[i])
    rcv = port.read(50)
    print (rcv)
    
