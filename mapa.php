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
    <link rel="stylesheet" type="text/css" href="assets/css/rangeslider.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
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
      output {
        display: block;
        font-size: 2em;
        font-weight: bold;
        text-align: center;
        width: 100%;
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
          <div class="row" id="selector">			
            <div class="col-sm-12 col-sm-12 col-md-12">			
              <output>
              </output>			
              <input type="range" min="0" max="2" step="1" data-rangeslider>			
              <br/>			 
            </div>			
          </div>		
          <div class="row">     
            <div class="col-lg-12 main-chart">		  
              <div id="map" class="col-sm-12 col-sm-12 col-md-12">
              </div>
            </div>
            <!-- /col-lg-9 END SECTION MIDDLE -->
          </div>
          <! --/row -->
        </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer"  style="display:none;">
        <div class="text-center">
          <?php echo date("Y"); ?> - GuateSegura
          <a href="mapa.php#" class="go-top">
            <i class="fa fa-angle-up">
            </i>
          </a>
          <!--modal-->
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
    <script src="assets/js/markerclusterer.js">
    </script>	
    <script src="assets/js/rangeslider.js">
    </script>	
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false">
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
        initialize();
        $("#map").css('height', ($(window).height() - ($('footer').height() + $('.header').height() + $('#selector').height())));
        $(window).on("resize", function () {
          $("#map").css('height', ($(window).height() - ($('footer').height() + $('.header').height() + $('#selector').height())));
        });
        var selector = '[data-rangeslider]';
        var $element = $(selector);
        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';

        function valueOutput(element) {
          var value = element.value;
          var output = element.parentNode.getElementsByTagName('output')[0] || element.parentNode.parentNode.getElementsByTagName('output')[0];
          var txt = "";
          var distance = 0;
          switch (value) {
            case "0":
              txt = "5km";
              distance = 5;
              break;
            case "1":
              txt = "Todos";
              distance = 0;
              break;
            case "2":
              txt = "10km";
              distance = 10;
              break;
          }
          drawCircle(distance, pos);
          output[textContent] = txt;
        }
        $(document).on('input', 'input[type="range"], ' + selector, function (e) {
          valueOutput(e.target);
        });
        $element.rangeslider({
          // Deactivate the feature detection
          polyfill: false,
          // Callback function
          onInit: function () {
            valueOutput(this.$element[0]);
          },
          // Callback function
          onSlide: function (position, value) {
            //console.log('onSlide');
            //console.log('position: ' + position, 'value: ' + value);

          },
          // Callback function
          onSlideEnd: function (position, value) {  
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function (position) {
				pullMarkers(longitudActual, latitudActual, value);
            },showError);
			} else {
				return false;
			}           
          }
        });

        function initialize() {
          //Configuracion Inicial------------------------------------------------------------		 
          var myLatlng = new google.maps.LatLng(14.635644137199977, -90.5131352287292);
          var mapOptions = {
            zoom: 15,
            center: myLatlng,
            mapTypeId: 'roadmap'
          };
          map = new google.maps.Map(document.getElementById('map'), mapOptions);
          //Generación de Opción para centrar el mapa	
          var centerControlDiv = document.createElement('div');
          var centerControl = new CenterControl(centerControlDiv, map);
          centerControlDiv.index = 1;
          map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
          locate_self();
          $('#myModal').modal('hide');
        }

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

      function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
      }
      var latitudActual = "14.576260";
      var longitudActual = "-90.538106";

      function getIconDelito(idDelito) {
        var urlBase = "assets/img/ic_tipo_delito/";
        switch (idDelito) {
          case 1:
            return urlBase + "ic_robo.png";
          case 2:
            return urlBase + "ic_asesinato.png";
          case 3:
            return urlBase + "ic_ataque.png";
          case 4:
            return urlBase + "ic_secuestro.png";
          case 5:
            return urlBase + "ic_extorsion.png";
          case 6:
            return urlBase + "ic_violacion.png";
          case 7:
            return urlBase + "ic_ventas.png";
          case 8:
            return urlBase + "ic_ebriedad.png";
          case 9:
            return urlBase + "ic_soborno.png";
          case 10:
            return urlBase + "ic_incendio.png";
          case 11:
            return urlBase + "ic_fraude.png";
          case 12:
            return urlBase + "ic_vandalismo.png";
          case 13:
            return urlBase + "ic_accidente_vehiculo.png";
          case 14:
            return urlBase + "ic_precaucion.png";
          default:
            return urlBase + "ic_robo3.png";
        }
      }
      var circle;

      function drawCircle(rad, center) {
        var kmrad = rad * 1000;
        try {
          circle.setMap(null);
        } catch (e) {}
        circle = new google.maps.Circle({
          center: center,
          map: map,
          radius: kmrad, // IN METERS.
          fillColor: '#FF6600',
          fillOpacity: 0.3,
          strokeColor: "#FFF",
          strokeWeight: 2 // DON'T SHOW CIRCLE BORDER.
        });
        circle.setMap(map);
        switch (rad) {
          case 5:
            centerMap(13);
            break;
          case 0:
            try {
              centerMap(15);
            } catch (e) {}
            break;
          case 10:
            centerMap(12);;
            break;
        }
      }

      var myMarker;
      var pos;

      function locate_self() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function (position) {
            latitudActual = position.coords.latitude;
            longitudActual = position.coords.longitude;
            pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            myMarker = new google.maps.Marker({
              position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
              icon: '/images/icons/ic_pin.png',
              draggable: false,
              zIndex: 10000
            });
            myMarker.setMap(map);
            map.panTo(pos);
            pullMarkers(longitudActual, latitudActual, 1);
          },showError);
        } else {
          return false;
        }
      }

      function centerMap(zoom) {
        if (navigator.geolocation) {          
          navigator.geolocation.getCurrentPosition(function (position) {
			$('#myModal').modal('show');
            latitudActual = position.coords.latitude;
            longitudActual = position.coords.longitude;
            var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            $('#myModal').modal('hide');
            try {
              map.panTo(pos);
              map.setZoom(zoom);
            } catch (e) {}

          },showError);
        } else {
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
        controlUI.addEventListener('click', function () {
          centerMap(15);
        });
      }
      var gmarkers = [];
      var map;
      var markerCluster;

      function initialize() {
        //Configuracion Inicial------------------------------------------------------------		 
        var myLatlng = new google.maps.LatLng(14.635644137199977, -90.5131352287292);
        var mapOptions = {
          zoom: 15,
          center: myLatlng,
          mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        //Generación de Opción para centrar el mapa	
        var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);
        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
        locate_self();
        $('#myModal').modal('hide');
      }

      //Manejo de marcadores del array gmarkers
      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i = 0; i < gmarkers.length; i++) {
          gmarkers[i].setMap(map);
        }
      }

      // Removes the markers from the map, but keeps them in the array.
      function clearMarkers() {
        setMapOnAll(null);
      }

      // Shows any markers currently in the array.
      function showMarkers() {
        setMapOnAll(map);
      }

      // Deletes all markers in the array by removing references to them.
      function deleteMarkers() {
        clearMarkers();
        gmarkers = [];
      }
      //Fin Inicializacion------------------------------------------------------------------------------

      function pullMarkers(lon, lat, fil) {
        deleteMarkers();
        var iconBase = 'images/icons/';
        var mcOptions = {
          gridSize: 30,
          maxZoom: 15,
          styles: [{
              height: 53,
              url: iconBase + 'm1.png',
              width: 53
            },
            {
              height: 56,
              url: iconBase + 'm2.png',
              width: 56
            },
            {
              height: 66,
              url: iconBase + 'm3.png',
              width: 66
            },
            {
              height: 78,
              url: iconBase + 'm4.png',
              width: 78
            },
            {
              height: 90,
              url: iconBase + 'm5.png',
              width: 90
            }
          ]
        };
        //Tipo de Iconos-------------------------------------------------------------------
        var icons = {
          1: {
            icon: iconBase + 'ic_robo.png'
          },
          2: {
            icon: iconBase + 'ic_asesinato.png'
          },
          3: {
            icon: iconBase + 'ic_ataque.png'
          },
          4: {
            icon: iconBase + 'ic_secuestro.png'
          },
          5: {
            icon: iconBase + 'ic_extorsion.png'
          },
          6: {
            icon: iconBase + 'ic_violacion.png'
          },
          7: {
            icon: iconBase + 'ic_ventas.png'
          },
          8: {
            icon: iconBase + 'ic_ebriedad.png'
          },
          9: {
            icon: iconBase + 'ic_soborno.png'
          },
          10: {
            icon: iconBase + 'ic_incendio.png'
          },
          11: {
            icon: iconBase + 'ic_fraude.png'
          },
          12: {
            icon: iconBase + 'ic_vandalismo.png'
          },
          13: {
            icon: iconBase + 'ic_accidente_vehiculo.png'
          },
          14: {
            icon: iconBase + 'ic_precaucion.png'
          }
        };
        //Info Window Marker --------------------------------------------------------------------------						
        var ventana = new google.maps.InfoWindow({
          content: "",
          maxWidth: 300
        });
        //Obteniendo Informacion
        $.getJSON(
          'wsrv/ObtenerDenunciasWb.php', {
            longitud: lon,
            latitud: lat,
            filtro: fil
          },
          function (data) {
            //Inicio Ciclo----------------------------------------------------------------
            $.each(data.markers, function (i, info) {
              //Creando Marcador--------------------------------------------------
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(info.latitude, info.longitude),
                title: info.content,
                icon: icons[info.type].icon,
                draggable: false
              });
              //Formato InfoWindow Marker ----------------------------------------------------				
              FormatoVentana = '<div>' +
                '<div class="contenedor">' +
                '<span>' +
                '<a class="greyscale" target="_blank" href="https://guatesegura.com/imagenes_guatesegura/' + info.url + '">' +
                '<img width="125" height="107" src="https://guatesegura.com/imagenes_guatesegura/thumb/' + info.url + '" />' +
                '</a>' +
                '</span>' +
                '<div class="box_text">' +
                '<strong>' +
                info.nombre_delito +
                '</strong>' +
                '<p style="color: gray; text-align: left; font-size: small; padding-right: 10px">' +
                '    <strong>Hace: </strong>' + info.tiempo +
                '</p>' +
                '<p class="text_p">' +
                info.content +
                '</p>' +
                '</div>' +
                '</div>' +
                '<p style="color: gray; text-align: right; font-size: xx-small; padding-right: 10px">' +
                '   <strong>Reportado: </strong>' + info.medio +
                '</p>' +
                '</div>';
              bindInfoWindow(marker, map, ventana, FormatoVentana);
              gmarkers.push(marker);
            });
            //Fin CICLO
            //try {
              //markerCluster.clearMarkers();
            //} catch (e) {}
            //markerCluster = new MarkerClusterer(map, gmarkers, mcOptions);
            showMarkers();
          }
        );
        //Fin Obteniedo Informacion-----------------------------------
      }

      function bindInfoWindow(marker, map, infowindow, strDescription) {
        google.maps.event.addListener(marker, 'click', function () {
          infowindow.setContent(strDescription);
          infowindow.open(map, marker);
          map.setCenter(marker.getPosition());
        });
      }

      function infoOpen(i) {
        google.maps.event.trigger(gmarkers[i], 'click');
      }
	  
	 function showError(error) {
        switch (error.code) {
          case error.PERMISSION_DENIED:
            //alert("Permiso de obtener ubicación por geolocalización denegado");
			$("#infoAlert").html("Permiso de obtener ubicación por geolocalización denegado, favor permitir acceso a ubicación para mostrar el reporte de denuncias sobre el mapa.");
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
    </script>	
    <div id="myModal" class="modal modalCustom fade" role="dialog">
      <div class="center">
        <img src="/images/loader.gif">    
      </div>
    </div>
  </body>
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