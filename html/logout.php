<?php session_start();
	echo 'vas a de la pagina '.$_SESSION['user']['name'];
	session_destroy();
 ?>

 <a href="inicio.php">Regresar al inicio</a>