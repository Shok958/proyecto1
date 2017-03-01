<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<?php 
	if (!empty($_GET['id'])) {
		echo "<input type = 'hidden' name = 'id_usuario' value = ".$_GET['id'].">";
	}
?>
	<input type="text" placeholder="Nombre" name = "nombre" value="<?php
		if (!empty($_GET['id'])) {echo $fila['nombre'];}
		if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>">
	<input type="email" placeholder="Email" name = "email" value="<?php
		if (!empty($_GET['id'])) {echo $fila['email'];}
		if (isset($_POST['email'])) {echo $_POST['email'];}?>">
	<input type="password" placeholder="Password" name="password" value="<?php
		if (!empty($_GET['id'])) {echo $fila['password'];}
		if (isset($_POST['email'])) {echo $_POST['password'];}?>">
	<input type="submit" name="register" value="<?php
		if (!empty($_GET['id'])) {echo 'Modificar';}else{echo'Registrarse';}?>" class="btn waves-effect waves-light blue">
</form>