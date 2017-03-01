<h2>Listado de Archivos</h2>
<table>
	<tr>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<?php 
	if (empty($_POST['Borrar'])) {
		$dir = './uploads/';
		$ficheros = scandir($dir);
		foreach ($ficheros as $key => $value) {
			if ($ficheros[$key]== '.' || $ficheros[$key]== '..') {
				
			}else{
				echo "<tr>";
				echo "<td>".$ficheros[$key]."</td>";
				echo '<td><a href ="borrar.php"><input type="submit"  name="Borrar" value = "Borrar"></a></td>';
				echo "</tr>";
			}
		}
	}else{
		
	}
	
	 ?>
</table>