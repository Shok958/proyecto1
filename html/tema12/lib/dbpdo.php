<?php 
	class DBPDO
	{
		//Datos de la conexion
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '123';
		private $dbname = 'dbejemplopdo';

		//Contendra el error en caso de que haya
		public $errors = false;

		//la conexio con la bd
		public $db;

		//indica si estamos en desarrollo o no(produccion)
		public $modeDEV = true;

		//indoca si queremos una conexion persistente o no
		public $persistent = true;

		private function connection(){
			$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
			$options = array(PDO::ATTR_PERSISTENT => $this->persistent, 
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			try {
				return new PDO($dsn,$this->user, $this->pass, $options);
			} catch (PDOException $e) {
				$this->errors = $e->getMessage();
				if ($this->modeDEV) {
					print_r($this->errors);
				}
			}
		}

		public function __construct(){
			$this->db = $this->connection();
		}

		public function getConnection(){
			return $this->db;
		}

		public function setDBPassword($pass){
			$this->pass = $pass;
			$this->connection();
		}

		public function setDBHost($host){
			$this->host = $host;
			$this->connection();
		}

		public function setUser($user){
			$this->user = $user;
			$this->connection();
		}

		public function setDBName($dbname){
			$this->dbname = $dbname;
			$this->connection();
		}

		public function setDB($data){
			$this->dbname = $data['dbname'];
			$this->host = $data['host'];
			$this->user = $data['user'];
			$this->pass = $data['pass'];
			$this->connection();
		}

		public function all($limit = 10){
			$prepare = $this->db->prepare('SELECT * FROM '.$this->table.'LIMIT'.$limit);
			$prepare->execute();
			return $prepare->fetchAll(PDO::FETCH_ASSOC);
		}

		public function insert($params){
			if (! empty($params)) {
				//etraemos las claves del array y los separamos, por comas;
				$fields = '('.implode(',', array_keys($params)).')';
				//una vez extraidos los valores del array y los separamos por comas;
				$values = "('".implode("','", array_values($params))."')";

				$prepare = $this->db->prepare('INSERT INTO'.$this->table." ".$fields." VALUES".$values);

				$prepare->execute();

				return $this->db->lastInsertId();
			}else{
				throw new Exception("Los parametros estan vacios");
				
			}
		}

		public function update($params, $where){
			if (!empty($params)) {
				$fields = '';
				foreach ($params as $key => $value) {
					$fields .= $key.' = : '.$key.', ';
				}
				$fields = rtrim($fields, ',');
				$key = key($where);
				$value = $where[$key];
				$sql = "UPDATE this->table
						SET $fields
						WHERE $key = '$value'";
				$prepare = $this->db->prepare($sql);
				$prepare->execute($this->normalizePrepareArray($params));
				$this->setQuery($prepare);
			}else{
				throw new Exception("Los parametros estan vacios");
				
			}
		}

		public function delete($param){
			if (!empty($params)) {
				$key = key($params);
				$value = $param[$key];
				$sql = "DELETE FROM this->table
						WHERE $key = '$value'";
				$prepare = $this->db->prepare($sql);
				$prepare->execute($this->normalizePrepareArray($params));
				$this->setQuery($prepare);
			}else{
				throw new Exception("Los parametros estan vacios");
				
			}
		}
	}
 ?>