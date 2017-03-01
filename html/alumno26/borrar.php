<?php 

include "includes/plantilla.php";
	if (!empty($_SESSION['user'])) {
		escribeCabecera("Borrar un Contacto","red lighten");
		$conexion = mysqli_connect("localhost", "root", "123","libreta26");
		$ssql = "DELETE FROM contactos WHERE id_contacto = ".$_GET['id'];

		if ($rs=mysqli_query($conexion,$ssql)) {
			echo "Usuario borrado <br><br>";
			echo "<a href= 'login.php'><button class='btn btn-primary'>Volver</button></a>";
		}else{
			echo "Error al borrar<br>";
			echo "<a href= 'login.php'><button class='btn btn-primary'>Volver</button></a>";
		}

		escribePie();
		mysqli_close($conexion);

	}else{
		header("Location: ./nope.php");
	}

	
 ?>