<!DOCTYPE html>
<html>
<head>
	<title>Enlaces</title>
</head>
<body>
	<h1>Uso de la clase enlaces</h1>
	<?php 

		include 'etiqueta.php';
		include 'enlace.php';
		include 'migaspan.php';
		include 'migaspancontenedor.php';

		
		$migas = new MigasPanContenedor("=>","div");
		$migas->agregaNodo("Home","http://wwww.iescierva.net");
		$migas->agregaNodo("Noticias","http://wwww.iescierva.net/noticias");
		$migas->agregaNodo("Noticias Academicas","http://wwww.iescierva.net/noticias/academicas");
		echo $migas->mostrar();

		/*$enlace = new Enlace();
		$enlace ->href = "http://www.google.es";
		$enlace ->texto = "Guguel";

		$enlace->mostrar();*/
	 ?>
</body>
</html>