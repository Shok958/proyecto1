<!DOCTYPE html PUBLIC "--//W3C//DTD HTML 4.01 Transitional//EN"
	"http;//www.w3.org/TR/html4/loose.dtd">
<html xmlns="http//wwww.w3.org/1999/xhtml" lang="es-ES">
<head>
	<title>Capitales</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
</head>
<body>
<?php 
	function capitales($datos){
		$Pais = isset($datos['Pais']) ? $datos ['Pais'] :"España";
		$Capital = isset($datos['Capital']) ? $datos ['Capital'] :"Madrid";
		$habitantes = isset($habiantes['habiantes']) ? $datos ['habiantes'] :"muchos";
		return ("La capital de $Pais es $Capital y tiene $habitantes habitantes.<br>");
	}
	$datos['Pais'] = "España";
	echo capitales($datos);
	$datos['Pais'] = "Portugal";
	$datos['Capital'] = "Lisboa";
	echo capitales($datos);
	$datos['Pais'] = "Francia";
	$datos['Capital'] = "Paris";
	$datos['habiantes'] = "muchisimos";
	echo capitales($datos);
 ?>

</body>
</html>