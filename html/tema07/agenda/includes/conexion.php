<?php 
	function abrirConexion($host,$usuario,$pass,$bd){
		$conexion = mysqli_connect($host,$usuario,$pass,$bd);
		if ($conexion) {
			mysqli_set_charset($conexion,"utf8");
			return $conexion;
		}else{
			echo "Error en la conexion";
			exit();
		}
	}
	function cerrarConexion($conexion){
		mysqli_close($conexion);
	}
 ?>