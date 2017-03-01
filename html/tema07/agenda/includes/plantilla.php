<?php 
	include "conexion.php";

	$conexion = abrirConexion("localhost","root","123","agenda");

	function escribeCabecera($titulo = "Agenda de mis Contactos"){
		?>
		<!DOCTYPE html>
		<html lang = "en">
		<head>
			<meta charset="utf-8">
			<title>Agenda de Contactos</title>
			<link rel="stylesheet" type="text/css" href="includes/estilos.css">
		</head>
		<body>
			<header class="cabecera">
				<h1><?= $titulo ?></h1>
			</header>
			<section>
		<?php
	}

	function escribePie($conexion){
		?>
		</section>
		<footer class="pie">
			<a href="index.php">Pagina principal</a>
			-
			<a href="insertar.php">Insertar un contacto</a>
		</footer>
		</body>
		</html>
		<?php
		cerrarConexion($conexion);
	}
?>