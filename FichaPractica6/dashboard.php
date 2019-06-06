<?php
#include 'logout.php';
	 session_start();

	 if (!isset($_SESSION['username'])){
	 	header("refresh:5;url=index.php");
	 	die("Acesso restrito.");
	 }

	$valor_temperatura=file_get_contents("files/temperatura/valor.txt");
	$hora_temperatura=file_get_contents("files/temperatura/hora.txt");
	$nome_temperatura=file_get_contents("files/temperatura/nome.txt");
	$log_temperatura=file_get_contents("files/temperatura/nome.txt");

	$valor_porta=file_get_contents("files/porta/valor.txt");
	$hora_porta=file_get_contents("files/porta/hora.txt");
	$nome_porta=file_get_contents("files/porta/nome.txt");
	$log_porta=file_get_contents("files/porta/nome.txt");

	$valor_humidade=file_get_contents("files/humidade/valor.txt");
	$hora_humidade=file_get_contents("files/humidade/hora.txt");
	$nome_humidade=file_get_contents("files/humidade/nome.txt");
	$log_humidade=file_get_contents("files/humidade/nome.txt");

	$valor_luminosidade=file_get_contents("files/luminosidade/valor.txt");
	$hora_luminosidade=file_get_contents("files/luminosidade/hora.txt");
	$nome_luminosidade=file_get_contents("files/luminosidade/nome.txt");
	$log_luminosidade=file_get_contents("files/luminosidade/nome.txt");

	$valor_bateria=file_get_contents("files/bateria/valor.txt");
	$hora_bateria=file_get_contents("files/bateria/hora.txt");
	$nome_bateria=file_get_contents("files/bateria/nome.txt");
	$log_bateria=file_get_contents("files/bateria/nome.txt");

?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=de14ce-width, i14tial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="refresh" content="30">

    <title>Smart Home</title>
	<style>
	body {
	  background-color: lightblue;
	   
	 
	  
	}
	
	.button {
	background-color: white;
	color: black;
 
 
  

}
	</style>

  </head>
  <body>
<!--   	<nav class="navbar navbar-expand-sm bg-light">
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="navbar-brand" >Smart Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" >Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link disabled">Histórico</a>
	    </li>
	    
	  </ul>
	</nav> -->

  	
	<div class="jumbotron">
		
			 <nav style="text-align: right" >
			 
			<button type="button" class="button">
			<a style="color:black" class="nav-link" href="logout.php">Logout</a>
			</button>
			 </nav> 
		<h1>Smart Home</h1> 
		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header text-center"><?php echo "$nome_bateria: "."$valor_bateria%";?></div>
					<div class="card-body text-center"><img width="114" src="imagenes/battery.png" alt="battery"></div> 
					<div class="card-footer text-center">Actualização:<?php echo " $hora_bateria";?><a href="#"> Historico</a></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header text-center"><?php echo "$nome_temperatura: "."$valor_temperatura"."º";?></div>
					<div class="card-body text-center"><img width="114" src="imagenes/temperature.png" alt="termometro"></div> 
					<div class="card-footer text-center">Actualização:<?php echo " $hora_temperatura";?><a href="#"> Historico</a></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header text-center">
						<?php 
						echo "$nome_porta: ";
					 	if ($valor_porta == 1){
					 		echo "Fechada";
					 	}else{
					 		echo 'Aberta';
					 	}
					 	?>	
					 </div>
					<div class="card-body text-center">
						<?php
						if ($valor_porta == 1){
							echo '<img width="114" src="imagenes/closed_door.png" alt="puerta fechada">';
						}else{
							echo '<img width="114" src="imagenes/open_door.png" alt="puerta aberta">';
						}		
						?>
					</div> 
					<div class="card-footer text-center">Actualização:<?php echo " $hora_porta";?><a href="#"> Historico</a></div>
				</div>
			</div>
		</div>

	 <br>

		<div class="row"> 
			<div class="col-sm-4">
					<div class="card">
						<div class="card-header text-center"><p>Webcam</p></div>
						<div class="card-body text-center"><img width="100%" src="imagenes/webcam.png" alt="imagen de webcam"></div> 
						<div class="card-footer text-center">Actualização:<?php echo " $hora_bateria";?><a href="#"> Historico</a></div>
					</div>
			</div>
			<div class="col-sm-4">
					<div class="card">
						<div class="card-header text-center"><?php echo "$nome_bateria: "."$valor_bateria%";?></div>
						<div class="card-body text-center"><img width="114" src="imagenes/battery.png" alt="battery"></div> 
						<div class="card-footer text-center">Actualização:<?php echo " $hora_bateria";?><a href="#"> Historico</a></div>
					</div>
			</div>
			<div class="col-sm-4">
					<div class="card">
						<div class="card-header text-center"><?php echo "$nome_bateria: "."$valor_bateria%";?></div>
						<div class="card-body text-center"><img width="114" src="imagenes/battery.png" alt="battery"></div> 
						<div class="card-footer text-center">Actualização:<?php echo " $hora_bateria";?><a href="#"> Historico</a></div>
					</div>
			</div>
		</div>

	 <br>

		<div class="card">
			<div class="card-header"><h4>Tabela de Sensores</h4></div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Tipo de Dispositivo IoT</th>
							<th scope="col">Valor</th>
							<th scope="col">Data de Atualização</th>
							<th scope="col">Estado Alertas</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row"><?php echo "$nome_luminosidade";?></th>
							<td><?php echo "$valor_luminosidade";?></td>
							<td><?php echo "$hora_luminosidade";?></td>
							<td><span class="badge badge-success">Ativo</span></td>
						</tr>
						<tr>
							<th scope="row"><?php echo "$nome_temperatura";?></th>
							<td><?php echo "$valor_temperatura"."º";?></td>
							<td><?php echo "$hora_temperatura";?></td>
							<td><span class="badge badge-danger">Desativo</span></td>
						</tr>
						<tr>
							<th scope="row"><?php echo "$nome_humidade";?></th>
							<td><?php echo "$valor_humidade";?></td>
							<td><?php echo "$hora_humidade";?></td>
							<td><span class="badge badge-warning">Warning</span></td>
						</tr>
						<tr>
							<th scope="row"><?php echo "$nome_bateria";?></th>
							<td><?php echo "$valor_bateria%";?></td>
							<td><?php echo "$hora_bateria";?></td>
							<td><span class="badge badge-danger">Desativo</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<br>
	<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>