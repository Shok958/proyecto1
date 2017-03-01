<?php 
	
	class Carrito
	{	
		use Persistir;
		private $productos = [];
		private function __construct(){

		}

		public static function getCarrito(){

			if (isset($_SESSION['micarrito'])) {
			$carrito = $_SESSION['micarrito'];

			}elseif ($carrito = self::traerCookie("carrito")) {
				$_SESSION["micarrito"] = $carrito;
			} else{
				$carrito = new Carrito();
				$_SESSION['micarrito'] = $carrito;
			}
			$carrito->operaciones();
			return $carrito;
		}

		public function meter( iEnCarrito $producto){

			$this->productos[] = $producto;

		}

		public function quitar($indice){

			unset($this->productos[$indice]);

		}

		public function masUnidad($indice){

			$this->productos[$indice]->masUnidad();
			
		}

		public function menosUnidad($indice){
			
			$this->productos[$indice]->menosUnidad();
		}

		public function mostrar(){
			$total = 0;
			$totaliva = 0;
			echo '<div class ="carrito">';
			foreach ($this->productos as $key => $prod) {
				echo '<article class ="lineacarrito">';
				echo $prod->mostrar();
				echo '</article>';
				$enlaceMasUnidad = "?accion=masUnidad&indice=$key";
				$enlaceMenosUnidad = "?accion=menosUnidad&indice=$key";
				$enlaceEliminar = "?accion=eliminar&indice=$key";
				if ($prod->permiteUnidades()) {
					echo "<a href=\"$enlaceMenosUnidad\">-</a> / <a href=\"$enlaceMasUnidad\">+</a>";
				}
				echo "/ <a class = \"enlaceeliminar\" href=\"$enlaceEliminar\">Eliminar</a>";
				echo "</article>";
				$total += $prod->precio();
				$totaliva += $prod->precioIva();
			}
			echo '<div class ="totalcarrito">Total: '.$total.' ('.$totaliva.' IVA incluido)</div>';
			echo '</div>';
		}

		private function operaciones(){
			if (isset($_GET['accion'])) {
				if ($_GET['accion'] == "comprar") {
					$elem = unserialize($_GET["producto"]);
					$this->meter($elem);
				}
				if ($_GET['accion'] == "eliminar") {
					$this->quitar($_GET['indice']);
				}
				if ($_GET['accion'] == "menosUnidad") {
					$this->menosUnidad($_GET['indice']);
				}
				if ($_GET['accion'] == "masUnidad") {
					$this->masUnidad($_GET['indice']);
				}
			}
		}
 	}
 ?>