<form action="<?= $_SERVER['PHP_SELF']?>" method ="post">
	<input type="email" placeholder="Email" name = "email" value="<?php
		if (isset($_POST['email'])) {echo $_POST['email'];}?>">
	<input type="password" placeholder="Password" name="password">
	<input type="submit" name="login" value="Inicia Sesion" class="btn waves-effect waves-light blue">
 </form>
 <br><br>
 <form action="registro.php">
	<input type="submit" name="register" value="Registrate" class="btn waves-effect waves-light blue">
</form>