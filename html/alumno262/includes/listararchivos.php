<h2>Listado de Archivos</h2>
<table>
	<tr>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<?php 
	if (!empty($_SESSION['user']['nombre'])) {
		$dir = 'uploads/'.$_SESSION['user']['nombre']."/";
		$ficheros = scandir($dir);
		foreach ($ficheros as $key => $value) {
			
			if ($ficheros[$key]== '.' || $ficheros[$key]== '..') {

			}else{
				echo "<tr>";
				echo "<td>".$ficheros[$key]."</td>";
				echo "<td><a href=borrararchivos.php?id=".urlencode($ficheros[$key])."><button class='btn waves-effect waves-light red'>Borrar</button></a></td>";
				echo "</tr>";
			}
		}
	}else{
		header("Location: ./nope.php");	
	}
	
	 ?>
</table>