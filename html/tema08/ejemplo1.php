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
			if (strlen($_POST["nombre"])<3) {
				echo $_POST["nombre"];
			}else{
				echo "Es valido el nombre";
			}
		}else{
			echo "No tengo el nombre";
		}
	}
 ?>
 <form action="<?= $_SERVER["PHP_SELF"]?>" method = "post">
 Nombre: <input type="text" name="nombre">
 <br>
 <input type="submit" value = "enviar">		
 </form>
</body>
</html>