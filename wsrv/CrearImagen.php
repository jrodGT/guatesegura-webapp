<?php

/**
 * Servicio JSon para Ingreso de Imagenes
 *
 * @author      Obed Mazariegos, Keny Perez
 */

// array for JSON response
$response = array();

// Verificando Parametros de ingreso
if (isset($_POST['url']) && isset($_POST['denuncia'])) {

    $url = $_POST['url'];
    $denuncia = $_POST['denuncia'];
      
	// include db connect class
	define('__ROOT__', dirname(dirname(__FILE__))); 
	require_once(__ROOT__.'/JsonServicios/db_connect.php'); 

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
	$Sql="";
	$Sql = "Insert into imagen (url,fecha,denuncia) values ";
	$Sql = $Sql."('$url',now(),'$denuncia)";	
    $result = mysql_query($Sql);

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Imagen Ingresada.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Error: No pudo ingresarse la imagen";

        // echoing JSON response
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