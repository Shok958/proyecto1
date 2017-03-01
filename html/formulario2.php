<?php 
	if (! $_POST) {
		
	
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<form action="formulario2.php" method="POST">
		<p>
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="">
		</p>
		<p>
			<label for="apellidos">Apellidos:</label>
			<input type="text" name="apellidos" value="">
		</p>
		<p>
			<input type="submit" value="Enviar">
		</p>
	</form>
</body>
</html>
<?php 
	}else{
		echo("El nombre recibido es ".$_POST['nombre']."<br>");
		echo("El apellido recibido es ".$_POST['apellidos']."<br>");
	}

 ?>