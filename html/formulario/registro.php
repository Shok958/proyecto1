<?php 
	include "includes/plantilla.php";
	include "includes/validar.php";
	escribeCabecera("Introduce tus datos:","light-blue lighten-1");
	if (empty($_POST)) {
		include "includes/formularioregistro.php";
	}else {

		validarNombre($_POST['nombre']);
		validarMail($_POST['email']);
		if ($_SESSION['errores']) {
			mostrarErrores($_SESSION['errores']);
			include "includes/formularioregistro.php";
		}else{
			$conexion = mysqli_connect("localhost", "root", "123","login");
			$ssql = "INSERT INTO  usuarios(nombre, email, password)
					VALUES ('".$_POST['nombre']."','".$_POST['email']."','".md5($_POST['password'])."')";

			if (mysqli_query($conexion,$ssql)) {
				header("Location: ./index.php");
			}else{
				echo "No se ha insertado nada";
				echo "<br/>".mysqli_error($conexion);
				}
			mysqli_close($conexion);
		}
	}
	
	escribePie();
 ?>