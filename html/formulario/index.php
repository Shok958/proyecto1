<?php
	include "includes/plantilla.php";
	include "includes/validar.php";
	escribeCabecera();
	if (!empty($_SESSION['user'])) {
		echo "<h5 class='header col s12 light'>Esta es la pagina de Inicio</h5>";
	}else if (empty($_POST)) {
		include "includes/formularioindex.php";
	}else{
		validarMail($_POST['email']);
		if ($_SESSION['errores']) {
			mostrarErrores($_SESSION['errores']);
			include "includes/formularioindex.php";
		}else{
			$conexion = mysqli_connect("localhost", "root", "123","login");

			$ssql = "SELECT nombre, email, password, admin FROM usuarios WHERE email='".$_POST['email']."' AND password='".md5($_POST['password'])."'";

			if ($rs = mysqli_query($conexion,$ssql)) {
				$arraybd = mysqli_fetch_array($rs);
				print_r($arraybd);
				if ($arraybd['email'] == $_POST['email'] && $arraybd['password']==md5($_POST['password'])) {
					$_SESSION['user'] = $arraybd;
					header("Location: ./index.php");
				}else{
					echo "Usuario Incorrecto";
					echo "<br/>".mysqli_error($conexion);
					include "includes/formularioindex.php";
				}
			}
			mysqli_close($conexion);
		}
	}
	escribePie();
 ?>