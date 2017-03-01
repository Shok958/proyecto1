<form action="<?= $_SERVER['PHP_SELF']?>" method = post>
	
	<?php 
	if ($_GET) {
		echo "<input type = 'hidden' name = 'id_contactos' value = ".$_GET['id'].">";
	}
	?>
	Nombre:<input type = "text" name="nombre" value="<?php 
	if ($_GET) {echo $fila['nombre'];}
	if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>"><br/>
	Email:<input type = "email" name="email" value="<?php 
	if ($_GET) {echo $fila['email'];}
	if (isset($_POST['email'])) {echo $_POST['email'];}?>"><br/>
	Tlf:<input type = "phone" name="tlf" value="<?php 
	if ($_GET) {echo $fila['tlf'];}
	if (isset($_POST['tlf'])) {echo $_POST['tlf'];}?>"><br/>
	Direccion:<textarea name="direccion" id="direccion" cols = "30" rows="5"> <?php 
	if ($_GET) {echo $fila['direccion'];}
	if (isset($_POST['direccion'])) {echo $_POST['direccion'];}?></textarea><br/>
	<input type="submit" value="<?php if ($_GET) {
		echo "Editar";}else{ echo "Insertar";} ?>">

</form>