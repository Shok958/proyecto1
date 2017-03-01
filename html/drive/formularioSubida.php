<?php 
	if (empty($_POST)) {
?>
	<form action= "" method="post" enctype="multipart/form-data">
		<input type="file" name="fichero_usuario">
		<input type="submit" name="enviar" >
	</form>
<?php	
	}else{

		$dir_subida = './uploads/';

		if (is_dir($dir_subida)) {
			
		}else{
			mkdir($dir_subida);
		}
	$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

	//echo '<pre>';
	if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
	   // echo "El fichero es válido y se subió con éxito.\n";
	} else {
	    //echo "¡Posible ataque de subida de ficheros!\n";
	}

	//print "</pre>";
	//print('<a href = "index.php">Volvel</a>');
	header("Location: ./index.php");
	}
 ?>

