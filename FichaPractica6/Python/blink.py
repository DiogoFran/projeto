from time import sleep 
from RPi import GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setup(19,GPIO.OUT)

try:
	print("Prima CTRL+C para terminar")
	while True:
		GPIO.output(19,GPIO.HIGH)
		sleep(2)
		GPIO.output(19,GPIO.LOW)
		sleep(1)
except KeyboardInterrupt:
	print(" Programa terminado pelo utilizador")
except:
	print("Ocorreu um erro")
finally:
	GPIO.cleanup(19)
	print("Fim do programa")