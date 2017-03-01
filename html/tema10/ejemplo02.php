<?php 
	$to = "antonio958@hotmail.com";
	$from = "shok958@gmail.com";
	$subject = "Ejercicio 2: Mail con cabeceras";
	$message = "Si lees esto es que se ha enviado correctamente";
	$header = "From: ".$from."\r\n";
	$header .= "Cc: latuya@mail.com \r\n";
	$header .= "Reply-to: jefatura@gmail.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset= UTF-8 \r\n";
	$header .= "X-mailer: PHP:/".phpversion();

	if (mail($to, $subject, $message, $header)) {
		echo "Mensaje enviado correctamente";
	}else{
		echo "Fallo al enviar el mensaje";
	}
 ?>