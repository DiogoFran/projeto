  <?php
  	session_start();

    $username="Carlos";
    $password="123";
	if ($_SERVER['REQUEST_METHOD'] == "POST"){    #se recebeu um post
   	if($_POST['username'] == $username && $_POST['password'] == $password){
	  echo "bem- sucedida";
      $_SESSION['username'] = $_POST['username'];
	  #header('Location: http://www.iot.dei.estg.ipleiria.pt/ti/eid-pl02-g07/dashboard.php'); #para a escola
      header('Location: http://localhost/FichaPractica6/dashboard.php');					 #em casa
    }else{
      echo "falhada - ERROR!"."<br>";
    }
	}

	// ¨¨ porque al iniciar da eror linea 7**
	// echo "$password";
		// if(isset($_POST['password'])){
		// 	echo "<br>";
		// 	echo "mi clave es :". $_POST['password'];
		// }
	// echo "<br>";
	// echo "$username";
		// if(isset($_POST['username'])){
		// 	echo "<br>";
		// 	echo "mi nombre es :". $_POST['username'];
		// }
	
  ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Smart Home</title>
	<style>
	.container {
	  background-color: lightblue;
	    width: 500px;
		position: relative;
		top:100px;
	 
	  
	}
    
	body  {
		  background-image: url("imagenes/CasaIntelegente.jpg");
		 
	}
	
	.fundopreto{
	 
		background-color: black;
		width: 100%;
		height: 100px;
		position: absolute;
		top: 0;
		

	 
	}

	
    </style>
	
	
	
  </head>
  <body>
  <div class="fundopreto">
		<p><font size="20" color="white"><center>Smart Home</center></font></p>
  </div>
  <div class="container">
    


    <form  action="http://localhost/FichaPractica6/index.php" class="mystyle" method="POST">
      <!--<div class="text-center">
        <img src="imagenes/CasaIntelegente.jpg" alt="no cargada" href="http://localhost/FichaPractica6/index.php" height="42" width="42">
      </div> -->
      <div class="form-group">
        <label for="usr">Username:</label>
        <input type="text" class="form-control" id="usr" name="username"  required placeholder="Escreva o username" >
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required placeholder="Escreva a password">
      </div>
      <div class="was-validated">
        <button type="submit" class="btn btn-primary">Submeter</button>  
      </div>
      
    </form>
  </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>