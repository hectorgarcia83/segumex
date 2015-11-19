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
	<link rel="icon" type="image/png" href="media/favicon.ico">
</head>
<body>
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

	<section id="altaseguridad">
		<?php include("secciones/altaseguridad.php"); ?> 
	</section>
	
	<section id="galeriaimagenes">
		<?php include("secciones/galeriaimagenes.php"); ?>
	</section>

	<section id="formasdepago">
		<?php include("secciones/formasdepago.php"); ?> 
	</section>

	<section id="nosotros">
		<?php include("secciones/nosotros.php") ?>
	</section>
	
	<section id="footer">
		<?php include("secciones/footer.php"); ?> 
	</section>

	<?php include("secciones/menulateral.php") ?>
	<!-- Scripts -->
	<script src="assets/foundation/js/vendor/modernizr.js"></script>
	<script src="assets/foundation/js/vendor/jquery.js"></script>
	<script src="assets/foundation/js/foundation.min.js"></script>
	<script src="assets/foundation/js/foundation/foundation.reveal.js"></script>
	<script src="assets/camera/jquery.easing.1.3.js"></script>
	<script src="assets/camera/camera.js"></script>
	<script src="assets/slidemenu/js/menu.js"></script>
	<script src="assets/backgroundVideo.min.js"></script>
	<script src="assets/jquery.sticky.js"></script>
	<script src="assets/scrolled.js"></script>
	<script src="js/main.js"></script>
	<script src="js/galeria_cajas.js"></script>
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
		<script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
		<script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
	<![endif]-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-32840860-12', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>