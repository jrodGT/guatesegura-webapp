<?php
header('Content-type: application/json; charset=UTF-8');
/*
 * Servicio JSon para listado de Denuncias
 */

// array for JSON response
$response = array();

// include db connect class


define('__ROOT__', dirname(dirname(__FILE__))); 
require_once('./db_connect.php'); 

// connecting to db
$db = new DB_CONNECT();

// obtener todas las denucias
if (isset($_GET['filtro']) && isset($_GET['latitud'])  && isset($_GET['longitud']) ) 
{
	// Obteniendo pagina a retornar----------------------------------	
	$filtro   = $_GET["filtro"];
	$latitud  = $_GET["latitud"];
	$longitud = $_GET["longitud"];	
	
	$distancia = 0;
	if($filtro == 0){
		$distancia = 5;
	}
	else if ($filtro == 2){
		$distancia = 10;
	}
	// obtener todas las denucias
	if ($filtro == 1){
		$result = 
		mysql_query("
		SELECT denuncia
		,fecha
		,descripcion
		,latitud
		,longitud
		,imagen
		,tipo_delito
		,nombre
		,medio
		,CASE WHEN hora=0 and minutos<=10 THEN 'un momento'
		WHEN hora=0 AND minutos>10 THEN CONCAT(CAST(minutos AS CHAR),' minutos')
		WHEN hora>0 AND hora<=1 THEN CONCAT(CAST(hora AS CHAR),' hora')
		WHEN hora>1 AND hora<24 THEN CONCAT(CAST(hora AS CHAR),' horas')
		WHEN dias=1 THEN CONCAT(CAST(dias AS CHAR),' dia')
		WHEN dias>1 THEN CONCAT(CAST(dias AS CHAR),' dias')
		END as tiempo		
		FROM
			(SELECT 
			 A.denuncia 
			,A.titulo
			,DATE_FORMAT(CONVERT_TZ(A.fecha,'+0:00','-2:00'),'%d/%m/%Y %r') as fecha
			,HOUR(timediff(now(), A.fecha)) as hora
			,MINUTE(timediff(now(), A.fecha)) as minutos
			,DATEDIFF(now(), A.fecha) as dias
			,A.tipo_delito
			,A.descripcion  
			,A.latitud 
			,A.longitud
			,A.estado
			,T.nombre
			,ifnull(I.url,'no_imagen.png') as imagen
			,A.medio
			,0 as distancia
		   FROM denuncia A 
			join tipo_delito T on A.tipo_delito = T.tipo_delito 
			left join imagen I on A.denuncia=I.denuncia 
			WHERE A.estado = 'A'
			ORDER BY A.fecha DESC) V
		   LIMIT 5") or die(mysql_error());
	}
	else if($filtro == 0 || $filtro == 2 ){
		$result = 
		mysql_query("
		SELECT denuncia
		,fecha
		,descripcion
		,latitud
		,longitud
		,imagen
		,tipo_delito
		,nombre
		,medio
		,CASE WHEN hora=0 and minutos<=10 THEN 'un momento'
		WHEN hora=0 AND minutos>10 THEN CONCAT(CAST(minutos AS CHAR),' minutos')
		WHEN hora>0 AND hora<=1 THEN CONCAT(CAST(hora AS CHAR),' hora')
		WHEN hora>1 AND hora<24 THEN CONCAT(CAST(hora AS CHAR),' horas')
		WHEN dias=1 THEN CONCAT(CAST(dias AS CHAR),' dia')
		WHEN dias>1 THEN CONCAT(CAST(dias AS CHAR),' dias')
		END as tiempo		
		FROM
			(SELECT 			 
			 A.denuncia 
			,A.titulo
			,DATE_FORMAT(A.fecha,'%d/%m/%Y %r') as fecha 
			,HOUR(timediff(now(), A.fecha)) as hora
			,MINUTE(timediff(now(), A.fecha)) as minutos
			,DATEDIFF(now(), A.fecha) as dias
			,A.tipo_delito
			,A.descripcion  
			,A.latitud 
			,A.longitud
			,A.estado
			,T.nombre
			,ifnull(I.url,'no_imagen.png') as imagen
			,A.medio			
			,(6371 * acos (
				  cos ( radians($latitud) )
				  * cos( radians( A.latitud ) )
				  * cos( radians( A.longitud ) - radians($longitud) )
				  + sin ( radians($latitud) )
				  * sin( radians( A.latitud ) )
				)
			  ) AS distancia			
		   FROM denuncia A 
			join tipo_delito T on A.tipo_delito = T.tipo_delito 
			left join imagen I on A.denuncia=I.denuncia 
			WHERE A.estado = 'A'
			HAVING distancia < $distancia
			ORDER BY  distancia ASC) V
			LIMIT 5") or die(mysql_error());	
	}
	// check for empty result
	if (mysql_num_rows($result) > 0) {

		$response["markers"] = array();

		while ($row = mysql_fetch_array($result)) {
			// temp user array
			$markers = array();
			$markers["denuncia"] = $row["denuncia"];
			$markers["title"] = utf8_encode($row["descripcion"]);
			$markers["content"] = utf8_encode($row["descripcion"]);
			$markers["date"] = $row["fecha"];
			$markers["latitude"] = $row["latitud"];
			$markers["longitude"] = $row["longitud"];
			$markers["type"] = $row["tipo_delito"];
			$markers["nombre_delito"] = utf8_encode($row["nombre"]);	
                $markers["url"] =  $row["imagen"];
                $markers["medio"] = $row["medio"]; 
                $markers["tiempo"] = $row["tiempo"]; 
			// push single denuncias into final response array
			array_push($response["markers"], $markers);
	}
    // success
    $response["success"] = 1;

    // echoing JSON response
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
	} else {
		// no products found
		$response["success"] = 0;
		$response["message"] = "No existe informacion";

		// echo no users JSON
		echo json_encode($response,JSON_UNESCAPED_UNICODE);
}
}else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Error en parametros de Ingreso";

    // echoing JSON response
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}
?>