<?php 
	$dir = "fotos/";
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) != false) {
				echo "NOmbre de archivo: $file<br>";
				echo "Tipo de archivo: ".filetype($file)."<br>";
			}
			closedir($dh);
		}else{
			echo "No se puede abrir el directorio";
		}
	}else{
		echo "No existe el directorio";
	}
 ?>