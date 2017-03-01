<?php 
	include "includes/plantilla.php";
	if (!empty($_SESSION['user'])) {
		escribeCabecera("Hola, ".$_SESSION['user']['nombre'],"green lighten");
		if ($_SESSION['user']['admin']==1) {
			include "includes/listado.php";
		}else{
			include "includes/listararchivos.php";
			include "includes/formulariosubida.php";
		}

		escribePie();
	}else{
		header("Location: ./nope.php");	
	}
 ?>