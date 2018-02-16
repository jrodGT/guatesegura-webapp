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
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js">
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body>
    <section id="container" >
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
        <div id="sidebar"  class="nav-collapse ">
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
              <a  href="index.php">
                <i class="fa fa-exclamation-circle">
                </i>
                <span>Denunciar / Reportar
                </span>
              </a>
            </li>  
            <li class="mt">
              <a href="reportes.php">
                <i class="fa fa-file-text-o">
                </i>
                <span>Reportes
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
          <div class="row">
            <div class="col-lg-12">
              <h3> Tel&eacute;fonos de emergencia
              </h3>
              <br>
            </div>
          </div>
          <div class="row">              
            <!-- WEATHER-2 PANEL -->
            <?php 
$url = 'http://www.guatesegura.com/JsonServicios/SrvObtenerDirectorio.php';
$data = array('pagina' => '10', 'filtro' => '0', 'latitud' => '14.6349261', 'longitud' => '-90.50714820000002');
//pagina=10&filtro=0&latitud=90&longitud=90 14.6349261, -90.50714820000002
// use key 'http' even if you send the request to https://...
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
$controlFilas = 0;  //3 items por cada fila
$FilaAbierta = false;
$htmlUltimosPosts = "";
for($i=0; $i<count($jsonDecodedArr['registros']); $i++) { //foreach element in $arr  
$imagen='';
if( $jsonDecodedArr['registros'][$i]['tipo_entidad']==1)
$imagen='ic_pnc.png';
if( $jsonDecodedArr['registros'][$i]['tipo_entidad']==2)
$imagen='ic_bombero_voluntario.png';
if( $jsonDecodedArr['registros'][$i]['tipo_entidad']==3)
$imagen='ic_bombero_municipal.png';
if( $jsonDecodedArr['registros'][$i]['tipo_entidad']==4)
$imagen='ic_conred.png';
$htmlUltimosPosts .= '
<div class="col-lg-4 col-md-4 col-sm-4 mb">
<div class="weather-2 pn">
<div class="weather-2-header">
<div class="row">
<div class="col-sm-6 col-xs-6">
<p>' . $jsonDecodedArr['registros'][$i]['nombre'] .  '</p>
</div>
<div class="col-sm-6 col-xs-6 goright">
<p class="small"><b>' . $jsonDecodedArr['registros'][$i]['telefono'] . '</b></p>
</div>
</div>
</div><!-- /weather-2 header -->
<div class="row centered">
<img src="images/' .$imagen. '" class="img-circle" width="120">			
</div>
<div class="row data">
<div class="col-sm-6 col-xs-6 goleft">
<h6>' . $jsonDecodedArr['registros'][$i]['direccion'] .  '</h6>
</div>
<div class="col-sm-6 col-xs-6 goright">
<h5>	' . $jsonDecodedArr['registros'][$i]['informacion'] .  '</h5>
</div>
</div>
</div>
</div>
';
$FilaAbierta = false;
}
echo $htmlUltimosPosts;
?>
          </div>
          <!-- /row -->
          </div>
        <!-- /col-lg-9 END SECTION MIDDLE -->
        <!-- **********************************************************************************************************************************************************
RIGHT SIDEBAR CONTENT
*********************************************************************************************************************************************************** -->                  
        </div>
      <! --/row -->
    </section>
    </section>
  <!--main content end-->
  <!--footer start-->
  <footer class="site-footer" style="display:none;">
    <div class="text-center">
      2014 - Alvarez.is
      <a href="telefonos.php#" class="go-top">
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
<script src="assets/js/zabuto_calendar.js">
</script>	
<script type="application/javascript">
  $(document).ready(function () {
    $("#date-popover").popover({
      html: true, trigger: "manual"}
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
          type: "text", label: "Special event", badge: "00"}
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
</script>
</body>
</html>