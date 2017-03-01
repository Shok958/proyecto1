<?php 
	include "includes/plantilla.php";
	if (!empty($_SESSION['user'])) {
		escribeCabecera("Hola, ".$_SESSION['user']['nombre'],"green lighten");
		include "includes/listado.php";
		escribePie();
	}else{
		header("Location: ./nope.php");	
	}
 ?>