<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>GuateSegura</title>

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
        height: 100%;
      }
</style>
  <script src="assets/js/chart-master/Chart.js"></script>

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
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu"></div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo"><b>GuateSegura</b></a>
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

           <p class="centered"><a href="index.php"><img src="assets/img/logo.png" class="img-circle" width="80"></a></p>
           <h5 class="centered">GuateSegura</h5>

           <li class="mt">
            <a  href="index.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
          </li>                 


          <li class="mt">
            <a  href="denunciar.php">
              <i class="fa fa-exclamation-circle"></i>
              <span>Denunciar / Reportar</span>
            </a>
          </li>

          <li class="mt">
            <a href="index.php">
              <i class="fa fa-file-text-o"></i>
              <span>Reportes</span>
            </a>
          </li>

          <li class="mt">
            <a  href="index.php">
              <i class="fa fa-map-marker"></i>
              <span>Mapa</span>
            </a>
          </li>

          <li class="mt">
            <a  href="telefonos.php">
              <i class="fa fa-ambulance"></i>
              <span>Tel&eacute;fonos de emergencia</span>
            </a>
          </li>

          <li class="mt">
            <a class="active" href="configuracion.php">
              <i class="fa fa-cogs"></i>
              <span>Configuraci&oacute;n</span>
            </a>
          </li>

          <li class="mt">
            <a href="index.php">
              <i class="fa fa-info-circle"></i>
              <span>Acerca de GuateSegura</span>
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
             <h3>Configurac&iacute;on</h3></a>
            </div>
          </div>
          <div class="row">              
            <div class="col-lg-12 main-chart">
			
              <div class="form-horizontal style-form" method="get">
			   <div class="form-panel">
                  <div class="form-group">
				 
					<br>
                    <div class="col-sm-10">
					 <label>Texto para compartir en sus redes sociales, cuando compartes un reporte</label>
                  
                      <textarea  rows="4" cols="50"  class="form-control" ></textarea>
  <button type="button" class="btn btn-primary btn-lg">Guardar</button>					  
                    </div>
                  </div>
                </div>
              </div>

          


            </div><!-- /col-lg-9 END SECTION MIDDLE -->
          </div><! --/row -->
        </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="z-index: -10;">
        <div class="text-center">
          <?php echo date("Y"); ?> - GuateSegura
          <a href="index.php#" class="go-top">
            <i class="fa fa-angle-up"></i>
          </a>
        </div>
      </footer>
      <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
    <script src="assets/js/zabuto_calendar.js"></script>  

    <script type="application/javascript">
      $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
          $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
          action: function () {
            return myDateFunction(this.id, false);
          },
          action_nav: function () {
            return myNavFunction(this.id);
          },
          ajax: {
            url: "show_data.php?action=1",
            modal: true
          },
          legend: [
          {type: "text", label: "Special event", badge: "00"},
          {type: "block", label: "Regular event", }
          ]
        });
      });


      function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
      }



    </script>

<script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY-opcOetcM2JbZPv-GOcdKmiLlefcSZY&callback=initMap"
        async defer></script>
  </body>
  </html>
