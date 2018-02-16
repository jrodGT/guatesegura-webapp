<?php

/*
 * Servicio JSon para listado de Denuncias
 */

// array for JSON response
$response = array();


if (isset($_GET['filtro']) ) {

	define('__ROOT__', dirname(dirname(__FILE__))); 
	require_once(__ROOT__.'/wsrv/db_connect.php'); 
	echo __ROOT__.'/JsonServicios/db_connect.php'
	$db = new DB_CONNECT();

	//Filtro para obtener Directorio-------------------------
	//0- Todos los registros 1..n : tipo entidad
	$filtro   = $_GET["filtro"];
	

	if($filtro==0) {
		$result = 
		mysql_query("
			SELECT 
				 A.nombre 
				,A.direccion 
				,A.informacion 
				,A.telefono 
				,A.tipo_entidad 
		   FROM entidad A 
		   ORDER by A.prioridad, A.orden,A.tipo_entidad") or die(mysql_error());
   }else{
		$result = 
		mysql_query("
			SELECT 
				 A.nombre 
				,A.direccion 
				,A.informacion 
				,A.telefono 
				,A.tipo_entidad 
		   FROM entidad A 
		   WHERE A.tipo_entidad=$filtro 
		   ORDER by A.prioridad, A.orden,A.tipo_entidad") or die(mysql_error());   
   }
   
   
	// check for empty result
	if (mysql_num_rows($result) > 0) {

			$response["registros"] = array();

			while ($row = mysql_fetch_array($result)) {
				// temp user array
				$registros = array();
				$registros["nombre"] = utf8_encode($row["nombre"]);
				$registros["direccion"] = utf8_encode($row["direccion"]);
				$registros["informacion"] = utf8_encode($row["informacion"]);
				$registros["telefono"] =  utf8_encode($row["telefono"]);
				$registros["tipo_entidad"] = $row["tipo_entidad"];

				// push single denuncias into final response array
				array_push($response["registros"], $registros);
			}
			// success
			$response["success"] = 1;
			// echoing JSON response
			echo json_encode($response);
		} else {
			// no data found
			$response["success"] = 0;
			$response["message"] = "No exste informacion";
			// echo no users JSON
			echo json_encode($response);
		}
	
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Error en parametros de Ingreso";
    // echoing JSON response
    echo json_encode($response);
}	

?>