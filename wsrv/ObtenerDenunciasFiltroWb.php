<?php

/*
 * Servicio JSon para listado de Denuncias
 */

if(isset($_GET["filtro"]))
{

	// array for JSON response
	$response = array();
	
	// include db connect class
	
	$filtro=$_GET['filtro'];
	
	define('__ROOT__', dirname(dirname(__FILE__))); 
	require_once('../config/db_connect.php'); 
	
	// connecting to db
	$db = new DB_CONNECT();
	
	// obtener todas las denucias
	$result = mysql_query("SELECT * FROM denuncia where descripcion like '%$filtro%' order by fecha desc") or die(mysql_error());
	
	// check for empty result
	if (mysql_num_rows($result) > 0) {
	
		$response["markers"] = array();
	
		while ($row = mysql_fetch_array($result)) {
			// temp user array
			$markers = array();
			$markers["denuncia"] = $row["denuncia"];
			$markers["title"] = $row["descripcion"];
			$markers["content"] = $row["descripcion"];
			$markers["date"] = $row["fecha"];
			$markers["latitude"] = $row["latitud"];
			$markers["longitude"] = $row["longitud"];
			$markers["type"] = $row["tipo_delito"];
	
			// push single denuncias into final response array
			array_push($response["markers"], $markers);
		}
		// success
		$response["success"] = 1;
	
		// echoing JSON response
		echo json_encode($response);
	} else {
		// no products found
		$response["success"] = 0;
		$response["message"] = "No existe informacion";	
		// echo no users JSON
		echo json_encode($response);
	}
}
?>