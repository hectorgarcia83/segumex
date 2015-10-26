<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Segumex</title>

	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="assets/foundation/css/foundation.css">

	<!-- Fonts
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->	
</head>
<body>
	<!--
	<div id="parallax-video" class="horizontalsection text-light videobg-section" style="position: relative; overflow: hidden; z-index: 1;">
		<div class="vid-overlay" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; z-index: -2; backface-visibility: hidden; transform: translateZ(0px); opacity: 0.5; background: rgb(0, 0, 0);">
		</div>
		              
       	<div class="horizontalinner wrapper">
    		<div class="section-title sr-animation animated">
              	<h2>Parallax Video</h2>
             		<div class="seperator size-small"><span></span></div>
              	<h4 class="subtitle">Xone supports <strong>Background videos</strong> with an optional parallax effect, <br>
                and you can also link to an external video.</h4>
        	</div>
              <h6 class="align-center sr-animation sr-animation-frombottom animated"><strong>See the Video</strong></h6>
          		<p class="align-center sr-animation sr-animation-frombottom animated" data-delay="200">
                <a href="http://player.vimeo.com/video/50834315" data-type="video" data-width="500" data-height="281" class="sr-button sr-buttonicon medium-button easy-opener"><i class="fa fa-play fa-fw"></i></a>
              </p>
      	</div>   
		<div class="vid-bg" style="position: absolute; width: 1468px; height: 825.75px; top: 0px; left: 0px; z-index: -10; background: url(http://www.spab-rice.com/themeforest/xone/demo/files/uploads/video-poster.jpg) 50% 50% / cover;">
			<video id="video0" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="files/uploads/video-poster.jpg" style="top: 342px; left: 0px; position: relative; z-index: -11; width: 1468px; height: 825.75px;"><source src="files/uploads/steven.mp4" type="video/mp4"><source src="files/uploads/steven.ogg" type="video/ogg"><source src="files/uploads/steven.webm" type="video/webm">bgvideo
			</video>
		</div>
	</div>
	-->

	<section id="header">
		<div id="headervideo">
			<div class="vid-overlay"></div>
			<div class="horizontalinner">
				<div class="row">
					<div class="small-12 small-centered columns section-logo text-center">
						<img src="media/images/logo.png" alt="">
					</div>
				</div>
				<div class="row">
					<div class="small-12 small-centered columns section-title text-center">
						¿QUIÉRES <span>PROTEGER</span> TU<br><span>PATRIMONIO</span>?
					</div>
				</div>
				<div class="row">
					<div class="small-12 small-centered columns section-sigueme text-center">
						<img src="media/images/sigueme.png" alt="">
					</div>
				</div>
			</div>
			<div id="video-wrap">
			    <video id="my-video" preload="auto"  loop="loop" muted="muted" poster="media/videos/videoejemplo.jpg">
			        <source src="media/videos/videoejemplo.mp4" type="video/mp4">
			        <source src="media/videos/videoejemplo.mp4" type="video/webm">
			    </video>
			</div>	
		</div>
	</section>
	
	


	<!-- Scripts -->
	<script src="assets/foundation/js/vendor/jquery.js"></script>
	<script src="assets/backgroundVideo.min.js"></script>

	<script>
	    $(document).ready(function() {
	        $('#my-video').backgroundVideo();
	    });
	</script>
</body>
</html>
