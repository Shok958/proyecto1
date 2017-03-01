 <div class="row">
     <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <div class="col-lg-6">
            <div class="input-group">
      <span class="input-group-btn">
          <input type="submit" class="btn btn-primary" value="Buscar">
      </span>
                <input type="text" name="buscar" class="form-control">
            </div>
        </div>
         <label for = "id_categoria">Categoria:</label>
             <select class="form-horizontal" name = "id_categoria">
                 <option value="0">Elige una categoria...</option>
                 <?php
                 $conexion = mysqli_connect("localhost", "root", "123","libreta26");
                 $ssql = "SELECT * FROM categorias";
                 $rs = mysqli_query($conexion, $ssql);

                 while ($fila = mysqli_fetch_array($rs)) {
                     echo '<option value="'.$fila['id_categoria'].'">'.$fila['nombre_categoria'].'</option>';
                 }
                 mysqli_free_result($rs);
                 mysqli_close($conexion);
                 ?>
             </select>
     </form>
     <br><br>
<table class="table-striped">
	<tr>
		<!--<td>Id Contacto</td>-->
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Tlf</th>
		<th>Email</th>
		<th>Direccion</th>
		<th>Categoria</th>
		<th>Fecha de Alta</th>
		<th>Editar</th>
		<th>Borrar</th>
	</tr>
	<?php
    $conexion = mysqli_connect("localhost", "root", "123","libreta26");
    if (empty($_POST)){

        $ssql = "SELECT * FROM contactos WHERE propietario='".$_SESSION['user']['id_usuario']."'";
        if ($rs = mysqli_query($conexion,$ssql)) {
            while ($fila = mysqli_fetch_array($rs)) {
                echo '<tr>';
                //echo '<td>'.$fila['id_contacto'].'</td>';
                echo '<th>'.$fila['nombre'].'</th>';
                echo '<th>'.$fila['apellido'].'</th>';
                echo '<th>'.$fila['tlf'].'</th>';
                echo '<th>'.$fila['email'].'</th>';
                echo '<th>'.$fila['direccion'].'</th>';
                echo '<th>'.$fila['id_categoria'].'</th>';
                echo '<th>'.$fila['fecha_alta'].'</th>';
                echo "<th><a href= 'update.php?id=".$fila['id_contacto']."'><button class='btn btn-primary' >Editar</button></a></th>";
                echo "<th><a href= 'borrar.php?id=".$fila['id_contacto']."'><button class='btn btn-danger'>Borrar</button></a></th>";
                echo '<tr>';
            }
        }

    }else{
        $buscar = $_POST['buscar'];
        $id_cat = $_POST['id_categoria'];
        $ssql = "SELECT * FROM contactos WHERE nombre like '%$buscar%' AND propietario= '".$_SESSION['user']['id_usuario']."' OR id_categoria like '%$id_cat%'";
        if ($rs = mysqli_query($conexion,$ssql)) {
            while ($fila = mysqli_fetch_array($rs)) {
                echo '<tr>';
                //echo '<td>'.$fila['id_contacto'].'</td>';
                echo '<th>' . $fila['nombre'] . '</th>';
                echo '<th>' . $fila['apellido'] . '</th>';
                echo '<th>' . $fila['tlf'] . '</th>';
                echo '<th>' . $fila['email'] . '</th>';
                echo '<th>' . $fila['direccion'] . '</th>';
                echo '<th>' . $fila['id_categoria'] . '</th>';
                echo '<th>' . $fila['fecha_alta'] . '</th>';
                echo "<th><a href= 'update.php?id=" . $fila['id_contacto'] . "'><button class='btn btn-primary' >Editar</button></a></th>";
                echo "<th><a href= 'borrar.php?id=" . $fila['id_contacto'] . "'><button class='btn btn-danger'>Borrar</button></a></th>";
                echo '<tr>';
            }
        }
    }
		mysqli_close($conexion);
	 ?>
</table>
    <a href="contactos.php"><button class="btn btn-primary">Agregar Contacto</button></a>

</div>