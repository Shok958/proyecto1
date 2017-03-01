<?php 
	$conexion = mysqli_connect("localhost","root", "123", "proyecto1");

	if (! $conexion) {
		echo "We have a problem Mike";
		exit;
	}
	$ssql = "insert into nombre (campo1,campo2)
				values('valor1','valor2')";

	if (mysqli_query($conexion,$ssql)) {
		echo "All cool";
	}else{
		echo "FAIL<br>";
		echo mysqli_error($conexion);
	}
	mysqli_close($conexion);
 ?>