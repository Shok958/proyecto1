<?php 
	include "includes/plantilla.php";
	$titulo = "Editando un contacto";
	escribeCabecera($titulo);

	if ($_POST) {
		$ssql= "UPDATE contactos SET nombre= '".$_POST['nombre']."', email = '".$_POST['email']."', tlf =".$_POST['tlf'].", direccion = '".$_POST['direccion']."' WHERE id_contactos = ".$_POST['id_contactos'];
		if (mysqli_query($conexion,$ssql)) {
			echo "Usuario actualizado";
		}else{
			echo "Error"-mysqli_error($conexion);
		}

	}else{

		$ssql= "SELECT * FROM contactos WHERE id_contactos=".$_GET['id'];
		if ($rs = mysqli_query($conexion,$ssql)) {
			$fila = mysqli_fetch_array($rs);
			include "includes/formulario.php";
		}
	}	
	escribePie($conexion);
 ?>