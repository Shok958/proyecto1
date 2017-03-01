<?php 
	if (empty($_POST)) {
?>
	<form action= "" method="post" enctype="multipart/form-data">
		<div class="file-field input-field">
		    <div class="btn waves-effect waves-light blue">
			    <span>Selecciona Archivo</span>
			    <input type="file" name="fichero_usuario">
		    </div>
		    <!--<div class="file-path-wrapper">
		    	<input class="file-path validate" type="text">
		    </div>-->
	    </div>
		<!--<input type="file" name="fichero_usuario">-->
		<input type="submit" name="enviar" class="btn waves-effect waves-light orange">
	</form>
<?php	
	}else{

		$dir = 'uploads/'.$_SESSION['user']['nombre']."/";

		if (!is_dir($dir)) {
			mkdir($dir);
		}
	$fichero_subido = $dir . basename($_FILES['fichero_usuario']['name']);
	move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido);
	header("Location: ./login.php");
	}
 ?>
