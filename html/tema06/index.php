<?php include "funciones.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formularios usables</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<h1>Formularios Usables</h1>
	<?php 
		$errores = []; 
		if (! $_POST) {
			include "formulario.php";
		}else {
			
			if (! isset($_POST["nombre"])) {
				$errores['nombre']= "no he recivido el nombre";
				
			}else if(strlen($_POST["nombre"]) < 3){
				$errores['nombre']= "campo nombre demasiado corto";
				}
			if (! isset($_POST["email"])) {
				$errores['email']= "no he recivido el email";
		
			}else if(strlen($_POST["email"]) < 3){
				$errores['email']= "email no valido";
				}
			if (! $_POST["clave1"] || ! $_POST["clave2"]) {
				$errores['clave1']= "no he recivido ambas claves";
				
			}else{
				if(strlen($_POST["clave1"]) < 5){
				$errores['clave1']= "la clave debe tener 5 o mas caracteres";
				}
				if(strlen($_POST["clave1"]) != $_POST["clave2"]){
				$errores['clave2']= "las claves tienen que ser iguales";
				}
			}
			
			if ($errores) {
				mostrarErrores($errores);
				include "formulario.php";
			}else{
				$errores[]= "todo bien, todo correcto, pase usted senior";
			}
				}
	?>
</body>
</html>