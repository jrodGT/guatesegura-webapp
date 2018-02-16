<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>GuateSegura
    </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <link rel="icon"
          type="image/png"
          href="assets/img/logo.ico">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        weight: 100%;
        height: 500px;
      }
      .glyphicon-center {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
      }
      .scrollable-menu {
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
      }
      .btn-file {
        position: relative;
        overflow: hidden;
      }
      .modal
      {
        position: fixed;
        z-index: 999;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        //background-color: Black;
        filter: alpha(opacity=60);
        opacity: 0.6;
        -moz-opacity: 0.8;
      }
      .center
      {
        z-index: 1000;
        margin: 300px auto;
        padding: 10px;
        width: 130px;
        /*background-color: White;
        border-radius: 10px;
        filter: alpha(opacity=100);
        opacity: 1;
        -moz-opacity: 1;*/
      }
      .center img
      {
        height: 128px;
        width: 128px;
      }
      .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
      }
      .dropdown-toggle, .dropdown-menu {
        width: 300px }
      .btn-group img {
        margin-right: 10px }
      .dropdown-toggle {
        padding-right: 50px }
      .dropdown-toggle .glyphicon {
        margin-left: 20px;
        margin-right: -40px }
      .dropdown-menu>li>a:hover {
        background: #f1f9fd }
      /* $search-blue */
      .dropdown-header {
        background: #ccc;
        font-size: 14px;
        font-weight: 700;
        padding-top: 5px;
        padding-bottom: 5px;
        margin-top: 10px;
        margin-bottom: 5px }
    </style>
    <script src="assets/js/chart-master/Chart.js">
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body>
    <section id="container">
      <!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="">
          </div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo">
          <b>GuateSegura
          </b>
        </a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        </div>
      </header>
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
              <a href="index.php">
                <img src="assets/img/logo.png" class="img-circle" width="80">
              </a>
            </p>
            <h5 class="centered">GuateSegura
            </h5>
            <li class="mt">
              <a href="reportes.php">
                <i class="fa fa-file-text-o">
                </i>
                <span>Reportes
                </span>
              </a>
            </li>
            <li class="mt">
              <a class="active" href="denunciar.php">
                <i class="fa fa-exclamation-circle">
                </i>
                <span>Denunciar / Reportar
                </span>
              </a>
            </li>            
            <li class="mt">
              <a href="mapa.php">
                <i class="fa fa-map-marker">
                </i>
                <span>Mapa
                </span>
              </a>
            </li>
            <li class="mt">
              <a href="telefonos.php">
                <i class="fa fa-ambulance">
                </i>
                <span>Tel&eacute;fonos de emergencia
                </span>
              </a>
            </li>
            <li class="mt">
              <a href="configuracion.php">
                <i class="fa fa-cogs">
                </i>
                <span>Configuraci&oacute;n
                </span>
              </a>
            </li>
            <li class="mt">
              <a href="about.php">
                <i class="fa fa-info-circle">
                </i>
                <span>Acerca de GuateSegura
                </span>
              </a>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <!--<div class="row">
<div class="col-lg-12">
<a href="#" class="logo"><b>Denunciar</b></a>
</div>
</div>-->
          <?php 
error_reporting(E_ERROR | E_PARSE);
if(isset($_GET['action'])=='denunciarahora') {
//obtener los hiddens con las coordenadas y denunciar.
//llenar resultadoDenuncia con respuesta de la denuncia
//subir imagen de delito.
$urlUploadImage = 'http://www.guatesegura.com/JsonServicios/SrvCargarImagen.php';
//     define('MULTIPART_BOUNDARY', '--------------------------'.microtime(true));
//     $header = 'Content-Type: multipart/form-data; boundary='.MULTIPART_BOUNDARY;
//     define('FORM_FIELD', 'uploaded_file');
//     $filename = $_FILES['image_guatesegura']['tmp_name'];
//     $file_contents = file_get_contents($filename);    
//     $content =  "--".MULTIPART_BOUNDARY."\r\n".
//     "Content-Disposition: form-data; name=\"".FORM_FIELD."\"; filename=\"".basename($filename)."\"\r\n".
//     "Content-Type: ". $_FILES['image_guatesegura']['type'] . "\r\n\r\n".
//     $file_contents."\r\n";
// // add some POST fields to the request too: $_POST['foo'] = 'bar'
//     $content .= "--".MULTIPART_BOUNDARY."\r\n".
//     "Content-Disposition: form-data; name=\"image_guatesegura\"\r\n\r\n".
//     "bar\r\n";
// // signal end of request (note the trailing "--")
//     $content .= "--".MULTIPART_BOUNDARY."--\r\n";
//     $context = stream_context_create(array(
//       'http' => array(
//             'method' => 'POST',
//             'header' => $header,
//             'content' => $content,
//       )
//     ));
//     $resultadoImagen = file_get_contents($urlUploadImage, false, $context);
$target_dir = "imagesDenuncias/";
$target_file = $target_dir . basename($_FILES["image_guatesegura"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["image_guatesegura"]["tmp_name"]);
if($check !== false) {
$uploadOk = 1;
} else {
$uploadOk = 0;
}
}
if($uploadOk == 1){
if (move_uploaded_file($_FILES["image_guatesegura"]["tmp_name"], $target_file)) {
// $ch = curl_init($urlUploadImage);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0");
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, array(
//   'image_guatesegura' => file_get_contents($target_file),//'@/imagesDenuncias/'.$_FILES['image_guatesegura']['name'],
//   ));
// $resultadoImagen = curl_exec($ch);
define('MULTIPART_BOUNDARY', '--------------------------'.microtime(true));
$header = 'Content-Type: multipart/form-data; boundary='.MULTIPART_BOUNDARY;
define('FORM_FIELD', 'uploaded_file');
$filename = $_FILES['image_guatesegura']['tmp_name'];
$file_get_contents = file_get_contents($filename);    
$content =  "--".MULTIPART_BOUNDARY."\r\n".
"Content-Disposition: form-data; name=\"".FORM_FIELD."\"; filename=\"".basename($filename)."\"\r\n".
"Content-Type: ". $_FILES['image_guatesegura']['type'] . "\r\n\r\n".
$file_contents="";
$file_contents."\r\n";
// add some POST fields to the request too: $_POST['foo'] = 'bar'
$content .= "--".MULTIPART_BOUNDARY."\r\n".
"Content-Disposition: form-data; name=\"image_guatesegura\"\r\n\r\n".
"bar\r\n";
// signal end of request (note the trailing "--")
$content ="";
$content .= "--".MULTIPART_BOUNDARY."--\r\n";
$context = stream_context_create(array(
'http' => array(
'method' => 'POST',
'header' => $header,
'content' => $content,
)
));
//$resultadoImagen = file_get_contents($urlUploadImage, false, $context);
//borramos la imagen del ftp y la subimos nuevamente, pero como archivo correcto.
$ftp_server = "gistecpro.com";
$ftp_conn = ftp_connect($ftp_server,21) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, "guatesegura", "5YW<!<jft*;3HS&bJ+=<");
$file = $ftp_conn;
ftp_pasv($ftp_conn, true);
//if(ftp_delete($ftp_conn, $resultadoImagen)){
// upload file $_FILES["image_guatesegura"]["tmp_name"]
$archivo_prueba = $_FILES["image_guatesegura"]["name"];
$archivo_mover_nombre=pathinfo($_FILES["image_guatesegura"]["name"],PATHINFO_FILENAME);
$archivo_mover_ext=pathinfo($_FILES["image_guatesegura"]["name"],PATHINFO_EXTENSION);
$info_date = getdate();
if (ftp_put($ftp_conn, $archivo_mover_nombre.$info_date['year'].$info_date['mday'].$info_date['mon']."_".$info_date['minutes'].$info_date['seconds'].".".$archivo_mover_ext, "imagesDenuncias/". $_FILES["image_guatesegura"]["name"], FTP_BINARY))
{
//echo "Successfully uploaded $file.";
//crear delito
ftp_put($ftp_conn, "thumb/". $archivo_mover_nombre.$info_date['year'].$info_date['mday'].$info_date['mon']."_".$info_date['minutes'].$info_date['seconds'].".".$archivo_mover_ext, "imagesDenuncias/". $_FILES["image_guatesegura"]["name"], FTP_BINARY);
$url = 'http://www.guatesegura.com/JsonServicios/SrvCrearDenuncia.php';
$data = array('descripcion' => htmlspecialchars($_POST['descripcion']), 'tipo_delito' => $_POST['tipodelito'], 'latitud' => $_POST['latitud'], 'longitud' => $_POST['longitud'], 'image_guatesegura' => $archivo_mover_nombre.$info_date['year'].$info_date['mday'].$info_date['mon']."_".$info_date['minutes'].$info_date['seconds'].".".$archivo_mover_ext, 'medio' => 'GuateSegura WebApp');
$options = array(
'http' => array(
'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
'method'  => 'POST',
'content' => http_build_query($data),
),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$jsonDecodedArr = json_decode($result, true);
$ResultadoDenuncia = $jsonDecodedArr; 
//"¡Tu denuncia se ha realizado correctamente!";
echo '<div class="row">
<div class="steps pn">                  
<input style="font-size:1.5em;" type="submit" value="' . $archivo_prueba . '" id="resultadoBtn">
<a href="denunciar.php"><label for="op1">Realizar otra denuncia</label></a>
<a href="reportes.php"><label for="op2">Ver reportes recientes</label></a>
<a href="about.php"><label for="op3">Acerca de GuateSegura</label></a>                  
</div>
</div>';
}
else
{
echo "Error uploading $file.";
}
//}else{
//echo "Error eliminando archivo";
//}
// close connection
ftp_close($ftp_conn);
}else{
$resultadoImagen = 'No se ha subido la imagen';
}  
}else{
$resultadoImagen = 'fake file';
}
//-----------------------------------------------------------------------------------------------------------------------------------------------
//correcto
//  echo '<h1>' . $resultadoImagen . '</h1>';
//crear delito
// $url = 'http://www.guatesegura.com/JsonServicios/SrvCrearDenuncia.php';
//             $data = array('descripcion' => htmlspecialchars($_POST['descripcion']), 'tipo_delito' => '9', 'latitud' => $_POST['latitud'], 'longitud' => $_POST['longitud'], 'image_guatesegura' => $resultadoImagen, 'medio' => 'GuateSegura WebApp');
//             $options = array(
//               'http' => array(
//                 'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//                 'method'  => 'POST',
//                 'content' => http_build_query($data),
//                 ),
//               );
//             $context  = stream_context_create($options);
//             $result = file_get_contents($url, false, $context);
//             $jsonDecodedArr = json_decode($result, true);
//     $ResultadoDenuncia = $jsonDecodedArr; 
//"¡Tu denuncia se ha realizado correctamente!";
//luego mostrar un mensaje de exito o fallo de la denuncia
}else{
echo ' 
<form id="uploadForm" action="denunciar.php?action=denunciarahora" method="post" enctype="multipart/form-data">
<div class="row">              
<div class="col-lg-12 main-chart">
<div class="form-horizontal id="dform" style-form" method="get">
<div class="form-panel">
<div class="form-group">
<!--<label class="col-sm-2 col-sm-2 control-label">Denuncia</label>-->
<div class="col-sm-10 col-md-12">
<textarea placeholder="¿Qu&eacute; est&aacute; sucediendo?" id="descripcion" name="descripcion" rows="2" cols="50"  class="form-control" style="width:100%;"></textarea>                    
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="btn-group-justified">
<div class="btn-group">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="1" aria-expanded="false" style="text-align:left;">
<img src="assets/img/ic_tipo_delito/ic_robo.png"/>
<label>Robo
</label>
<span class="pull-right">
<span class="glyphicon glyphicon-chevron-down glyphicon-center" style="vertical-align:middle">
</span>
</span>
</button>
<ul class="dropdown-menu scrollable-menu " style="width:100%;"> 
<li>
<a value="1">
<img src="assets/img/ic_tipo_delito/ic_robo.png" />Robo
</a>
</li>
<li>
<a value="2">
<img src="assets/img/ic_tipo_delito/ic_asesinato.png" />Asesinato
</a>
</li>
<li>
<a value="3">
<img src="assets/img/ic_tipo_delito/ic_ataque.png" />Ataque armado
</a>
</li>
<li>
<a value="4">
<img src="assets/img/ic_tipo_delito/ic_secuestro.png" />Secuestro
</a>
</li>                
<li>
<a value="5">
<img src="assets/img/ic_tipo_delito/ic_extorsion.png" />Extorsi&oacute;n
</a>
</li>
<li>
<a value="6">
<img src="assets/img/ic_tipo_delito/ic_violacion.png" />Violaci&oacute;n
</a>
</li>
<li>
<a value="7">
<img src="assets/img/ic_tipo_delito/ic_ventas.png" />Ventas ilegales
</a>
</li>
<li>
<a value="8">
<img src="assets/img/ic_tipo_delito/ic_ebriedad.png" />Estado de ebriedad
</a>
</li>
<li>
<a value="9">
<img src="assets/img/ic_tipo_delito/ic_soborno.png" />Soborno
</a>
</li>
<li>
<a value="10">
<img src="assets/img/ic_tipo_delito/ic_incendio.png" />Incendio
</a>
</li>
<li>
<a value="11">
<img src="assets/img/ic_tipo_delito/ic_fraude.png" />Fraude
</a>
</li>
<li>
<a value="12">
<img src="assets/img/ic_tipo_delito/ic_vandalismo.png" />Vandalismo
</a>
</li>
<li>
<a value="13">
<img src="assets/img/ic_tipo_delito/ic_accidente_vehiculo.png" />Accidente vehicular
</a>
</li>
<li>
<a value="14">
<img src="assets/img/ic_tipo_delito/ic_precaucion.png" />Precauci&oacute;n
</a>
</li>
</ul>
</div>
</div>
</div>		  
<div class="col-lg-4 col-md-4 col-sm-4 ">			
<label class="btn btn-primary btn-lg btn-file" style="width:100%">
Agregar im&aacute;gen<input type="file" name="image_guatesegura"  style="display: none;">
</label>           
</div>
<div class="col-lg-4 col-md-4 col-sm-4 ">
<button id="btndenunciar" type="submit" class="btn btn-primary btn-lg " style="width: 100%;">Denunciar
</button>
</div>
</div>
</div>
<div class="">
<div class="">
<div class="">
<div id="map" class="col-sm-12 col-sm-12 col-md-12">
</div>
</div>
</div>
</div>
<!--<div class="form-horizontal style-form">
<div class="form-panel">
<div class="form-group">
<div class="col-sm-4 col-sm-6 col-md-4">
<button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Denunciar
</button>
<span>Agregar im&aacute;gen
<input type="file" name="image_guatesegura">
</span>
</div>
</div>
</div>
</div>-->
<input type="hidden" name="latitud" id="latitud" value="14.619409399999999">
<input type="hidden" name="longitud" id="longitud" value="-90.5163063">
<input type="hidden" name="tipodelito" id="tipodelito" value="">
</div>
<!-- /col-lg-9 END SECTION MIDDLE -->
</div>
<! --/row -->
</form>';
}
?>
        </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="z-index: -10;">
        <div class="text-center">
          <?php echo date("Y"); ?> - GuateSegura
          <a href="denunciar.php#" class="go-top">
            <i class="fa fa-angle-up">
            </i>
          </a>
        </div>
      </footer>
      <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js">
    </script>
    <script src="assets/js/jquery-1.8.3.min.js">
    </script>
    <script src="assets/js/bootstrap.min.js">
    </script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js">
    </script>
    <script src="assets/js/jquery.scrollTo.min.js">
    </script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript">
    </script>
    <script src="assets/js/jquery.sparkline.js">
    </script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js">
    </script>
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js">
    </script>
    <script type="text/javascript" src="assets/js/gritter-conf.js">
    </script>
    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js">
    </script>
    <script src="assets/js/bootstrap-select.js">
    </script>
    <script src="assets/js/zabuto_calendar.js">
    </script>
    <script type="application/javascript">
      $(document).ready(function () {
        $("#btndenunciar").on('click touchstart',function(){
          $('#myModal').modal('show');
          $('form#uploadForm').submit();
          //return
        }
                             );
        $(document).on('change', ':file', function() {
          var input = $(this),
              numFiles = input.get(0).files ? input.get(0).files.length : 1,
              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
          input.trigger('fileselect', [numFiles, label]);
        }
                      );
        $(".dropdown-menu").on('click', 'li a', function(){
          $(".btn:first-child>label").html($(this).text());
          $("#tipodelito").val($(this).attr('value'));
          $(".btn:first-child>img").attr('src',$(this).find('img').attr('src'));
        }
                              );
        /*$("#map").css('height',($(window).height()-($('footer').height()+$('.header').height()+$('#uploadForm').height()+$("#dform").height())));
		$(window).on("resize",function(){
			$("#map").css('height',($(window).height()-($('footer').height()+$('.header').height()+$('#uploadForm').height()+$("#dform").height())));			
		});*/
        $("#date-popover").popover({
          html: true, trigger: "manual" }
                                  );
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
          $(this).hide();
        }
                                );
        $("#my-calendar").zabuto_calendar({
          action: function () {
            return myDateFunction(this.id, false);
          }
          ,
          action_nav: function () {
            return myNavFunction(this.id);
          }
          ,
          ajax: {
            url: "show_data.php?action=1",
            modal: true
          }
          ,
          legend: [
            {
              type: "text", label: "Special event", badge: "00" }
            ,
            {
              type: "block", label: "Regular event", }
          ]
        }
                                         );
      }
                       );
      function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
      }
      var currentLatitud = 14.576260;
      var currentLongitud = -90.538106;
      var x = document.getElementById("demo");
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition, showError,{
            enableHighAccuracy: true}
                                                  );
        }
        else {
          var currentLatitud = 14.576260;
          var currentLongitud = -90.538106;
        }
      }
      function showError(error) {
        switch (error.code) {
          case error.PERMISSION_DENIED:
            x.innerHTML = "Uşytkownik nie zezwolił na geolokalizację?"
            break;
          case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Informacja o lokalizacji jest niedostępna"
            break;
          case error.TIMEOUT:
            x.innerHTML = "Przekroczono czas zapytania"
            break;
          case error.UNKNOWN_ERROR:
            x.innerHTML = "Wystąpił nieznany błąd"
        }
      }
      function showPosition(position) {
        currentLatitud =  position.coords.latitude;
        currentLongitud = position.coords.longitude;
      }
      var map;
      var lat;
      var lon;
      function centerMap(){
        if(navigator.geolocation) {
          $('#myModal').modal('show');
          navigator.geolocation.getCurrentPosition(function(position) {
            latitudActual=position.coords.latitude;
            longitudActual=position.coords.longitude;
            var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            myMarker.setPosition(pos);
            map.panTo(pos);
            map.setZoom(15);
            $('#myModal').modal('hide');
          }
                                                  );
        }
        else {
          return false;
        }
      }
      function CenterControl(controlDiv, map) {
        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '3px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.title = 'Seleccionar para centrar el mapa';
        controlDiv.appendChild(controlUI);
        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        controlText.style.color = 'rgb(25,25,25)';
        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '38px';
        controlText.style.paddingLeft = '5px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = 'Centrar mapa';
        controlUI.appendChild(controlText);
        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener('click', function() {
          centerMap();
        }
                                  );
      }
      var myMarker;
      function locate_self() {
        if(navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            latitudActual=position.coords.latitude;
            longitudActual=position.coords.longitude;
            pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            myMarker = new google.maps.Marker({
              position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
              draggable: true,
              icon:'/images/icons/ic_pin.png',
              zIndex:10000
            }
                                             );
            google.maps.event.addListener(myMarker, 'dragend', function (evt) {
              document.getElementById("longitud").value = evt.latLng.lng().toFixed(3);
              document.getElementById("latitud").value = evt.latLng.lat().toFixed(3);
            }
                                         );
            myMarker.setMap(map);
            map.panTo(pos);
          }
                                                  );
        }
        else {
          return false;
        }
      }
      function initMap() {
        var myLatlng = new google.maps.LatLng(14.635644137199977,-90.5131352287292);
        var mapOptions = {
          zoom: 14,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        //Generación de Opción para centrar el mapa	
        var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);
        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
        locate_self();
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY-opcOetcM2JbZPv-GOcdKmiLlefcSZY&callback=initMap"
            async defer>
    </script>
    <!--modal-->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="center">
        <img src="/images/loader.gif">    
      </div>
    </div>
  </body>
</html>