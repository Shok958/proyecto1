<form action="<?= $_SERVER["PHP_SELF"]?>" method = "post">
	<p>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?= $_POST['nombre']?>">
	</p>
	<p>
		<label for="email">E-mail</label>
		<input type="email" name="email" value="<?= $_POST['email']?>">
	</p>
	<p>
		<label for="clave1">Password</label>
		<input type="password" name="clave1">
	</p>
	<p>
		<label for="clave2">Repetir Password</label>
		<input type="password" name="clave2">
	</p>
	<p>
		<label>
			<input type="submit" value="Enviar">
		</label>
		
	</p>
</form>