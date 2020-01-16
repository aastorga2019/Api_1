<?php

include_once "conexion.php";

class vehiculo{

	function obtenerAutos(){
		$query = $this->conectar()->query("select * from autos");
		return $query;
	}

}

?>