<table>
	<tr>
		<td>Id Usuario</td>
		<td>Nombre</td>
		<td>Email</td>
		<td>Admin</td>
		<td>Editar</td>
		<td>Borrar</td>
	</tr>
	<?php 
	$conexion = mysqli_connect("localhost", "root", "123","login");
		$ssql = "SELECT * from usuarios";
		if ($rs = mysqli_query($conexion,$ssql)) {
			while ($fila = mysqli_fetch_array($rs)) {
				echo '<tr>';
				echo '<td>'.$fila['id_usuario'].'</td>';
				echo '<td>'.$fila['nombre'].'</td>';
				echo '<td>'.$fila['email'].'</td>';
				echo '<td>'.$fila['admin'].'</td>';
				echo "<td><a href= 'update.php?id=".$fila['id_usuario']."'><button class='btn waves-effect waves-light blue'>Editar</button></a></td>";
				echo "<td><a href= 'borrar.php?id=".$fila['id_usuario']."'><button class='btn waves-effect waves-light red'>Borrar</button></a></td>";
				echo '<tr>';
			}
		}
		mysqli_close($conexion);
	 ?>
</table>