<?php

function conectar(){

	$servidor= "localhost";
	$db= "vehiculos";
	$usuario= "root";
	$clave= "";

	$con = mysqli_connect($servidor, $usuario, $clave, $db) or die("NO SE PUDO CONECTAR, LO SIENTO");
	mysql_select_db($db, $con);

	return $con;
}

?>
