<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<?php 
	if (!empty($_GET['id'])) {
		echo "<input type = 'hidden' name = 'id_usuario' value = ".$_GET['id'].">";
	}
?>
	<input type="text" placeholder="Nombre" name = "nombre" value="<?php
		if (!empty($_GET['id'])) {echo $fila['nombre'];}
		if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>">

	<input type="text" placeholder="Apellido" name = "apellido" value="<?php
		if (!empty($_GET['id'])) {echo $fila['apellido'];}
		if (isset($_POST['apellido'])) {echo $_POST['apellido'];}?>">

	<input type="email" placeholder="Email" name = "email" value="<?php
		if (!empty($_GET['id'])) {echo $fila['email'];}
		if (isset($_POST['email'])) {echo $_POST['email'];}?>">

	<input type="text" placeholder="Nickname" name = "nickname" value="<?php
		if (!empty($_GET['id'])) {echo $fila['nickname'];}
		if (isset($_POST['nickname'])) {echo $_POST['nickname'];}?>">

	<input type="password" placeholder="Password" name="password" value="<?php
		if (!empty($_GET['id'])) {echo $fila['password'];}
		if (isset($_POST['password'])) {echo $_POST['password'];}?>">

	<input type="password" placeholder="Repite Password" name="password2" value="<?php
		if (!empty($_GET['id'])) {echo $fila['password2'];}
		if (isset($_POST['password2'])) {echo $_POST['password2'];}?>">

      <input type="checkbox" class="filled-in" id="filled-in-box"/>
      <label for="filled-in-box">Acepto lo terminos y condiciones</label>
      <br><br>
	<input type="submit" name="register" value="<?php
		if (!empty($_GET['id'])) {echo 'Modificar';}else{echo'Registrarse';}?>" class="btn waves-effect waves-light blue">
</form>