<form action="<?= $_SERVER['PHP_SELF']?>" method = "post">
<?php 
	if ($_GET) {
		echo "<input type = 'hidden' name = 'id_usuario' value = ".$_GET['id'].">";
	}
?>
  <div class="group">
    <input type="text" name="nombre" value="<?php
	if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>"><span class="highlight"></span><span class="bar"></span>
    <label>Nombre</label>
  </div>
  <div class="group">
    <input type="email" name="email" value="<?php
	if (isset($_POST['email'])) {echo $_POST['email'];}?>"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <input type="submit" name="registro" value="Darse de Alta" class="button buttonBlue">
</form>