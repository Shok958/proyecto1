<form action=<?= $_SERVER["PHP_SELF"]?> method= "post">
	<h3>Introduce tu horario de citas</h3>
	Fecha:<input type="text" name="cita" value="" placeholder="dd/mm/aaaa">
	Nombre:<input type="text" name="nombre" value="" placeholder="tu nombre">
	<input type="submit" value="Agregar cita">
</form>
