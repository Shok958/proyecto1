<table>
	<tr>
		<td>Nombre</td>
		<td>Email</td>
		<td>TLF</td>
		<td>Direccion</td>
		<td>Editar</td>
		<td>Borrar</td>
	</tr>
	<?php 
		$ssql = "SELECT * from contactos";
		if ($rs = mysqli_query($conexion,$ssql)) {
			while ($fila = mysqli_fetch_array($rs)) {
				echo '<tr>';
				echo '<td>'.$fila['nombre'].'</td>';
				echo '<td>'.$fila['email'].'</td>';
				echo '<td>'.$fila['tlf'].'</td>';
				echo '<td>'.$fila['direccion'].'</td>';
				echo "<td><a href= 'update.php?id=".$fila['id_contactos']."'>Editar</a></td>";
				echo "<td><a href= 'borrar.php?id=".$fila['id_contactos']."'>Borrar</a></td>";
				echo '<tr>';

			}
		}
	 ?>
</table>