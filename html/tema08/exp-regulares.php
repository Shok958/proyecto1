<!DOCTYPE html>
<html lang  = "en">
<head>
<meta charset="utf-8">
	<title>Trim</title>
</head>
<body>
	<?php 
		if ($_POST) {
			if (! empty($_POST["nombre"])) {
				$_POST["nombre"] = trim($_POST["nombre"]);
				if (! preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]+$/", $_POST["nombre"])) {
					echo "No es valido el nombre";
				}else{
					echo "Es valido el nombre";
				}
			}else{
				echo "No tengo el nombre";
			}
		}
		if(! empty($_POST["comentarios"])){
			echo "<br>";
			echo nl2br(htmlentities($_POST["comentarios"]));
		}
	 ?>	 
 <form action="<?= $_SERVER["PHP_SELF"]?>" method = "post">
 Nombre: <input type="text" name="nombre">
 <br>
 Comentarios: <textarea name="comentarios" id="" cols="30" rows="10"></textarea>
 <br>
 <input type="submit" value = "enviar">
 </form>
</body>
</html>