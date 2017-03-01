<?php 
	$cantidad = 1234.56;

	$centimos = $cantidad*100;

	$num500 = $centimos/50000;
	$centimos = $centimos%50000;
	//y asi con todas las monedas -floor redondeo a la baja-
 ?>