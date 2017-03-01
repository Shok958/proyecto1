<?php 
	class Persona
	{
		private $nombre;
		private $fechaNacimiento;
		private $trabajo;

		public function __construct($nombre,$fechaNacimiento,$trabajo){
			$this->nombre = $nombre;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->trabajo = $trabajo;
		}

		public function presentate(){
			echo "Hola soy ".$this->nombre." y naci el ".$this->fechaNacimiento." y trabajo como ".$this->trabajo;
		}
	}
 ?>