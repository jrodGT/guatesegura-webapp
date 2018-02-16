<?php

/**
 * Servicio JSon para Ingreso de Denuncias
 *
 * @author      Obed Mazariegos, Keny Perez
 */

// array for JSON response
$response = array();

// Verificando Parametros de ingreso
if (isset($_POST['descripcion']) && isset($_POST['tipo_delito']) 
    && isset($_POST['latitud'])  && isset($_POST['longitud']) 
	&& isset($_POST['image_guatesegura'])  && isset($_POST['medio'])) {

	$image 		 = $_POST['image_guatesegura'];
    $descripcion = $_POST['descripcion'];
    $tipo_delito = $_POST['tipo_delito'];
    $latitud 	 = $_POST['latitud'];
	$longitud 	 = $_POST['longitud'];
	$medio	 	 = $_POST['medio'];
  
	  // include db connect class
	define('__ROOT__', dirname(dirname(__FILE__))); 
	require_once(__ROOT__.'/JsonServicios/db_connect.php'); 

    // connecting to db
    $db = new DB_CONNECT();

    // Insertando Denuncia
	$Sql="";
	$Sql = "INSERT INTO denuncia (titulo,fecha,descripcion,latitud,longitud,estado,tipo_delito,medio) values";
	$Sql = $Sql."('',now(),'$descripcion', CAST('$latitud' AS DECIMAL(10,6)) ,CAST('$longitud' AS DECIMAL(10,6)),'A',CAST('$tipo_delito' AS UNSIGNED),'$medio')";	
    $result = mysql_query($Sql);
	
	//Insertando en Imagen
	if($image != '') {
	 if( mysql_affected_rows() > 0 ) {
          $id = mysql_insert_id();
		  $Sql="";
		  $Sql = "insert into imagen (url,fecha,denuncia) values ('$image',now(),'$id')"; 
		  $result = mysql_query($Sql);		  
		}
	}
	
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Denuncia Ingresada.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Error: No pudo ingresarse la Denuncia";

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