<?php 
	
	$anio = 2000;

	if ($anio % 4 == 0) {
		if ($anio % 100 == 0) {
			echo "$anio es bisiesto";
		}else if ($anio % 400) {
			echo "$anio es bisiesto";
			}else{
				echo "$anio no es bisiesto";
				}
	}else{
		echo "$anio no es bisiesto";
		}

 ?>