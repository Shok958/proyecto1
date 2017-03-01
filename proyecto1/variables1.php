<?php
	$nombre = "Pepe";
	$edad = 26;
	$edad1 = 26;
	$edad2 = "26";
	$texto = "Mi nombre es $nombre";
	$cadena = $nombre.' '.$edad;

	echo $nombre;
	echo "<br>";
	echo $edad;
	echo "<br>";
	echo $texto;
	echo "<br>";
	echo $cadena;
	echo "<br>";
	$a = 5;
	echo $b = &$a;
	echo "<br>";
	echo $edad1==$edad2 ? "Verdadero":"Falso";
	echo "<br>";
	echo $edad1===$edad2 ? "Verdadero":"Falso";
