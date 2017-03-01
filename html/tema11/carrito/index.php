<?php 
	spl_autoload_register(function($class){
		$archivo = $class.".php";
		include strtolower($archivo);
	});
	session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Carrito de la Compra</title>
 	<link rel="stylesheet" type="text/css" href="estilo.css">
 </head>
 <body>
	<?php 
		$p1 = new Producto("Espuma", 3.5);
		$p2 = new Producto("Chocolate", 2.99);
		$p3 = new Producto("Servilletas", 1.2);

		$carrito = Carrito::getCarrito();
		$d1 = new Descuento("Codigo Negro", 2);
		$p5 = new Producto("Camara",288);
		$p6 = new Producto("Memoria", 12);
		$p7 = new Producto("Tripode",5);
		$pack1 = new Pack([$p5,$p6,$p7]);
		$carrito->mostrar();

		echo "<br><br>";
		echo $p1;
		echo $p2;
		echo $p3;
		echo $p5;
		echo $p6;
		echo $p7;
		echo $pack1;
		echo $d1;
		
	 ?> 
 </body>
 </html>