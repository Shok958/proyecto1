<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
</head>
<body>
	<?php 
		if (isset($_SESSION['user']['name'])) {
			echo 'Eres '.$_SESSION['user']['name'];
		}else{
			echo "No estas logueado";
		}
	 ?>
	<a href="sesion.php">Iniciar Sesion</a>
	<a href="logout.php">Cerrar Sesion</a>
</body>
</html>