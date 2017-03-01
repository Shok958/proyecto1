<?php 

	$errores = [];
	$_SESSION['errores']= $errores;

	function validarNombre($nombre){

		if (empty($nombre)) {
			$_SESSION['errores']['nombre']= "campo nombre vacio";
		}elseif (strlen($nombre)<3){ 
      		$_SESSION['errores']['nombre']= "campo nombre demasiado corto";
      	}elseif (! preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]+$/",$nombre)) {
			$_SESSION['errores']['nombre']= "caracteres de nombre no validos";
		}
	}

	function validarApellido($apellido){

		if (empty($apellido)) {
			$_SESSION['errores']['apellido']= "campo apellido vacio";
		}elseif (strlen($apellido)<3){ 
      		$_SESSION['errores']['apellido']= "campo apellido demasiado corto";
      	}elseif (! preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]+$/",$apellido)) {
			$_SESSION['errores']['apellido']= "caracteres de apellido no validos";
		}
	}

	function validarPassword($password){
		
		if(strlen($password) < 6){
      		$_SESSION['errores']['password']= "La clave debe tener al menos 6 caracteres";
		}elseif(strlen($password) > 16){
      		$_SESSION['errores']['password']= "La clave no puede tener más de 16 caracteres";
   		}elseif (!preg_match('`[a-z]`',$password)){
      		$_SESSION['errores']['password']= "La clave debe tener al menos una letra minúscula";
   		}elseif (!preg_match('`[A-Z]`',$password)){
      		$_SESSION['errores']['password']= "La clave debe tener al menos una letra mayúscula";
   		}elseif (!preg_match('`[0-9]`',$password)){
      		$_SESSION['errores']['password']= "La clave debe tener al menos un caracter numérico";
   		}
	}

	function validarDNI($dni){

		$letra = strtoupper(tosubstr($dni, -1));
		$numeros = substr($dni, 0, -1);
		if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
			
		}else{
			$_SESSION['errores']['dni']="DNI no valido"; 
		}
	}

	function validarMail($email){

		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

		}else{
			$_SESSION['errores']['email']= "email no valido";
		}
	}

	function validarTelefono($telefono){

    	if (!preg_match('/^[9|8|6|7][0-9]{8}$/', $telefono)){
    		$_SESSION['errores']['telefono']= "telefono no valido";
    	}
	}
	function validarFecha($fecha){

		$fecha = explode('/', $fecha);
		if (!checkdate(month, day, year)) {
			
		}

	}

	function mostrarErrores(){
    	echo '<ul>';
    	foreach($_SESSION['errores'] as $id => $error){
        	echo "<li>$error</li>";
    	}
    	echo "</ul>";
	}
?>