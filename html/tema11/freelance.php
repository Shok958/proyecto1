<?php 
	class Freelance
	{
		private $nombre;
		protected $ocupado;
		private $precioHora = 10;
		private $comienzoTrabajo;
		public static $juegoCaracteres= "UTF8";

		public function __construct($nombre)
		{
			$this->nombre = $nombre;
		}

		public function desarrollar(){
			echo "<br>Soy ".$this->nombre." y comienzo a trabjar <br>";
			echo self::$juegoCaracteres;
			$this->ocupado = true;
			$this->comienzoTrabajo = time();
		}

		public function parar(){
			$this->ocupado = false;
			$this->horasTrabajadas = ceil((time()-$this->comienzoTrabajo)/3600);
			echo "Termine de trabajar. Facturo ".($horasTrabajadas * $this->precioHora);
		}

		public static function diasTrabajo(){
			if ($invierno) {
				return $array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
			}
			return ["Lunes","Martes","Miercoles","Jueves","Viernes"];
		}
	}
 ?>