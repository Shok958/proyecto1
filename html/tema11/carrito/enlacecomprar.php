<?php 
	trait EnlaceComprar
	{
		private function enlaceComprar(){
			return " <a href=\"?action=comprar&producto=".urlencode(serialize($this))."\" >Comprar</a>";
		}
	}
 ?>