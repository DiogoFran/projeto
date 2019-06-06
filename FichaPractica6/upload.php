<?php
header('Content-Type: text/html; charset=utf-8');

	$target_dir = "imagenes/";
	$target_file = $target_dir . "webcam.png";
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		echo "recebido um post"."<br>";
		if (isset($_FILES['imagem'])){
			echo "si hay imagen "."<br>";
			if ($_FILES['imagem']['size'] < 100000) {
				echo "Sorry, your file is too large.";
			}elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}else{
				if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["imagem"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}

		}else{
			echo "no se pudo subir la imagen";
		}
		

		//print_r($_FILES['imagem']);
		
	}elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
		echo "recebido um get"."<br>";

	}else{
		echo "método não permitido"."<br>";
	}
?>