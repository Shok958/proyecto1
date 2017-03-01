<?php 
	$to = "antonio958@hotmail.com";
	$subject = "Ejercicio 1: Prueba de envio";
	$message = "Si lees esto es que el mensaje se envia correctamente";

	mail($to, $subject, $message);
	 echo "Mensaje enviado";
 ?>