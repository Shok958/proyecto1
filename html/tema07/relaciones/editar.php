<?php 
	include "includes/funciones.php";
	$conexion = conexion();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Relaciones entre tablas</title>
 	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <body>
 	<h1>Editar un Contacto</h1>
 	<?php 
 		$accion = "Editar";
 		if (! $_POST) {
 			if (!isset($_GET['id'])) {
 			echo "No que elemento quieres editar";
	 		}else{
	 			$id = (int)$_GET['id'];
	 			$ssql = "SELECT * FROM contactos 
	 						WHERE id_contacto =".$id;
	 			if ($rs = mysqli_query($conexion,$ssql)) {
	 				if ($contacto = mysqli_fetch_array($rs)) {
	 					include "includes/formulario_contacto.php";
	 				}else{
	 					echo "No hemos recivido un contacto valido";
	 				}
	 			}else{
	 				echo "Fallo con la base de datos";
	 				}
 				}
 		}else{
 			$contacto = $_POST;
 			$errores=[];
 			include "includes/validar.php";

 			if (!isset($_POST['id_contacto'])) {
 				$errores = "No se que contacto quieres editar";
 			}else{
 				$_POST['id_contacto'] = (int) $_POST['id_contacto'];
 			}
 			if ($errores) {
 				mostrar_errores($errores);
 				include "includes/formulario_contacto.php";
 			}else{
 				include "includes/editar_bbdd.php";
 			}
 		}
 		
 		cerrar_conexion($conexion);
 	 ?>
 </body>
 </html>