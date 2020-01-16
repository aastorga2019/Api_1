<?php
include_once "autos.php";

class ApiAutos{

	function getAll(){
		$vehi  = new vehiculo();
		$vehis = array();
		$vehis["id"] = array();
		$res = $vehi-> obtenerAutos();
		if($res->rowCount()){
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
				$ids = array("id" => $row["id"], "nombre" => $row["nombre"], "imagen" => $row["imagen"]);
				array_push($vehis["id"], $ids);
			}

			echo json_encode($vehis);
		}else{
			echo json_encode(array("mensaje" => "No hay elementos a mostrar"));
		}
	}
}

?>