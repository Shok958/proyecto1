<?php 
include "includes/plantilla.php";
	$titulo = "Borrado de un contacto";
	escribeCabecera($titulo);
	$ssql = "DELETE FROM contactos WHERE id_contactos = ".$_GET['id'];
	if (mysqli_query($conexion,$ssql)) {
		echo "Contacto borrado correctamente";
	}else{
		echo "Error al borrar intentalo de nuevo mas tarde";
	}
	escribePie($conexion);

 ?>