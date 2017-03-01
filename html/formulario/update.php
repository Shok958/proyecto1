<?php 

include "includes/plantilla.php";
	if (!empty($_SESSION['user']) && $_SESSION['user']['admin']==1) {
		escribeCabecera("Editar un Usuario","blue lighten");
		$conexion = mysqli_connect("localhost", "root", "123","login");
		if ($_POST) {
			$ssql= "UPDATE usuarios SET nombre= '".$_POST['nombre']."', email = '".$_POST['email']."', password ='".md5($_POST['password'])."' WHERE id_usuario = ".$_POST['id_usuario'];
			if (mysqli_query($conexion,$ssql)) {
				echo "Usuario actualizado<br><br>";
				echo "<a href= 'login.php'><button class='btn waves-effect waves-light blue'>Volver</button></a>";

			}else{
				echo "Error".mysqli_error($conexion);
			}

		}else{

			$ssql= "SELECT * FROM usuarios WHERE id_usuario=".$_GET['id'];
			if ($rs = mysqli_query($conexion,$ssql)) {
				$fila = mysqli_fetch_array($rs);
				include "includes/formularioregistro.php";
		}
	}
		escribePie();
		mysqli_close($conexion);
	}else{
		header("Location: ./nope.php");	
	}

	
 ?>