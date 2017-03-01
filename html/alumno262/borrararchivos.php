<?php 

include "includes/plantilla.php";
	if (!empty($_SESSION['user']['nombre'])) {
		escribeCabecera("Borrar un Archivo","red lighten");
			$dir = 'uploads/'.$_SESSION['user']['nombre']."/";
			if(unlink($dir.urldecode($_GET['id']))){
				echo "Archivo borrado <br><br>";
			}else{
				echo "Error de borrado <br><br>";
				}
			echo "<a href= 'login.php'><button class='btn waves-effect waves-light red'>Volver</button></a>";
			escribePie();
		}else{
			header("Location: ./nope.php");	
		}
 ?>