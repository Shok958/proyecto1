<?php 
	$to = "antonio958@hotmail.com";
	$from = "shok958@gmail.com";
	$subject = "Ejercicio 2: Mail con cabeceras";
	
	$header = "From: ".$from."\r\n";
	$header .= "Cc: latuya@mail.com \r\n";
	$header .= "Reply-to: jefatura@gmail.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset= UTF-8 \r\n";
	$header .= "X-mailer: PHP:/".phpversion();

	$datosUsuario = array('{{nombre}}' => 'Yo que se tio', '{{fecha}}' =>date('d/m/Y H:i:s'));

	$message = file_get_contents('plantillaemail.html');

	if (mail($to, $subject, $message, $header)) {
		echo "Mensaje enviado correctamente";
	}else{
		echo "Fallo al enviar el mensaje";
	}
 ?>

 Ejercicio  de loggin y registro, con acceso a paginas en las que el usuario este regitrado.