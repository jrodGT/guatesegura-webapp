<?php

/*
 * Servicio JSon para listado de imagenes
 */

// array for JSON response
$response = array();

// include db connect class


define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/JsonServicios/db_connect.php'); 


// connecting to db
$db = new DB_CONNECT();

// obtener todas las denucias
$result = mysql_query("SELECT * FROM imagen order by fecha desc") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {

    $response["imagenes"] = array();

    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $imagenes = array();
        $imagenes["imagen"] = $row["imagen"];
        $imagenes["url"] = $row["url"];
		$imagenes["fecha"] = $row["fecha"];
		$imagenes["denuncia"] = $row["denuncia"];
		
        // push single imagenes into final response array
        array_push($response["imagenes"], $imagenes);
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