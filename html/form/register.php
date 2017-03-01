<?php 
	if (! $_POST) {
		include "includes/formularioregistro.php";
	}else{
		//Si llegamos hasta aqui es que se ha validado correctamente;
		$ssql = "INSERT INTO  usuarios(nombre, email)
					VALUES ('".$_POST['nombre']."','".$_POST['email']."')";

		if (mysqli_query($conexion,$ssql)) {
			echo "Usuario creado correctamente";
		}else{
			echo "No se ha insertado nada";
			echo "<br/>".mysqli_error($conexion);
			//Si se considera error vuelve a mostrar el form.
			include "includes/formularioregistro.php";
		}
	}
 ?>