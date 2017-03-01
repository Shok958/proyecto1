<?php 
	include "includes/plantilla.php";
	include "includes/validar.php";
	escribeCabecera("Introduce tus datos:","light-blue lighten-1");
	if (empty($_POST)) {
		include "includes/formularioregistro.php";
	}else {

		validarNombre($_POST['nombre']);
		validarApellido($_POST['apellido']);
		validarMail($_POST['email']);
		if ($_POST['password']==$_POST['password2']) {
			validarPassword($_POST['password']);
		}else{
			$_SESSION['errores']['password'] = "Las claves no coinciden";
		}
		
		if ($_SESSION['errores']) {
			mostrarErrores($_SESSION['errores']);
			include "includes/formularioregistro.php";
		}else{
			$conexion = mysqli_connect("localhost", "root", "123","libreta26");
			$ssql = "INSERT INTO  usuarios(nombre, apellido, email, nickname, password)
					VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['email']."','".$_POST['nickname']."','".md5($_POST['password'])."')";

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