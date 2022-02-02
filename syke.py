#Python koodi

import serial
import time
from datetime import datetime
import mariadb

arduino = serial.Serial("/dev/ttyACM0") # Tämä koodi yhdistää arduinon /dev/ttyACM0 porttiin.
arduino.baudrate = 9600 #Tällä valitaan baudia käytetään sensorissa

conn = mariadb.connect(user='root', password='HyTe', host='localhost', database='Tiedot'); #Tämä yhdistää MariaDB tietokantaan.
cur = conn.cursor() #Prosessi siirtyy python koodista MariaDB tietokantaan.

while True:
    data = arduino.readline() #Tämä lukee arduinolta tulevaa dataa
    aika = (f"{datetime.now()}".split('.')[0]) #Splittaa ajasta ylimääräiset millisekunnit pois.
    print(aika)
    bpm = (int(data.decode('utf-8').replace('\n', '').replace('\r', '').replace('\t', '').split(" ")[1])) #Splittaa sykkeestä ylimääräiset kirjaimet pois
    print(bpm)
    ##if bpm > 100:
    ##   print("ALERT: Sykkeesi on erittäin korkea!")
    ##elif bpm < 20:
    ##    print("ALERT: Sykkeesi on erittäin matala!")
    cur.execute(f"INSERT INTO Mittari (arvo, pvm) VALUES ('{bpm}', '{aika}')") #Lähettää datan koodista tietokantaan
    conn.commit()
conn.close()
