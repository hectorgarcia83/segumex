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
					<a href="javascript:void" data-tipo="personal" class="showcajadetail">
						<div class="caja-ejemplo personal">
							<img src="media/images/cajas_ejemplos/personal_off.png" alt="" id="img_personal">
						</div>
						<div class="nombre-caja text-center text-center">
							PERSONAL
						</div>
					</a>
				</div>
				<div class="small-3 columns caja">
					<a href="javascript:void" data-tipo="corporativa" class="showcajadetail">
						<div class="caja-ejemplo corporativa">
							<img src="media/images/cajas_ejemplos/corporativa_off.png" alt="" id="img_corporativa">
						</div>
						<div class="nombre-caja text-center">
							CORPORATIVA
						</div>
					</a>
				</div>
				<div class="small-3 columns caja">
					<a href="javascript:void" data-tipo="deluxe" class="showcajadetail">
						<div class="caja-ejemplo deluxe">
							<img src="media/images/cajas_ejemplos/deluxe_off.png" alt="" id="img_deluxe">
						</div>
						<div class="nombre-caja text-center">
							DELUXE
						</div>
					</a>
				</div>
				<div class="small-3 columns caja">
					<a href="javascript:void" data-tipo="premium" class="showcajadetail">
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

	<div id="galeria-personal" class="galeria-cajas">
		<?php $tipo = 1; include("galeria_cajas/mostrar_cajas.php"); ?>
	</div>
	<div id="galeria-corporativa" class="galeria-cajas">
		<?php $tipo = 2; include("galeria_cajas/mostrar_cajas.php"); ?>
	</div>
	<div id="galeria-deluxe" class="galeria-cajas">
		<?php $tipo = 3; include("galeria_cajas/mostrar_cajas.php"); ?>
	</div>
	<div id="galeria-premium" class="galeria-cajas">
		<?php $tipo = 4; include("galeria_cajas/mostrar_cajas.php"); ?>
	</div>
</div>