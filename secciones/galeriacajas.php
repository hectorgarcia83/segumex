<div id="nuestrascajas">
	<div class="cajas">
		<div class="row">
			<div class="small-6 columns small-centered text-center">
				<div class="titulochico">NUESTRA BÓVEDA</div>	
			</div>
		</div>
		<div class="row">
			<div class="small-4 columns small-centered text-center">
				<div class="titulogrande">TIPOS DE CAJAS</div>
			</div>
		</div>
		<div class="row">
			<div class="grid-cajas">
				<div class="small-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-personal">
						<div class="caja-ejemplo personal">
							<img src="media/images/cajas_ejemplos/personal_off.png" alt="" id="img_personal">
						</div>
						<div class="nombre-caja text-center text-center">
							PERSONAL
						</div>
					</a>
				</div>
				<div class="small-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-corporativa">
						<div class="caja-ejemplo corporativa">
							<img src="media/images/cajas_ejemplos/corporativa_off.png" alt="" id="img_corporativa">
						</div>
						<div class="nombre-caja text-center">
							CORPORATIVA
						</div>
					</a>
				</div>
				<div class="small-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-deluxe">
						<div class="caja-ejemplo deluxe">
							<img src="media/images/cajas_ejemplos/deluxe_off.png" alt="" id="img_deluxe">
						</div>
						<div class="nombre-caja text-center">
							DELUXE
						</div>
					</a>
				</div>
				<div class="small-3 columns caja">
					<a href="javascript:void" data-reveal-id="myModal-premium">
						<div class="caja-ejemplo premium">
							<img src="media/images/cajas_ejemplos/premium_off.png" alt="" id="img_premium">
						</div>
						<div class="nombre-caja text-center">
							PREMIUM
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row text-center siguiente">
		<a href="javascript:goToSection(2)" >
			<img src="media/images/icono_flecha-abajo-negra.png" alt="">
		</a>
	</div>
</div>
	<div id="myModal-personal" class="reveal-modal xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 1; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>

	<div id="myModal-corporativa" class="reveal-modal xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 2; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>

	<div id="myModal-deluxe" class="reveal-modal xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 3; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>

	<div id="myModal-premium" class="reveal-modal xlarge" data-reveal aria-hidden="true" role="dialog">
	  <?php $tipo = 4; include("galeria_cajas/mostrar_cajas.php"); ?>
	  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>
	
