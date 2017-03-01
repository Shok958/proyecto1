<table>
	<tr>
		<!--<td>Id Contacto</td>-->
		<td>Nombre</td>
		<td>Apellidos</td>
		<td>Tlf</td>
		<td>Email</td>
		<td>Direccion</td>
		<td>Categoria</td>
		<td>Fecha de Alta</td>
		<td>Editar</td>
		<td>Borrar</td>
	</tr>
	<?php 
	$conexion = mysqli_connect("localhost", "root", "123","libreta26");
		$ssql = "SELECT * FROM contactos WHERE propietario='".$_SESSION['user']['id_usuario']."'";
		if ($rs = mysqli_query($conexion,$ssql)) {
			while ($fila = mysqli_fetch_array($rs)) {
				echo '<tr>';
				//echo '<td>'.$fila['id_contacto'].'</td>';
				echo '<td>'.$fila['nombre'].'</td>';
				echo '<td>'.$fila['apellido'].'</td>';
				echo '<td>'.$fila['apellido'].'</td>';
				echo '<td>'.$fila['email'].'</td>';
				echo '<td>'.$fila['direccion'].'</td>';
				echo '<td>'.$fila['id_categoria'].'</td>';
				echo '<td>'.$fila['fecha_alta'].'</td>';
				echo "<td><a href= 'update.php?id=".$fila['id_contacto']."'><button class='btn waves-effect waves-light blue'>Editar</button></a></td>";
				echo "<td><a href= 'borrar.php?id=".$fila['id_contacto']."'><button class='btn waves-effect waves-light red'>Borrar</button></a></td>";
				echo '<tr>';
			}
		}
		mysqli_close($conexion);
	 ?>
</table>

<form action="contactos.php" method="post">
	<input type="submit" name="agregar" value= "Agregar Contacto" class="btn waves-effect waves-light orange">
</form>