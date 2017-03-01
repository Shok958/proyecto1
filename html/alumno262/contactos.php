<?php 
	include "includes/plantilla.php";
	include "includes/validar.php";

	if (!empty($_SESSION['user'])) {
		escribeCabecera("Agregar un Contacto en Agenda","blue lighten");
		if (!empty($_POST)) {
		include "includes/formulariocontactos.php";
	}else {

		validarNombre($_POST['nombre']);
		validarApellido($_POST['apellido']);
		validarTelefono($_POST['tlf']);
		validarMail($_POST['email']);

		if ($_SESSION['errores']) {
			mostrarErrores($_SESSION['errores']);
			include "includes/formulariocontactos.php";
		}else{
			$conexion = mysqli_connect("localhost", "root", "123","libreta26");
			$ssql = "INSERT INTO  contactos(nombre, apellido, tlf, email, direccion, id_categoria, fecha_alta, propietario)
					VALUES ('".$_POST['nombre']."','".$_POST['apellido']."', ".$_POST['tlf']." ,'".$_POST['email']."','".$_POST['direccion']."', 2, '".getdate("dd/mm/yy")."',".$_SESSION['user']['id_usuario'].")";

			if (mysqli_query($conexion,$ssql)) {
				header("Location: ./login.php");
			}else{
				echo "No se ha insertado nada";
				echo "<br/>".mysqli_error($conexion);
				}
			mysqli_close($conexion);
		}
	}
		escribePie();
	}else{
		header("Location: ./nope.php");	
	}
 ?>