from RPi import GPIO 
from time import sleep

GPIO.setmode(GPIO.BCM)
GPIO.setup(19,GPIO.OUT)
GPIO.setup(6,GPIO.OUT)
GPIO.setup(13,GPIO.OUT)

try:
	print("Prima CTRL+C para terminar")
	while True:
		print("Vermelho")
		GPIO.output(19,GPIO.HIGH)
		sleep(1)
		GPIO.output(19,GPIO.LOW)
		sleep(1)
			
		print("Azul")
		GPIO.output(6,GPIO.HIGH)
		sleep(1)
		GPIO.output(6,GPIO.LOW)
		sleep(1)

		print("verde")
		GPIO.output(13,GPIO.HIGH)
		sleep(1)
		GPIO.output(13,GPIO.LOW)
		sleep(1)
		
except KeyboardInterrupt:
	print(" Programa terminado pelo utilizador")

except:
	print("Ocorreu um erro")
finally:
	GPIO.cleanup(19)
	GPIO.cleanup(13)
	GPIO.cleanup(6)
	print("Fim do programa")
