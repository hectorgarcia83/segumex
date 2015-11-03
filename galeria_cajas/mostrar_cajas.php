<?php  
switch ($_GET["tipo"]) {
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

<div class="bottom-menu">
	<div class="small-7 columns small-centered text-center">
		<ul>
			<li><a href="javascript:cambiarCaja('galeria_cajas/mostrar_cajas.php?tipo=1')">PERSONAL</a></li>
			<li><a href="javascript:cambiarCaja('galeria_cajas/mostrar_cajas.php?tipo=2')">CORPORATIVA</a></li>
			<li><a href="javascript:cambiarCaja('galeria_cajas/mostrar_cajas.php?tipo=3')">DELUXE</a></li>
			<li><a href="javascript:cambiarCaja('galeria_cajas/mostrar_cajas.php?tipo=4')">PREMIUM</a></li>
		</ul>
	</div>
</div>
<script src="js/galeria_cajas.js"></script>