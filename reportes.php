<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta charset="utf-8" /> 
  <title>GuateSegura
  </title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/rangeslider.css">
  <link rel="icon" type="image/png" href="assets/img/logo.ico">
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
  <style>
    output {
        display: block;
        font-size: 2em;
        font-weight: bold;
        text-align: center;
        width: 100%;
      }
    #share-buttons img {
      width: 1px;
      padding: 2px;
      border: 0;
      box-shadow: 0;
      display: inline;
    }
    .modalCustom
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
  </style>
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
            <a href="index.php">
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
        <div class="row" id="selector">
          <div class="col-sm-12 col-sm-12 col-md-12">			
              <output>
              </output>			
              <input type="range" min="0" max="2" step="1" data-rangeslider>			
              <br/>			 
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12 main-chart" id="c_container">
            
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
        </div>
        <! --/row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="display:none;">
      <div class="text-center">
        <?php echo date("Y"); ?> - GuateSegura
        <a href="reportes.php#" class="go-top">
            <i class="fa fa-angle-up">
            </i>
          </a>
      </div>
<input type="hidden" name="latitud" id="la" value="0">
<input type="hidden" name="longitud" id="lo" value="0">
<input type="hidden" name="filtro" id="f" value="1">
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
  <script src="assets/js/rangeslider.js">
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
  <script type="text/javascript" src="assets/js/jquery.cookie.js">
  </script>
  <script type="application/javascript">
    $(document).ready(function () {       

      var selector = '[data-rangeslider]';
        var $element = $(selector);
        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';
        function valueOutput(element) {
          var value = element.value;
          var output = element.parentNode.getElementsByTagName('output')[0] || element.parentNode.parentNode.getElementsByTagName('output')[0];
          var txt="";
          var distance=0;
          switch(value){
            case "0":
              txt="5km";
              distance=5;
              break;
            case "1":
              txt="Todos";
              distance=0;
              break;
            case "2":
              txt="10km";
              distance=10;
              break;
          }
          output[textContent] = txt;		 
        }
        $(document).on('input', 'input[type="range"], ' + selector, function(e) {
          valueOutput(e.target);
        }
                      );
        $element.rangeslider({
          // Deactivate the feature detection
          polyfill: false,
          // Callback function
          onInit: function() {
            valueOutput(this.$element[0]);
          }
          ,
          // Callback function
          onSlide: function(position, value) {
            //console.log('onSlide');
            //console.log('position: ' + position, 'value: ' + value);
			
          }
          ,
          // Callback function
          onSlideEnd: function(position, value) {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function (position) {
				paintReports(value,$('#la').val(),$('#lo').val());	
				},showError);
			} else {
				return false;
			}            
          }
		  
        });


      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
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
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });
      function showError(error) {
        switch (error.code) {
          case error.PERMISSION_DENIED:
            //alert("Permiso de obtener ubicación por geolocalización denegado");
			$("#infoAlert").html("Permiso de obtener ubicación por geolocalización denegado, favor permitir acceso a ubicación para obtener el reporte de denuncias.");
			$("#alertModal").modal("show");			
            break;
          case error.POSITION_UNAVAILABLE:
            //alert("El navegador no soporta geolocalización");
			$("#infoAlert").html("El navegador no soporta geolocalización, probar de nuevo en un navegador actualizado.");
			$("#alertModal").modal("show");			
            break;
          case error.TIMEOUT:
            //alert("Tiempo de espera finalizado para obtener ubicación, favor de intentar de nuevo");
			$("#infoAlert").html("Tiempo de espera finalizado para obtener ubicación, favor de intentar de nuevo.");
			$("#alertModal").modal("show");
			return;
            break;
          case error.UNKNOWN_ERROR:
            //alert("Error inesperado, favor recargar la página");
			$("#infoAlert").html("Error inesperado, favor recargar la página");
			$("#alertModal").modal("show");		
        }
      }
    function getIconDelito(idDelito){
        var urlBase = "assets/img/ic_tipo_delito/";
         switch(idDelito) {
          case "1":
            return urlBase + "ic_robo.png";
          case "2":
            return urlBase + "ic_asesinato.png";
          case "3":
            return urlBase + "ic_ataque.png";
          case "4":
            return urlBase + "ic_secuestro.png";
          case "5":
            return urlBase + "ic_extorsion.png";
          case "6":
            return urlBase + "ic_violacion.png";
          case "7":
            return urlBase + "ic_ventas.png";
          case "8":
            return urlBase + "ic_ebriedad.png";
          case "9":
            return urlBase + "ic_soborno.png";
          case "10":
            return urlBase + "ic_incendio.png";
          case "11":
            return urlBase + "ic_fraude.png";
          case "12":
            return urlBase + "ic_vandalismo.png";
          case "13":
            return urlBase + "ic_accidente_vehiculo.png";
          case "14":
            return urlBase + "ic_precaucion.png";
          default:
            return urlBase + "ic_robo.png";
        }
      }

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    $(document).ready(function () {
	  if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function (position) {
            $("#lo").val(position.coords.longitude);
            $("#la").val(position.coords.latitude);
			 paintReports(1,0,0);
            },showError);
        } else {
          return false;
        }     
      $(document).on('click touchstart','.imgdelito',function () {
        $("#infoModal").modal('show');        
        $('#imgval').attr('src','https://www.guatesegura.com/imagenes_guatesegura/'+$(this).children("input:hidden").val());
      });
    });   

    function paintReports(f, la, lo) {
      var datos;
      $.ajax({
        url: 'wsrv/dreport.php',
        type: 'POST',
        data: {
          'f': f,
          'la': la,
          'lo': lo
        },
        dataType: 'json',
        beforeSend: function(){
          $('#myModal').modal('show');
        },
        success: function (data) {          
          datos = JSON.parse(data.message);
          if (datos.success == '1') {

            controlFilas = 0; //3 items por cada fila
            FilaAbierta = false;
            htmlUltimosPosts = "";
            for (i = 0; i < datos.denuncias.length; i++) { //foreach element in $arr  
              if (FilaAbierta) {
                controlFilas += 1;
                if (controlFilas == 3) {
                  //cerramos fila
                  htmlUltimosPosts += '<div class="col-lg-4 col-md-4 col-sm-4 mb">\
  <div class="weather-2 pn">\
    <div class="weather-2-header">\
      <div class="row">\
        <div class="col-sm-12 col-xs-12 centered">\
          <!-- Facebook -->\
          <a href="http://www.facebook.com/sharer.php?u=https://webapp.guatesegura.com/reportes.php" target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" />\
</a>\
          <!-- Google+ -->\
          <a href="https://plus.google.com/share?url=https://webapp.guatesegura.com/reportes.php" target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" /> \
</a>\
          <!-- Twitter -->\
          <a href="https://twitter.com/share?url=https://webapp.guatesegura.com/reportes.php&amp;text=Reporte%20Guate%20Segura&amp;hashtags=GuateSegura"\
            target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" />\
</a>\
        </div>\
      </div>\
    </div>\
    <!-- /weather-2 header -->\
    <div class="row centered">\
      <h5>' + datos.denuncias[i].nombre_delito + '</h5>\
      <p><b>' + datos.denuncias[i].medio +
                    '</b></p></div>\
    <div class="row data centered imgdelito">\
      <img src="/'+getIconDelito(datos.denuncias[i].tipo_delito)+'"/>\
      <input type="hidden" value="'+validateImage(datos.denuncias[i].image_guatesegura)+'"/>\
    </div>\
    <div class="row data">\
      <p class="small mt centered">' + truncate(datos.denuncias[i].descripcion) + '</p>\
    </div>\
  </div>\
</div>';
                  // <!-- cierre de fila -->
                  FilaAbierta = false;
                  controlFilas = 0;
                } else {
                  htmlUltimosPosts += '<div class="col-lg-4 col-md-4 col-sm-4 mb">\
  <div class="weather-2 pn">\
    <div class="weather-2-header">\
      <div class="row">\
        <div class="col-sm-12 col-xs-12 centered">\
          <!-- Facebook -->\
          <a href="http://www.facebook.com/sharer.php?u=https://webapp.guatesegura.com/reportes.php" target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" />\
</a>\
          <!-- Google+ -->\
          <a href="https://plus.google.com/share?url=https://webapp.guatesegura.com/reportes.php" target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" /> \
</a>\
          <!-- Twitter -->\
          <a href="https://twitter.com/share?url=https://webapp.guatesegura.com/reportes.php&amp;text=Reporte%20Guate%20Segura&amp;hashtags=GuateSegura"\
            target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" />\
</a>\
        </div>\
      </div>\
    </div>\
    <!-- /weather-2 header -->\
    <div class="row centered">\
      <h5>' + datos.denuncias[i].nombre_delito + '</h5>\
      <p><b>' + datos.denuncias[i].medio +
                    '</b></p>\
    </div>\
     <div class="row data centered imgdelito">\
      <img src="/'+getIconDelito(datos.denuncias[i].tipo_delito)+'"/>\
      <input type="hidden"  value="'+validateImage(datos.denuncias[i].image_guatesegura)+'">\
    </div>\
    <div class="row data">\
      <p class="small mt centered">' + truncate(datos.denuncias[i].descripcion) + '</p>\
    </div>\
  </div>\
</div>';
                  controlFilas += 1;
                }
              } else {
                //hay que abrir una fila
                controlFilas = 0;
                htmlUltimosPosts += '<div class="col-lg-4 col-md-4 col-sm-4 mb">\
  <div class="weather-2 pn">\
    <div class="weather-2-header">\
      <div class="row">\
        <div class="col-sm-12 col-xs-12 centered">\
          <!-- Facebook -->\
          <a href="http://www.facebook.com/sharer.php?u=https://webapp.guatesegura.com/reportes.php" target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" />\
</a>\
          <!-- Google+ -->\
          <a href="https://plus.google.com/share?url=https://webapp.guatesegura.com/reportes.php" target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" /> \
</a>\
          <!-- Twitter -->\
          <a href="https://twitter.com/share?url=https://webapp.guatesegura.com/reportes.php&amp;text=Reporte%20Guate%20Segura&amp;hashtags=GuateSegura"\
            target="_blank">\
<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" WIDTH=25 HEIGHT=25 style="display:inline-block;margin: 0 auto;" />\
</a>\
        </div>\
      </div>\
    </div>\
    <!-- /weather-2 header -->\
    <div class="row centered">\
      <h5>' + datos.denuncias[i].nombre_delito + '</h5>\
      <p><b>' + datos.denuncias[i].medio +
                  '</b></p></div>\
                   <div class="row data centered imgdelito">\
      <img src="/'+getIconDelito(datos.denuncias[i].tipo_delito)+'"/>\
      <input type="hidden"  value="'+validateImage(datos.denuncias[i].image_guatesegura)+'">\
    </div>\
    <div class="row data">\
      <p class="small mt centered">' +truncate(datos.denuncias[i].descripcion) + '</p>\
    </div>\
  </div>\
</div>';

                FilaAbierta = true;
              }
            }
            if (FilaAbierta) {
              //cerramos fila
              htmlUltimosPosts += '</div> <!-- cierre de fila -->';
            }
            $('#c_container').html(htmlUltimosPosts);
          }
          $('#myModal').modal('hide');
        },
        error: function (request, error) {
          $('#myModal').modal('hide');
          datos = request;
        }
      });
    }

    function truncate(string) {
      if (string.length > 150)
        return string.substring(0, 150) + '...';
      else
        return string;
    };

    function validateImage(image){
      if (image!=''){
        return image;
      }else{
        return 'no_imagen.png';
      }

    }
  </script>
</body>
<!--modal-->
<div id="myModal" class="modal modalCustom fade" role="dialog">
  <div class="center">
    <img src="/images/loader.gif">
  </div>
</div>

<div class="modal fade" id="infoModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;
			</button>
        <h5 class="modal-title" id="infoTitle">Im&aacute;gen de Delito
        </h5>
      </div>
      <div class="modal-body centered">
        <img class="img-responsive" id="imgval" src="/"/>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar
			</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="alertModal" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;
			</button>
			<h5 class="modal-title" id="alertTitle">Mensaje de Alerta
			</h5>
		</div>
		<div class="modal-body">
			<p ><b id="infoAlert">Some text in the modal.</b>
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" id="alertButton" class="btn btn-default" data-dismiss="modal">Aceptar
			</button>
		</div>
		</div>
		</div>
</div>
</html>