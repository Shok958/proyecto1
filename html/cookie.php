<?php 
	
	$duracion = time() + 60*60*24*265*2;//dos años de duracion
	setcookie("nombre","Pepe");
	setcookie("edad","30",$duracion);
	$datos = ['web'=> 'iescierva.net','director'=> 'Jose Antonio'];
	setcookie('especial',serialize($datos), $duracion);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ejemplo de cookies</title>
 </head>
 <body>
 	<h1> Hola <?= $_COOKIE['nombre']?> </h1>
 	<h2> Tu edad es: <?= $_COOKIE['edad']?> </h2>
 	<h2>Datos:
 	<?php var_dump(unserialize($_COOKIE['especial'])) ?>
 	</h2>
 </body>
 </html>