<?php 
	class Enlace extends Etiqueta
	{
		public $href;
		public $texto;

		public function __construct($texto,$href){
			/*$this->texto = $texto;
			$this->href = $href;*/
			parent::__construct("a",$texto,"href=\"$href\"");
		}

		/*public function mostrar(){
			return "<a href=".$this->href.">".$this->texto."</a>";
		}*/
	}

 ?>