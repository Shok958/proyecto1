<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<?php 
	if (!empty($_GET['id'])) {
		echo "<input type = 'hidden' name = 'id_usuario' value = ".$_GET['id'].">";
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
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Email" name = "email" value="<?php
        if (!empty($_GET['id'])) {echo $fila['email'];}
        if (isset($_POST['email'])) {echo $_POST['email'];}?>">
    </div>

    <div class="form-group">
        <label for="email">Nickname:</label>
        <input type="text" class="form-control" placeholder="Nickname" name = "nickname" value="<?php
        if (!empty($_GET['id'])) {echo $fila['nickname'];}
        if (isset($_POST['nickname'])) {echo $_POST['nickname'];}?>">
    </div>

    <div class="form-group">
        <label for="email">Password:</label>
        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php
        if (!empty($_GET['id'])) {echo $fila['password'];}
        if (isset($_POST['password'])) {echo $_POST['password'];}?>">
    </div>

    <div class="form-group">
        <label for="email">Repite Password:</label>
        <input type="password" class="form-control" placeholder="Repite Password" name="password2" value="<?php
        if (!empty($_GET['id'])) {echo $fila['password2'];}
        if (isset($_POST['password2'])) {echo $_POST['password2'];}?>">
    </div>

      <input type="checkbox" class="filled-in" id="filled-in-box"/>
      <label for="filled-in-box">Acepto lo terminos y condiciones</label>
      <br><br>
	<input type="submit" name="register" value="<?php
		if (!empty($_GET['id'])) {echo 'Modificar';}else{echo'Registrarse';}?>" class="btn btn-primary">
</form>