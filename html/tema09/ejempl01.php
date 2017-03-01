<?php 
	$fuente = fopen("lista.txt", "a+");
	fwrite($fuente, "Hola mundo\n");
	fclose($fuente);
	echo "Acabo de guardar la cadena en el fichero";
 ?>