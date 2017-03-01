<?php
include "includes/funciones.php";
$conexion = conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relaciones entre tablas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Insertar un contacto</h1>

    <?php
    	$contacto = $_POST;
        if (! $_POST) {
        	include "includes/formulario_contacto.php";
        }else{
        	//validar el formulario
        	$errores = [];
        	include "includes/validar.php";

        	if ($errores) {
        		mostrar_errores($errores);
        		include "includes/formulario_contacto.php";
        	}else{
        		include "includes/editar_bbdd.php";
        	}
        }
        include "includes/listado_contactos.php";
        cerrar_conexion($conexion);

    ?>

</body>
</html>