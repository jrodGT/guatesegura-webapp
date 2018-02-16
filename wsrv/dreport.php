<?php 
$response = array();
if (isset($_POST["f"]) && isset($_POST["la"]) && isset($_POST["lo"])){
    $filtro = $_POST["f"];
    $latitud = $_POST["la"];
    $longitud = $_POST["lo"];

$url = 'http://www.guatesegura.com/JsonServicios/SrvObtenerDenuncias.php';
$data = array('pagina' => '1', 'filtro' => $filtro, 'latitud' => $latitud, 'longitud' => $longitud);
$options = array(
'http' => array(
'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
'method'  => 'POST',
'content' => http_build_query($data),
),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$response["success"] = 1;
$response["message"] = $result;
    // echoing JSON response
echo json_encode($response);
}else
{
    $response["success"] = 0;
    $response["message"] = "Error en parametros de Ingreso";
    // echoing JSON response
    echo json_encode($response);
}
?>