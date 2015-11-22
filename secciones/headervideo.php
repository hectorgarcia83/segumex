<?php include("frasesaleatorias.php"); 
$frase = $frases[array_rand($frases, 1)];
?>
<div id="headervideo" class="hide-for-small-only">
	<div class="vid-overlay"></div>
	<div class="horizontalinner">
		<div class="row">
			<div class="medium-3 medium-centered columns section-logo text-center">
				<img src="media/images/logo_SEGUMEX.png" alt="">
			</div>
		</div>
		<div class="row">
			<div class="medium-9 medium-centered columns section-title text-center">
				<?php echo $frase; ?>
			</div>
		</div>
		<div class="row link-rentatucaja text-center">
			<a href="javascript:goToSection(1)">
				RENTA TU CAJA
			</a>
		</div>
		<div class="row text-center siguiente">
			<a href="javascript:goToSection(1)" >
				<img src="media/images/icono_flecha-abajo.png" alt="">
			</a>
		</div>
	</div>
	<div id="video-wrap">
	    <video id="my-video" preload="auto" autoplay loop muted poster="media/videos/top_video.jpg">
	        <source src="media/videos/top_video.mp4" type="video/mp4">
	        <source src="media/videos/top_video.webm" type="video/webm">
	        <source src="media/videos/top_video.ogg" type="video/ogg">
	    </video>
	</div>	
</div>