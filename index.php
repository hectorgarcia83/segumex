<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Segumex</title>

	<link rel="stylesheet" href="assets/foundation/css/foundation.css">
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="assets/font-awesome-4.4.0/css/font-awesome.min.css">
	<link type="text/css" href="assets/camera/camera.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/slidemenu/css/style.css">
	
</head>
<body>
	<!--<div id="hider" class="overlay"></div>
	<div id="popup_box">
	    <div id="contentDialog"></div>
	    <a id="buttonClose">Close</a>
	</div>-->
	<div id="o-wrapper" class="o-wrapper">

	<section id="header">
		<?php include("secciones/headervideo.php"); ?>
	</section>
	
	<section id="header-menu">
		<?php include("secciones/headermenu.php"); ?>
	</section>
	
	<section id="galeriacajas">
		<?php include("secciones/galeriacajas.php"); ?> 
	</section>
	
	<section id="conocenos">
		<?php include("secciones/conocenos.php"); ?> 
	</section>

	<section id="formasdepago">
		<?php include("secciones/formasdepago.php"); ?> 
	</section>

	<section id="misionvision">
		<?php include("secciones/misionvision.php"); ?> 
	</section>

	<section id="footer">
		<?php include("secciones/footer.php"); ?> 
	</section>

	
	<nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
	  <button class="c-menu__close">Cerrar Menú &rarr;</button>
	  <ul class="c-menu__items">
	    <li class="c-menu__item"><a href="javascript:goToSection(0)" class="c-menu__link">Inicio</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(1)" class="c-menu__link">Tipos de Cajas</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(2)" class="c-menu__link">Conócenos</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(6)" class="c-menu__link">Galería</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(3)" class="c-menu__link">Formas de Pago</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(4)" class="c-menu__link">Misión y Visión</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(5)" class="c-menu__link">Contáctanos</a></li>
	  </ul>
	</nav><!-- /c-menu slide-right -->


	<!-- PUSH RIGHT -->
	<nav id="c-menu--push-right" class="c-menu c-menu--push-right">
	  <button class="c-menu__close">Cerrar Menú &rarr;</button>
	  <ul class="c-menu__items">
	    <li class="c-menu__item"><a href="javascript:goToSection(0)" class="c-menu__link">Inicio</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(1)" class="c-menu__link">Tipos de Cajas</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(2)" class="c-menu__link">Conócenos</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(6)" class="c-menu__link">Galería</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(3)" class="c-menu__link">Formas de Pago</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(4)" class="c-menu__link">Misión y Visión</a></li>
	    <li class="c-menu__item"><a href="javascript:goToSection(5)" class="c-menu__link">Contáctanos</a></li>
	  </ul>
	</nav>
	
	<div id="c-mask" class="c-mask"></div><!-- /c-mask -->

	<!-- Scripts -->
	<script src="assets/foundation/js/vendor/modernizr.js"></script>
	<script src="assets/foundation/js/vendor/jquery.js"></script>
	<script src="assets/camera/jquery.easing.1.3.js"></script>
	<script src="assets/camera/camera.js"></script>
	<script src="assets/slidemenu/js/menu.js"></script>
	<script src="assets/foundation/js/foundation.min.js"></script>
	<script src="assets/backgroundVideo.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/galeria_cajas.js"></script>
</body>
</html>
