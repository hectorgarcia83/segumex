<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="assets/foundation/js/vendor/jquery.js"></script>
	<script src="assets/camera/jquery.easing.1.3.js"></script>
	<script src="assets/camera/camera.js"></script>
	<link type="text/css" href="assets/camera/camera.css" rel="stylesheet" />
</head>
<body>
	<div class="camera_wrap">
		<!--<div data-src="media/images/galeria_imagenes/galeria_1.jpg"></div>
		<div data-src="media/images/galeria_imagenes/galeria_2.jpg"></div>
		<div data-src="media/images/galeria_imagenes/galeria_3.jpg"></div>
		<div data-src="media/images/galeria_imagenes/galeria_4.jpg"></div>
		<div data-src="media/images/galeria_imagenes/galeria_5.jpg"></div>-->
		<div data-thumb="media/images/galeria_imagenes/thumbs/galeria_1.jpg" data-src="media/images/galeria_imagenes/galeria_6.jpg"></div>
		<div data-thumb="media/images/galeria_imagenes/thumbs/galeria_2.jpg" data-src="media/images/galeria_imagenes/galeria_7.jpg"></div>
		<div data-thumb="media/images/galeria_imagenes/thumbs/galeria_3.jpg" data-src="media/images/galeria_imagenes/galeria_8.jpg"></div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$('.camera_wrap').camera({
			height: '400px',
			navigation: false,
			playPause: false,
			pagination: false,
			thumbnails: true
		});
	});
</script>