<?php 
// ------------------------------------------------------------------------
// *** GRABA ESTE FICHERO CAMBIANDO LA EXTENSION .txt POR .PHP  y LISTO
// ------------------------------------------------------------------------
//
// mapas_marker.php: CALCULO/POSICIONAMIENTO DE UN MARCADOR EN UN MAPA DE GOOGLE
// USA LA V3 DEL API DE GOOGLE 
//
// EL MARCADOR SE PUEDE CAMBIAR DE POSICION DE ALGUNA DE ESTAS FORMAS
//
// 	- Arrastrando el marcador que hay en el mapa
//	- Haciendo click en cualquier parte del mapa
//	- Introduciendo LON/LAT y pulsando al bot¢n IR/GO 
//	- Introduciendo una direcci¢n y pulsando el bot¢n IR/GO
//  
// EL BOTON PROCESAR LLAMA A LA RUTINA mapas_marker_procesa
//
// PARAMETROS DE ENTRADA (E_GET)/
//
// lon:  	LONGITUD DONDE POSICIONAR EL MARCADOR INICALMENTE
// lat:   	LATITUD DONDE POSICIONAR EL MARCADOR INICALMENTE
// zoom:      	ZOOM ( Por defecto 9)
// tipo:        TIPO de mapa: ROADMAP, SATELLITE, HYBRID o TERRAIN  (Defecto HYBRID)
// dir: 	DIRECCION DEL MARCADOR INICiAL CON URL ENCODE(si esta dir entonces lat/ no se tiene en cuenta)
//
// SALIDA ($_POST) AL PULSAR EL BOTON  PROCESA se llama a mapas_maracador_procesa
//  
// POR DEFECTO EL MARCADOR SE POSICIONA EN QUINTO (longitud="-0.49647219999997105", latitud= "41.4235091", Zoom= 17)
//
// AUTOR:      MPS MULT Modif Sept. 2012
// 	   	 
// ------------------------------------------------------------------------
//14.613347, -90.534940
// INICIALIZO LAS VARIABLES 
//$latitud= "41.4235091";
//$longitud="-0.49647219999997105";

$longitud="-90.5131352287292";
$latitud="14.635644137199977";
$zoom= "17";
$tipo_mapa = "ROADMAP";
$direccion = "";

if (isset($_GET["direccion"])) $direccion=  urldecode ($_GET["direccion"]);
else $direccion="";

// LONGITUD Y LATITUD SI ESTAN COMO PARAMETROS LOS COJO
if (isset($_GET["dir"])) $direccion = $_GET["dir"];
if (strlen ($direccion) <= 8) $direccion =""; // SI LA DIRECCION ES MENOR QUE 8 NO LA PROCESO

// LONGITUD Y LATITUD SI ESTAN COMO PARAMETROS LOS COJO
if (isset($_GET["lon"])) $longitud= $_GET["lon"];
if (isset($_GET["lat"])) $latitud= $_GET["lat"];

// ZOOM ENTRE 0 y 19
if (isset($_GET["zoom"])) $zoom= $_GET["zoom"];
if (($zoom<=0) || ($zoom>=20)){ $zoom= "17";}


// TIPO DE MAPA
if (isset($_GET["tipo"])) $tipo_mapa= strtoupper($_GET["tipo"]);

// COMPRUEBO QUE EL TIPO ES UNO DE LOS QUE ACEPTA GOOGLE
if ($tipo_mapa == "SATELLITE") $error=0;
else
  if ($tipo_mapa == "ROADMAP") $error=0;
  else 	
    if ($tipo_mapa == "TERRAIN")$error=0;
    else $tipo_mapa = "HYBRID";


define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/JsonServicios/db_connect.php'); 

// connecting to db
$db = new DB_CONNECT();

//var_dump($_POST);


if (isset($_POST['descripcion']) && isset($_POST['tipo_delito']) && isset($_POST['latitud']) && isset($_POST['longitud'])) {

    $descripcion_ins = $_POST['descripcion'];
    $tipo_delito_ins = $_POST['tipo_delito'];
    $latitud_ins =  $_POST['latitud'];
	$longitud_ins =  $_POST['longitud'];
	
		$Sql="";
	$Sql = "Insert into denuncia (fecha,descripcion,latitud,longitud,estado,tipo_delito) values";
	$Sql = $Sql."(now(),'$descripcion_ins', CAST('$latitud_ins' AS DECIMAL(10,6)) ,CAST('$longitud_ins' AS DECIMAL(10,6)),'A',CAST('$tipo_delito_ins' AS UNSIGNED))";	
    $result = mysql_query($Sql);

    // check if row inserted or not
    if ($result) {
		echo "Datos guardados correctamente";
	}else{
		echo "Ocurrio un error al guardar los datos";
	}
}    


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
</script>
<script type="text/javascript">
		// VARIABLES GLOBALES JAVASCRIPT
		var geocoder;
		var marker;
		var latLng;
		var latLng2;
		var map;


		//var map;
        var latitud;
        var longitud;
        var precision;
        
        $(document).ready(function() {
            localizame();            
        });
        
        function localizame() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(coordenadas, errores);
            }else{
                alert('Oops! Tu navegador no soporta geolocalización. Bájate Chrome, que es gratis!');
            }
        }
        
        function coordenadas(position) {
            latitud = position.coords.latitude;
            longitud = position.coords.longitude;
            precision = position.coords.accuracy;  
            //cargarMapa();
			initialize();
            //alert("Datos con una precisión de " + precision/1000 + " km, " + precision + " metros");
        }
        
        function errores(err) {
            if (err.code == 0) {
              alert("Oops! Algo ha salido mal");
            }
            if (err.code == 1) {
              alert("Oops! No has aceptado compartir tu posición");
            }
            if (err.code == 2) {
              alert("Oops! No se puede obtener la posición actual");
            }
            if (err.code == 3) {
              alert("Oops! Hemos superado el tiempo de espera");
            }
        }		

// INICiALIZACION DE MAPA
function initialize() {
  geocoder = new google.maps.Geocoder();	
 // latLng = new google.maps.LatLng(<?php echo $latitud;?> ,<?php echo $longitud;?>);
  latLng = new google.maps.LatLng(latitud,longitud);
  map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom:<?php echo $zoom;?>,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.<?php echo $tipo_mapa;?>
  });


// CREACION DEL MARCADOR  
    marker = new google.maps.Marker({
    position: latLng,
    title: 'Arrastra el marcador si quieres moverlo',
    map: map,
    draggable: true
  });
 
 

 
// Escucho el CLICK sobre el mama y si se produce actualizo la posicion del marcador 
     google.maps.event.addListener(map, 'click', function(event) {
     updateMarker(event.latLng);
   });
  
  // Inicializo los datos del marcador
  //    updateMarkerPosition(latLng);
     
      geocodePosition(latLng);
 
  // Permito los eventos drag/drop sobre el marcador
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Arrastrando...');
  });
 
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Arrastrando...');
    updateMarkerPosition(marker.getPosition());
  });
 
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Arrastre finalizado');
    geocodePosition(marker.getPosition());
  });
  

 
}


// Permito la gesti¢n de los eventos DOM
google.maps.event.addDomListener(window, 'load', initialize);

// ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('No puedo encontrar esta direccion.');
    }
  });
}

// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
function codeLatLon() { 
      str= document.form_mapa.longitud.value+" , "+document.form_mapa.latitud.value;
      latLng2 = new google.maps.LatLng(document.form_mapa.latitud.value ,document.form_mapa.longitud.value);
      marker.setPosition(latLng2);
      map.setCenter(latLng2);
      geocodePosition (latLng2);
      // document.form_mapa.direccion.value = str+" OK";
}

// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress() {
        var address = document.form_mapa.direccion.value;
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPosition(results[0].geometry.location);
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
           } else {
            alert('ERROR : ' + status);
          }
        });
      }

// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress2 (address) {
          
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPosition(results[0].geometry.location);
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
             document.form_mapa.direccion.value = address;
           } else {
            alert('ERROR : ' + status);
          }
        });
      }

function updateMarkerStatus(str) {
  document.form_mapa.direccion.value = str;
}

// RECUPERO LOS DATOS LON LAT Y DIRECCION Y LOS PONGO EN EL FORMULARIO
function updateMarkerPosition (latLng) {
  document.form_mapa.longitud.value =latLng.lng();
  document.form_mapa.latitud.value = latLng.lat();
}

function updateMarkerAddress(str) {
  document.form_mapa.direccion.value = str;
}

// ACTUALIZO LA POSICION DEL MARCADOR
function updateMarker(location) {
        marker.setPosition(location);
        updateMarkerPosition(location);
        geocodePosition(location);
      }

</script>

<h1>Formulario de Ingreso de Denuncia</h1>

	<style>
	
	div label{
		float: left;
		width: 25%;		
	}
	input {
		border: solid 4px black;
	}
	textarea
	{
		border: solid 4px black;
	}
	.error{
		border: solid 4px red;
	}
	select{
		border: solid 4px black;
	}
	</style>

</head>
<body  <?php  if ($direccion != "") { ?> onload=" codeAddress2('<?php  echo $direccion; ?>')" <?php  } ?> >
 
 

<style type="text/css">
  html { height: 100% }
  body { height: 50%; margin: 10px; padding: 0px }
  #mapCanvas { height: 100%; width: 60% }
</style> 


<!--<div id="formulario">
  <center>-->
  
  <!--<p style="border: 1px solid #CCC;background-color: #EEE;color: #999; width:450px; font-family: verdana; font-size:12px"><a href="http://www.telegolf.org"><font color="#006600">
    Powered by www.teleGOLF.org
  </font></a></p>-->
  
  <form name="form_mapa" method="POST" action="IngresoDenunciaWeb.php">
  
	<div>
		<label>Descripcion</label>
		<textarea rows="5" cols="50" name="descripcion">
		</textarea>
	</div>
	<div>
	<label>Tipo de Delito</label>
		<select name="tipo_delito">
		<?php    
			$result = mysql_query("SELECT * FROM tipo_delito") or die(mysql_error());// check for empty result
			if (mysql_num_rows($result) > 0) {
				while ($row = mysql_fetch_array($result)) {
		?>  
			<option value ="<?php echo $row["tipo_delito"]; ?>"><?php echo $row["nombre"];?></option>		
		<?php
				}
			}
		?>
		</select>			
	</div>
	<div>
		<label>Latitud</label>
		<input type="text" name="latitud" value="<?php echo $latitud;?>" > <!--style="width: 100px;font-size: 10px;font-family: verdana;font-weight: bold;" />-->
	</div>
	<div>
		<label>Longitud</label>
		<input type="text" name="longitud" value="<?php echo $longitud;?>" > <!-- style="width: 100px;font-size: 10px;font-family: verdana;font-weight: bold;" />-->
	</div>
	<!--<div>
		<label>Latitud</label>
		<input type="text" name="latitud">
	</div>
	<div>
	<label>Longitud</label>
		<input type="text" name="longitud">
	</div>-->
	
	<div>
		<input type="submit">
	</div>
	
  <!--
       <table>
        <tr>
        <td><p style="font-size: 10px;font-family: verdana;font-weight: bold;">
  	   Dir:&nbsp;<input type="text" name="direccion" id="direccion" value="<?php echo $direccion;?>" style="width: 250px;font-size: 10px;font-family: verdana;font-weight: bold;" />
  	   &nbsp;&nbsp;<input type="button" value="Geo->Dir" onclick="codeAddress()">
  	</p>
  	</td>
	<td><p style="font-size: 10px;font-family: verdana;font-weight: bold;">
	    &nbsp;&nbsp;||&nbsp;&nbsp;Lat:&nbsp;	    
	</p>
	</td>
	<td> <p style="font-size: 10px;font-family: verdana;font-weight: bold;">
	   Lon:&nbsp; 	
	   &nbsp;&nbsp;<input type="button" value="Geo->LatLon" onclick="codeLatLon()"> 
	</p>
	</td>
	<td>	   
	  &nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="Procesar" onclick = "this.form.action = 'mapas_marcador_procesa.php'" value="Procesar" />	   
	</td>	
	</tr>
     </table> -->
	 
     </form>
	 <div id="mapCanvas"></div>
	 
   <!--</center>       
</div> -->
 


</body>
</html>