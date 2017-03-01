<?php 
	include('lib/DBPDO.php');
	/**
	* 
	*/
	class Usuario extends DBPDO
	{
		public $table = 'usuarios';

		public function insert($params){
			return parent::insert($this->validateParams($params));
		}
		
		private function validateParams(){
			//Hacemos la validacion
			return $params;
		}
	}
 ?>