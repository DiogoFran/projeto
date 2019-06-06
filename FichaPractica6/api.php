<?php
header('Content-Type: text/html; charset=utf-8');

	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		echo "recebido um post"."<br>";

		if (isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['hora'])) {
			file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
			file_put_contents("files/".$_POST['nome']."/nome.txt",$_POST['nome']);
			file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
		}
		
	}elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
		echo "recebido um get"."<br>";
		if (isset($_GET['nome'])){
			echo file_get_contents("files/".$_GET['nome']."/valor.txt",$_GET['valor']);
		}else{
			echo "Faltam parametros no GET"."<br>";
		}

	}else{
		echo "método não permitido"."<br>";
	}
?>