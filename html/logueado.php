<?php session_start(); 

	if ($_POST) {
		$_SESSION['user']['name']=$_POST['name'];
	}

?>

<a href="sesion.php">Iniciar Sesion</a>
<a href="logout.php">Cerrar Sesion</a>