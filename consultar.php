<?php

include_once "db.php";

$sql = "select * from marcas";

try{
	$db = new db();
	$db = $db->conecta();
	$resultado = $db->query($sql);
	if ($resultado->rowCount() > 0){
		$clientes = $resultado->fetchAll(PDO::FETCH_OBJ);
		echo json_encode($clientes);
	}else {
		echo json_encode("No existen clientes en la BBDD");
	}

	$resultado = null;
	$db = null;

}catch(PDOException $e){
	echo "Error ...";
}


?>
