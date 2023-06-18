<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Asociacion GUP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/causas.css">
    <link rel="icon" type="image/x-icon" href="img/logoGUP.icon">
    <link rel="stylesheet" type="text/css" href="<?php echo 'css/'.Config::$mvc_vis_css ?>" />
  </head>
  <body>
  <?php	
	if (!isset($menu)) {
	    $menu = 'menuInvitado.php';
	}
	include $menu;
	
    ?>

<script>

document.getElementById("menuCausas2").setAttribute('class','nav-item active'); 
</script>
  <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php?ctl=inicio"><img id="logo" src="./img/logoGUP.jpg"></img></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php?ctl=inicio" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="index.php?ctl=informacion" class="nav-link">Sobre nosotros</a></li>
          <li class="nav-item active"><a href="index.php?ctl=causas" class="nav-link">Causas</a></li>
          <li class="nav-item"><a href="index.php?ctl=donaciones" class="nav-link">Donar</a></li>
          <li class="nav-item"><a href="index.php?ctl=tienda" class="nav-link">Tienda</a></li>
          <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="index.php?ctl=eventos" class="nav-link">Eventos</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav> -->
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <!-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php?ctl=causas">Inicio</a></span> <span>Causas</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Causas</h1> -->
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
            <a class="img" style="background-image: url(images/comedorSocial.jpg);"></a>
    					<div class="text p-3 p-md-4">
              <h3 tabindex="1"><a >Comedor Social</a></h3>
		    						<p>Se reparte comida semanalmente en el barrio de benimaclet a la gente más humilde</p>
		    						<span class="donation-time mb-3 d-block">Ultima donación hace una semana</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">€12,000 recaudados de €30,000</span>
		    					</div>
    				</div>
      		</div>
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    				<a  class="img" style="background-image: url(img/root/108.jpg);"></a>
    					<div class="text p-3 p-md-4">
              <h3 tabindex="2"><a >Senegal</a></h3>
		    						<p>Llevamos alimentos, medicinas y ropa</p>
		    						<span class="donation-time mb-3 d-block">ultima donacion hace una semana</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">€12,000 reunidos de €30,000</span>
		    					</div>
    				</div>
      		</div>
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
            <a  class="img" style="background-image: url(img/root/055.jpg);"></a>
    					<div class="text p-3 p-md-4">
              <h3 tabindex="3"><a >Asociacion</a></h3>
		    						<p>Con el dinero aportado, podemos mantener las infrestructuras que gestionamos</p>
		    						<span class="donation-time mb-3 d-block">ultima donacion hace una semana</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <span class="fund-raised d-block">€12,000 recaudado de €30,000</span>
    					</div>
    				</div>
      		</div>
      		
        </div>
      
      </div>
    </section>

    
		

   
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <!-- <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Redes sociales</h2>
             
                
                <li class="ftco-animate"><a href="https://www.instagram.com/asociaciongup/?hl=es"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/asociaciongup/?locale=es_ES"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div> -->
         
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Enlaces de la web</h2>
              <ul class="list-unstyled">
                <li><a href="index.php?ctl=inicio" class="py-2 d-block">Inicio</a></li>
                <li><a href="index.php?ctl=informacion" class="py-2 d-block">Sobre nosotros</a></li>
                <li><a href="index.php?ctl=donaciones" class="py-2 d-block">Donar</a></li>
                <li><a href="index.php?ctl=tienda" class="py-2 d-block">Tienda</a></li>
                <li><a href="index.php?ctl=causas" class="py-2 d-block">Causas</a></li>

              </ul>
            </div>
          </div>

<!-- // -->

<div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Eventos recientes</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(img/root/652.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="index.php?ctl=eventos">Evento Cultural</a></h3>
            
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(img/root/055.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="index.php?ctl=eventos">Aldea del Senegal</a></h3>
                 
                </div>
              </div>
            </div>
          </div>



<div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Politica de cookies</h2>
              <p>Esta página web usa cookies
Las cookies de este sitio web se usan para personalizar el contenido y los anuncios, ofrecer funciones de redes sociales y analizar el tráfico. Además, compartimos información sobre el uso que haga del sitio web con nuestros partners de redes sociales, publicidad y análisis web, quienes pueden combinarla con otra información que les haya proporcionado o que hayan recopilado a partir del uso que haya hecho de sus servicios</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> -->
                <li class="ftco-animate"><a href="https://www.facebook.com/asociaciongup/?locale=es_ES"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/asociaciongup/?hl=es"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿Tienes dudas?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">C/ Ntra. Sra. de la Asunción, 2.   46020 Valencia</span></li>
	                <li><a ><span class="icon icon-phone"></span><span class="text">+34 616-420-909</span></a></li>
	                <li><a ><span id="correoA" class="icon icon-envelope"></span><span class="text">asociaciongup@hotmail.es</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- <p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p> 
          </div>
        </div>
      </div>
    </footer>
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>