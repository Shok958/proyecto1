<!DOCTYPE html>
<html>
<head>
	<title>Pagina de citas medicas</title>
</head>
<body>
	<?php 
		$archivo = "citas.txt";
		//comprobar si el archivo existe, si no crearlo y añadir las cabeceras, luego hacerlo chachi way en html
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			if (isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && !empty($_POST['nombre'])) {
				if (is_writable($archivo)) {
					$fuente = fopen($archivo, "a+");
					$reserva = $_POST['cita'].' : '.$_POST['nombre']."\n";
					fwrite($fuente, $reserva);
					fclose($fuente);
					echo "<h2>Cita Guardada</h2>";
				}else{
					echo "<h2>La cita no se ha podido guardar</h2>";
				}
			}else{
				//Se vuelve a mostrar el formulario con los errores del paleto que lo rellena
				echo "Sa matao paco";
			}
		}else{
			include "formularioCitas.php";
		}
 	?>
</body>
</html>
