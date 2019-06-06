from time import sleep 
from RPi import GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setup(19,GPIO.OUT)
GPIO.setup(5,GPIO.IN)

try:
	print("Prima CTRL+C para terminar")
	while True:
		if GPIO.input(5) == GPIO.HIGH:
			GPIO.output(19,GPIO.HIGH)
			sleep(5)
		else:
			GPIO.output(19,GPIO.LOW)
			sleep(5)
except KeyboardInterrupt:
	print(" Programa terminado pelo utilizador")
except:
	print("Ocorreu um erro")
finally:
	GPIO.cleanup(19)
	GPIO.cleanup(5)
	print("Fim do programa")