<?php
	class Conexion{
		private $host = "localhost";
		private $dbname = "tienda";
		private $user = "root";
		private $password = "123456";
		private $conexion = null;

		public function getConexion(){
			try{
				$this->conexion = new PDO(
									"mysql:host=$this->host; dbname=$this->dbname",
									$this->user,
									$this->password
									);
			return $this->conexion;
			}catch(Exception $e){
				echo $e->getMessage();
			}finally{
				$this->conexion = null;
			}
		}
	}