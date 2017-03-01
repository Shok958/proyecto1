<form action="<?= $_SERVER["PHP_SELF"]?>" method = "post">
	<p>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" 
			<?php  
				mostrarCampo("nombre");
			?>
		>
		<?php mostrarErroresCampo('nombre',$errores) ?>
	</p>
	<p>
		<label for="email">E-mail</label>
		<input type="email" name="email" 
			<?php  
				mostrarCampo("email");
			?>
		>
		<?php mostrarErroresCampo('email',$errores) ?>
	</p>
	<p>
		<label for="clave1">Password</label>
		<input type="password" name="clave1">
		<?php mostrarErroresCampo('clave1',$errores) ?>
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