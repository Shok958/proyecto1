<h2>Listado de Contactos</h2>
<table>
	<tr>
		<th>Nombre</th>
		<th>Categoria</th>
		<th>Acciones</th>
	</tr>
	<?php 
		$ssql = "SELECT nombre, nombre_categoria, id_contacto
				FROM contactos, categorias
				WHERE contactos.id_categoria=categorias.id_categoria";
		$rs = mysqli_query($conexion, $ssql);

		while ($fila = mysqli_fetch_array($rs)) {
			
			echo "<tr>";
			echo "<td>".$fila['nombre']."</td>";
			echo "<td>".$fila['nombre_categoria']."</td>";
			echo '<td class="acciones"><a href = "editar.php?id='.
					$fila['id_contacto'].'">Editar</a></td>';
			echo "</tr>";


		}
	 ?>
</table>