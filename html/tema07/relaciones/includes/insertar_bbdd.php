<?php 

	$_POST['nombre'] = mysqli_real_escape_string($conexion, $_POST['nombre']);
	$_POST['email'] = mysqli_real_escape_string($conexion, $_POST['email']);
	$_POST['direccion'] = mysqli_real_escape_string($conexion, $_POST['direccion']);
	$_POST['comentarios'] = mysqli_real_escape_string($conexion, $_POST['comentarios']);

	$ssql = "INSERT INTO contactos(nombre, email, direccion, comentarios, id_categoria) 
			VALUES('".$_POST['nombre']."', '".$_POST['email']."', '".$_POST['direccion']."', '".$_POST['comentarios']."',".$_POST['id_categoria'].")";

	if (mysqli_query($conexion, $ssql)) {
		
		echo "Insertado Correctamente";
		echo '<p><a href = ".">Volver</a></p>';
	}else{
		$errores= ["Hubo un error al insertar en la base de datos"];
		mostrar_errores($errores);
		include "includes/formulario_contacto.php";
	}
?>