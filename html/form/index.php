<?php 
	include "includes/plantillaformulario.php";
	escribeCabecera();
 ?>
<form action="formulario.php" method="post">
  <input type="submit" name="login" value="Inciar Sesion" class="button buttonBlue">
  <input type="submit" name="registro" value="Registrarse" class="button buttonBlue">
</form>
<?php 
	escribePie();
 ?>