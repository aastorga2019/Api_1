<?php

	class db{	
		private $host = "127.0.0.1";
		private $user = "root";
		private $pass = "";
		private $db   = "vehiculos";

		//conexion
		public function conecta(){
			$mysqlConnect = "mysql:host=$this->host;dbname=$this->db";
			$dbconec = new PDO($mysqlConnect, $this->user, $this->pass);
			$dbconec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbconec;
		}
	}

?>


