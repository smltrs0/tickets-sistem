<?php
    session_start();

    include "config/config.php";

    if (isset($_SESSION['user_id']) && $_SESSION!==null) {
       header("location: dashboard.php");
    }

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OMEGA-Pagina Principal</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body class="body" style="  background-image:  -webkit-linear-gradient(-45deg, #ff675c 0%, #c247a1 62%, #730153 100%); background-size: 100% 100%; background-attachment: fixed;">
<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Taller Omega</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Acerca de Nosotros</a></li>
            <li><a href="#contact">Contactanos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
      <div class="header clearfix">

      </div>
      <div class="jumbotron">
        <h1>OMEGA</h1>
        <p class="lead">Esta aplicación permite registrar y controlar los equipos ingresados a través de un sistema de tickets y permite mantener un control total de el inventario de piezas de recambio en el taller.</p>

<?php
include 'modal/login_modal.php';
?> 
      </div>

      <div class="h2">Servicios</div>
      <div class="row marketing">
        <div class="flex-column col-lg-6">
          <div class="cardmarketing">
          <h4>Mantenimiento</h4>
          <p> 
          
         Texto del sub-hilo</p>
          </div>
           <div class="cardmarketing">
          <h4>Restauración</h4>
          <p>Texto del sub-hilo</p>
        </div>
        </div>

        <div class="flex-column col-lg-6">
           <div class="cardmarketing">
          <h4>Reparación</h4>
          <p>Texto del sub-hilo</p>
        </div>
         <div class="cardmarketing">
          <h4>Revision</h4>
          <p>Texto del sub-hilo</p>
        </div>
        </div>
      </div>
    </div> <!-- /container --> 

     <!--Bottom Footer-->
    <div class="bottom section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright">
              <p>© <span>2019</span> <a href="#" class="transition">Taller Omega</a> Todos los derechos reservados.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--Bottom Footer-->     
          
  </body>
 <script src="js/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
