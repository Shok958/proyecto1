<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<?php 
	if (!empty($_GET['id'])) {
		echo "<input type = 'hidden' name = 'id_contacto' value = ".$_GET['id'].">";
	}
?>
    <div class="form-group">
        <label for="email">Nombre:</label>
        <input type="text" class="form-control" placeholder="Nombre" name = "nombre" value="<?php
        if (!empty($_GET['id'])) {echo $fila['nombre'];}
        if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>">
    </div>

    <div class="form-group">
        <label for="email">Apellido:</label>
        <input type="text" class="form-control" placeholder="Apellido" name = "apellido" value="<?php
        if (!empty($_GET['id'])) {echo $fila['apellido'];}
        if (isset($_POST['apellido'])) {echo $_POST['apellido'];}?>">
    </div>

    <div class="form-group">
        <label for="email">TLF:</label>
        <input type="text" class="form-control" placeholder="TLF" name = "tlf" value="<?php
        if (!empty($_GET['id'])) {echo $fila['tlf'];}
        if (isset($_POST['tlf'])) {echo $_POST['tlf'];}?>">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Email" name = "email" value="<?php
        if (!empty($_GET['id'])) {echo $fila['email'];}
        if (isset($_POST['email'])) {echo $_POST['email'];}?>">
    </div>

    <div class="form-group">
        <label for="email">Direccion:</label>
        <input type="text" class="form-control" placeholder="Direccion" name = "direccion" value="<?php
        if (!empty($_GET['id'])) {echo $fila['direccion'];}
        if (isset($_POST['direccion'])) {echo $_POST['direccion'];}?>">
    </div>

<p>	<label for = "id_categoria">Categoria:</label>
        <select class="form-control" name = "id_categoria">
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
		if (!empty($_GET['id'])) {echo 'Modificar';}else{echo'Agregar';}?>" class="btn btn-primary">
</form>