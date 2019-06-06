from time import sleep 
from RPi import GPIO
import requests 

url = "http://localhost/FichaPractica6/api.php"

GPIO.setmode(GPIO.BCM)
GPIO.setup(19,GPIO.OUT)
GPIO.setup(13,GPIO.OUT)
GPIO.setup(5,GPIO.IN)

try:
	print("Prima CTRL+C para terminar")
	while True:
		if GPIO.input(5) == GPIO.HIGH:
			GPIO.output(19,GPIO.HIGH)
			GPIO.output(13,GPIO.LOW)
			hora = strftime("%d/%b/%Y %H:%M:%S", gmtime()) 
			data = {'nome':'porta' , 'valor':GPIO.input(5) , 'hora':hora}
			r=requests.post(url,data)
			sleep(1)
		else:
			GPIO.output(19,GPIO.LOW)
			GPIO.output(13,GPIO.HIGH)
			hora = strftime("%d/%b/%Y %H:%M:%S", gmtime()) 
			data = {'nome':'porta' , 'valor':GPIO.input(5) , 'hora':hora}
			r=requests.post(url,data)
			sleep(1)
except KeyboardInterrupt:
	print(" Programa terminado pelo utilizador")
except:
	print("Ocorreu um erro")
finally:
	GPIO.cleanup(19)
	GPIO.cleanup(13)
	GPIO.cleanup(5)
	print("Fim do programa")