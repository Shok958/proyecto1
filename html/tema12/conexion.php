<?php 
	echo "<h1>Conexion a la base de datos </h1><br>";

	$host = "localhost";
	$dbname = "agenda";
	$user = "root";
	$password = '123';

	$dsn = 'mysql:host='.$host.';dbname='.$dbname;

	$opciones = array(PDO::ATTR_PERSISTENT => true,
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	try {
		$conexion = new PDO($dsn,$user,$password,$opciones);
		echo "Todo OK, perfecto<br>";
		print_r($conexion);
	} catch (PDOException $e) {
		echo "Error en la conexion ".$e->getMessage();
	}
	echo "<br>Si llegamos aqui somos unos champiñones";
 ?>