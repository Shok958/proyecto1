<?php 
	function escribeCabecera($titulo = "Bienvenido"){
		?>
		<!DOCTYPE html>
			<html >
			<head>
			  <meta charset="UTF-8">
			  <title>Formulario Registro</title>
			    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			</head>
			<body>
			  <hgroup>
			  <h1><?= $titulo ?></h1>
			</hgroup>
		<?php
	}

	function escribePie(){
		?>
		<input type="submit" name="volver" value="<?= if (!isset($_POST)) {
			'salir'
		}else{ 'volver' }?>">
		</body>
		</html>
		<?php
	}
?>