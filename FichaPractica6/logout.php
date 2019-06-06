<?php
	session_start();
	session_unset();
	session_destroy();
	echo "All session variables are now removed, and the session is destroyed."; 
	header('Location: http://localhost/FichaPractica6/index.php');
?>