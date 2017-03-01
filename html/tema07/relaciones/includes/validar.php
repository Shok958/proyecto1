<?php 

	if (! isset($_POST["nombre"])) {
		$errores['nombre']= "no he recivido el nombre";
				
		}else if(strlen($_POST["nombre"]) < 3){
			$errores['nombre']= "campo nombre demasiado corto";
			}
	if (! isset($_POST["email"])) {
		$errores['email']= "no he recivido el email";
		
		}else if(strlen($_POST["email"]) < 6){
			$errores['email']= "email no valido";
			}
	if (!isset($_POST['id_categoria'])) {
		$errores[]= "No he recibido la categoria";
	}else{
		$_POST['id_categoria'] = (int) $_POST['id_categoria'];

		$ssql = "SELECT id_categoria FROM categorias WHERE id_categoria=".$_POST['id_categoria'];
		if ($rs = mysqli_query($conexion,$ssql)) {
			if (mysqli_num_rows($rs) != 1) {
				$errores[] = "Por favor selecciona una categoria";
			}
		}else{
			$errores[] = "Error con la base de datos";
		}
	}
 ?>