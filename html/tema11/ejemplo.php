<?php 
	include 'persona.php';

	$pepe = new Persona("Pepe", "01/01/1990", "desempleado");
	$pepe->presentate();
	echo "<br>";
	$pepe = new Persona("Vanessa", "29/02/2000", "desarrolladora");
	$pepe->presentate();

 ?>