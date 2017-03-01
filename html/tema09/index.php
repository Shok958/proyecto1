<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Upload de archivos</title>
</head>
<body>
	<?php 
		if(!$_POST){
	 ?>
	 	<form action="." method="post" enctype="multipart/form-data">
	 		<p>
	 			<label for="untextoplano">Algo de texto</label>
	 			<input type="text" name="untextoplano">
	 		</p>
	 		<p>
	 			<label for="archivo">Archivo a subir</label>
	 			<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
	 			<input type="file" name="archivo">
	 		</p>
	 		<p>
	 			<input type="submit" name="Enviar">
	 		</p>
	 	</form>
	 <?php 
	 	}else{
	 		//Aqui estamos escribiendo datos por POST.
	 		$tam_max = 2*1024*1024;
	 		$carpeta = "./uploads/";
	 echo "<p> El dato de texto plano es: ".$_POST['untextoplano']."</p>";

	 		//lo primero es comprpbar si hemos recibido el archivo.
	 		if (!isset($_FILES['archivo'])) {
	 			echo "no estoy recibiendo el fichero";
	 		}elseif ($_FILES['archivo']['size'] == 0) {
	 			echo "El fichero no ha llegado correctamente";	
	 		}elseif ($_FILES['archivo']['size']>$tam_max) {
	 			echo "el fichero no puede superar el tamño de $tam_max bytes";
	 		}elseif ($_FILES['archivo']["type"]!= 'image/jpeg') {
	 			echo "No se permiten archivos distintos de jpg";
	 		}else{
	 			$mimeinfo = finfo_open(FILEINFO_MIME);
	 			if (!$mimeinfo) {
	 				echo "No puedo abrir el archivo por motivos de seguridad";
	 			}else{
	 				$mimereal = finfo_file($mimeinfo, $_FILES['archivo']['tmp_name']);
	 				if(strpos($mimereal, 'image/jpeg')!= 0){
	 					echo "El tipo mime del archivo no se correspode com jpeg";
	 				}else{
			 			$destino = $carpeta.$_FILES['archivo']['name'];
			 			if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
			 				echo "Tu archivo ha sido cargado correctamente";
			 			}else{
			 				echo "Fallo al cargar el archivo";
			 			}
	 				}
	 			}
	 			
	 		}
	 	}
	  ?>
</body>
</html>