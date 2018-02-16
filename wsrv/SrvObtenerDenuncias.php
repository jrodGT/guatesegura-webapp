<?php

/*
 * Servicio JSon para listado de Denuncias
 */

// array for JSON response
$response = array();

if (isset($_POST['pagina']) && isset($_POST['filtro']) 
    && isset($_POST['latitud'])  && isset($_POST['longitud']) ) {

	// Conexion a Base de Datos -------------------------------------
	define('__ROOT__', dirname(dirname(__FILE__))); 
	require_once(__ROOT__.'/JsonServicios/db_connect.php'); 
	$db = new DB_CONNECT();
	
	// Obteniendo pagina a retornar----------------------------------
	//Filtro 0- 5 KiloMetros   1-Todos  2-10 KiloMetros
	$pagina   = $_POST["pagina"];
	$filtro   = $_POST["filtro"];
	$latitud  = $_POST["latitud"];
	$longitud = $_POST["longitud"];

	$inicio_pagina = ($pagina-1) * 5;

	//Colocando Distancia
	$distancia = 0;
	if($filtro == 0 ){
		$distancia = 5.5;
	}
	else if ($filtro == 2){
		$distancia = 10.5;
	}
	


	// obtener todas las denucias
	if ($filtro == 1){
		$result = 
		mysql_query("SELECT 
			ifnull(I.url,'') as image_guatesegura 
			,A.denuncia 
			,DATE_FORMAT(CONVERT_TZ(A.fecha,'+0:00','-2:00'),'%d/%m/%Y %r') as fecha 
			,A.descripcion
			,A.tipo_delito 
			,A.medio 
			,B.nombre as nombre_delito 
			,A.latitud 
			,A.longitud 
			,0 as distancia
		   FROM denuncia A 
			join tipo_delito B on A.tipo_delito = B.tipo_delito 
			left join imagen I on A.denuncia=I.denuncia 
		   ORDER BY A.fecha DESC
		   LIMIT  $inicio_pagina,5") or die(mysql_error());
	}
	else if($filtro == 0  || $filtro == 2  ){
		$result = 
		mysql_query("SELECT 
			ifnull(I.url,'') as image_guatesegura 
			,A.denuncia 
			,DATE_FORMAT(A.fecha,'%d/%m/%Y %r') as fecha 
			,A.descripcion  
			,A.tipo_delito 
			,A.medio 
			,B.nombre as nombre_delito 
			,A.latitud 
			,A.longitud
			,(6371 * acos (
				  cos ( radians($latitud) )
				  * cos( radians( A.latitud ) )
				  * cos( radians( A.longitud ) - radians($longitud) )
				  + sin ( radians($latitud) )
				  * sin( radians( A.latitud ) )
				)
			  ) AS distancia			
		   FROM denuncia A 
			join tipo_delito B on A.tipo_delito = B.tipo_delito 
			left join imagen I on A.denuncia=I.denuncia 
			HAVING distancia < $distancia 
		   ORDER BY  distancia ASC
		   LIMIT  $inicio_pagina,5") or die(mysql_error());	
	}
	
	
	// check for empty result
	if (mysql_num_rows($result) > 0) {

		$response["denuncias"] = array();

		while ($row = mysql_fetch_array($result)) {
			// temp user array
			$denuncias = array();
			$denuncias["image_guatesegura"] = $row["image_guatesegura"];
			$denuncias["denuncia"] = $row["denuncia"];
			$denuncias["fecha"] = $row["fecha"];
			$denuncias["descripcion"] =  utf8_encode($row["descripcion"]);
			$denuncias["tipo_delito"] = $row["tipo_delito"];
			$denuncias["medio"] = $row["medio"];
			$denuncias["nombre_delito"] = utf8_encode($row["nombre_delito"]);
			$denuncias["latitud"] = $row["latitud"];
			$denuncias["longitud"] = $row["longitud"];
			$denuncias["distancia"] = $row["distancia"];
			

			// push single denuncias into final response array
			array_push($response["denuncias"], $denuncias);
		}
		// success
		$response["success"] = 1;

		// echoing JSON response
		echo json_encode($response);
	} else {
		// no products found
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