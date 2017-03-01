<?php 
	
	$_POST["nombre"] = mysqli_real_escape_string($conexion, $_POST["nombre"]);
	$_POST["email"] = mysqli_real_escape_string($conexion, $_POST["email"]);
	$_POST["direccion"] = mysqli_real_escape_string($conexion, $_POST["direccion"]);
	$_POST["comentarios"] = mysqli_real_escape_string($conexion, $_POST["comentarios"]);


	$ssql ="UPDATE contactos set nombre='{$_POST["nombre"]}', 
								 email='{$_POST["email"]}', 
								 direccion='{$_POST["direccion"]}', 
								 comentarios='{$_POST["comentarios"]}', 
								 id_categoria={$_POST["id_categoria"]} 
			WHERE id_contacto={$_POST["id_contacto"]}";

	if(mysqli_query($conexion, $ssql)){
	    echo "Editado correctamente";
	    echo '<p><a href=".">Volver</a></p>';
	}else{
	    echo "Error en BBDD";
	}

 ?>