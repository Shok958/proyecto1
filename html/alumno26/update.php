<?php 

include "includes/plantilla.php";
	if (!empty($_SESSION['user'])) {
		escribeCabecera("Editar un Contacto","blue lighten");
		$conexion = mysqli_connect("localhost", "root", "123","libreta26");
		if ($_POST) {
			$ssql= "UPDATE contactos SET nombre= '".$_POST['nombre']."', apellido = '".$_POST['apellido']."', tlf = '".$_POST['tlf']."', email = '".$_POST['email']."', direccion = '".$_POST['direccion']."', id_categoria = 2 WHERE id_contacto = ".$_POST['id_contacto'];
			if (mysqli_query($conexion,$ssql)) {
				echo "Usuario actualizado<br><br>";
				echo "<a href= 'login.php'><button class='btn btn-primary'>Volver</button></a>";

			}else{
				echo "Error al actualizar el usuario".mysqli_error($conexion);
			}

		}else{

			$ssql= "SELECT * FROM contactos WHERE id_contacto=".$_GET['id'];
			if ($rs = mysqli_query($conexion,$ssql)) {
				$fila = mysqli_fetch_array($rs);
				include "includes/formulariocontactos.php";
		}
	}
		escribePie();
		mysqli_close($conexion);
	}else{
		header("Location: ./nope.php");	
	}

	
 ?>