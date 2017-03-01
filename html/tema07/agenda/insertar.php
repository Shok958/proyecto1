<?php 
	include "includes/plantilla.php";
	$titulo= "Insercion de un contacto";
	escribeCabecera($titulo);

	if (! $_POST) {
		include "includes/formulario.php";
	}else{
		//Si llegamos hasta aqui es que se ha validado correctamente;
		$ssql = "INSERT INTO  contactos(nombre, email, tlf, direccion)
					VALUES ('".$_POST['nombre']."','".$_POST['email']."',".$_POST['tlf'].",'".$_POST['direccion']."')";

		if (mysqli_query($conexion,$ssql)) {
			echo "Contacto insertado correctamente";
		}else{
			echo "No se ha imsertado nada";
			echo "<br/>".mysqli_error($conexion);
			//Si se considera error vuelve a mostrar el form.
			include "includes/formulario.php";
		}


	}

	escribePie($conexion);
 ?>