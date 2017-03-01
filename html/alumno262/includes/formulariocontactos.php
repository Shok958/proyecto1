<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<?php 
	if (!empty($_GET['id'])) {
		echo "<input type = 'hidden' name = 'id_contacto' value = ".$_GET['id'].">";
	}
?>
	<input type="text" placeholder="Nombre" name = "nombre" value="<?php
		if (!empty($_GET['id'])) {echo $fila['nombre'];}
		if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>">

	<input type="text" placeholder="Apellido" name = "apellido" value="<?php
		if (!empty($_GET['id'])) {echo $fila['apellido'];}
		if (isset($_POST['apellido'])) {echo $_POST['apellido'];}?>">

	<input type="text" placeholder="TLF" name = "tlf" value="<?php
		if (!empty($_GET['id'])) {echo $fila['tlf'];}
		if (isset($_POST['tlf'])) {echo $_POST['tlf'];}?>">

	<input type="email" placeholder="Email" name = "email" value="<?php
		if (!empty($_GET['id'])) {echo $fila['email'];}
		if (isset($_POST['email'])) {echo $_POST['email'];}?>">

	<input type="text" placeholder="Direccion" name = "direccion" value="<?php
		if (!empty($_GET['id'])) {echo $fila['direccion'];}
		if (isset($_POST['direccion'])) {echo $_POST['direccion'];}?>">

    <div class="browser-default">
        <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
        <label>Materialize Select</label>
    </div>

<p>	<label for = "id_categoria">Categoria</label>
        <select name = "id_categoria">
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
</p>

	<input type="submit" name="register" value="<?php
		if (!empty($_GET['id'])) {echo 'Modificar';}else{echo'Agregar';}?>" class="btn waves-effect waves-light blue">
</form>