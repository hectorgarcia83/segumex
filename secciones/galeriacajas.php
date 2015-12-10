<div id="nuestrascajas">
	<div class="cajas">
		<div class="row">
			<div class="grid-cajas">
				<div class="small-12 medium-6 large-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-personal">
						<div class="small-9 large-12 columns small-centered caja-ejemplo text-center personal">
							<img src="media/images/cajas_ejemplos/personal_off.png" alt="" id="img_personal" class="show-for-large-only">
							<img src="media/images/cajas_ejemplos/personal_on.png" alt="" id="img_personal" class="show-for-medium-only">
							<img src="media/images/cajas_ejemplos/personal_on.png" alt="" id="img_personal" class="show-for-small-only">
						</div>
						<div class="small-10 columns small-centered nombre-caja text-center text-center">
							PERSONAL
						</div>
					</a>
				</div>
				<div class="small-12 medium-6 large-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-corporativa">
						<div class="small-9 large-12 columns small-centered caja-ejemplo text-center corporativa">
							<img src="media/images/cajas_ejemplos/corporativa_off.png" alt="" id="img_corporativa" class="show-for-large-only">
							<img src="media/images/cajas_ejemplos/corporativa_on.png" alt="" id="img_corporativa" class="show-for-medium-only">
							<img src="media/images/cajas_ejemplos/corporativa_on.png" alt="" id="img_corporativa" class="show-for-small-only">
						</div>
						<div class="small-10 columns small-centered nombre-caja text-center">
							CORPORATIVA
						</div>
					</a>
				</div>
				<div class="small-12 medium-6 large-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-deluxe">
						<div class="small-9 large-12 columns small-centered caja-ejemplo text-center deluxe">
							<img src="media/images/cajas_ejemplos/deluxe_off.png" alt="" id="img_deluxe" class="show-for-large-only">
							<img src="media/images/cajas_ejemplos/deluxe_on.png" alt="" id="img_deluxe" class="show-for-medium-only">
							<img src="media/images/cajas_ejemplos/deluxe_on.png" alt="" id="img_deluxe" class="show-for-small-only">
						</div>
						<div class="small-10 columns small-centered nombre-caja text-center">
							DELUXE
						</div>
					</a>
				</div>
				<div class="small-12 medium-6 large-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-premium">
						<div class="small-9 large-12 columns small-centered caja-ejemplo text-center premium">
							<img src="media/images/cajas_ejemplos/premium_off.png" alt="" id="img_premium" class="show-for-large-only">
							<img src="media/images/cajas_ejemplos/premium_on.png" alt="" id="img_deluxe" class="show-for-medium-only">
							<img src="media/images/cajas_ejemplos/premium_on.png" alt="" id="img_deluxe" class="show-for-small-only">
						</div>
						<div class="small-10 columns small-centered nombre-caja text-center">
							PREMIUM
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row text-center siguiente">
		<a href="javascript:goToSection(4)" >
			<img src="media/images/icono_flecha-abajo-negra.png" alt="">
		</a>
	</div>
</div>
	<div id="myModal-personal" class="reveal-modal reveal-modal-cajas xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 1; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>

	<div id="myModal-corporativa" class="reveal-modal reveal-modal-cajas xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 2; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>

	<div id="myModal-deluxe" class="reveal-modal reveal-modal-cajas xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 3; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>

	<div id="myModal-premium" class="reveal-modal reveal-modal-cajas xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 4; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>
	
