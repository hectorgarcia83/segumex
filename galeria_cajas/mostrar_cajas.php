<?php  
switch ($tipo) {
	case 1:
		$tipoCaja = "PERSONAL";
		$include = "personal.php";
		break;
	case 2:
		$tipoCaja = "CORPORATIVA";
		$include = "corporativa.php";
		break;
	case 3:
		$tipoCaja = "DELUXE";
		$include = "deluxe.php";
		break;
	case 4:
		$tipoCaja = "PREMIUM";
		$include = "premium.php";
		break;
}
?>
<div class="row">
	<div class="small-1 small-offset-11 columns text-right">
		<a href="void:" class="cerrarGaleriaDetail" data-tipo="<?php echo strtolower($tipoCaja); ?>">
			<i class="fa fa-times"></i>
		</a>
	</div>
</div>
<div class="row">
	<div class="small-6 columns small-centered text-center">
		<div class="titulochico">NUESTRAS CAJAS</div>	
	</div>
</div>
<div class="row">
	<div class="small-4 columns small-centered text-center">
		<div class="titulogrande"><?php echo $tipoCaja; ?></div>
	</div>
</div>

<div class="row">
	<div class="small-6 columns small-centered text-center slide-img">
		<?php include($include); ?>
	</div>
</div>
<!--
<div class="row">
	<div class="arrows">
		<div class="small-2 columns small-centered text-center">
			<div class="small-6 columns text-right">
				<a href="void:" class="arrow-left"><i class="fa fa-angle-left"></i></a>
			</div> 
			<div class="small-6 columns text-left">
				<a href="void:" class="arrow-right"><i class="fa fa-angle-right"></i></a>
			</div> 
		</div>
	</div>
</div>
-->
<div class="bottom-menu">
	<div class="small-7 columns small-centered text-center">
		<ul>
			<li><a data-tipo="personal" href="void:" class="menutipocaja">PERSONAL</a></li>
			<li><a data-tipo="corporativa" href="void:" class="menutipocaja">CORPORATIVA</a></li>
			<li><a data-tipo="deluxe" href="void:" class="menutipocaja">DELUXE</a></li>
			<li><a data-tipo="premium" href="void:" class="menutipocaja">PREMIUM</a></li>
		</ul>
	</div>
</div>
<!--<script src="js/galeria_cajas.js"></script>-->