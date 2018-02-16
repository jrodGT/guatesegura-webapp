<?php

/*
 * Servicio JSon para listado de Tipo de Delito
 */

// array for JSON response
$response = array();

// include db connect class


define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/JsonServicios/db_connect.php'); 


// connecting to db
$db = new DB_CONNECT();

// obtener todas los tipos de delito
$result = mysql_query("SELECT * FROM tipo_delito") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {

    $response["tipodelito"] = array();

    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $tipodelito = array();
        $tipodelito["tipo_Delito"] = $row["tipo_delito"];
        $tipodelito["nombre"] = $row["nombre"];
		$tipodelito["imagen"] = $row["imagen"];
		$tipodelito["estado"] = $row["estado"];

        // push single Tipo de delito into final response array
        array_push($response["tipodelito"], $tipodelito);
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
?>