<?php 

		function mostrarErrores($errores){
			echo '<ul class = "listaErrores">';
			foreach ($errores as $error) {
				echo "<li>$error</li>";
			}
			echo "</ul>";
		}
		function mostrarCampo($campo){
			if (isset($_POST[$campo])) {
					echo ' value= "'.$_POST[$campo].'"';
				}
		}
		function mostrarErroresCampo($campo, $errores){

			if (isset($errores[$campo])) {
				echo '<span class = "errorf">'.$errores[$campo].'</span>';
			}

		}

 ?>