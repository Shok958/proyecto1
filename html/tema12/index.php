<?php 
	error_reporting(0);
	include 'models/Usuario.php';
	echo "Test de conexion <br>";
	$db = new DBPDO();
	//print_r($db->getConnection());
	echo "<pre>";
	//print_r($db->all());
	$usuario = new Usuario;
	$cambio_datos = ['nombre' => 'Luis',
					'email' => 'luis@mail.ji',
					'password' => md5(123),
					'edad' => 10];
	$mas_datos = [];

	try {
		$nuevo_id = $usuario->inser();
		print_r($usuario->all());
	} catch (Exception $e) {
		echo '<h1>';
	}
	
	
	

 ?>