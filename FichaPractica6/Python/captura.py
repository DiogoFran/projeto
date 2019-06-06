from time import sleep 
from pygame import camera
import requests 

url = "http://localhost/FichaPractica6/upload.php"

pygame.init()
pygame.camera.init()

try:
	print("Prima CTRL+C para terminar")
	while True:
		cam = pygame.camera.Camera("/dev/video0",(640,480))
		cam.start()
		image = cam.get_image()

		sleep(0.5)
except KeyboardInterrupt:
	print(" Programa terminado pelo utilizador")
except:
	print("Ocorreu um erro")
finally:

	print("Fim do programa")