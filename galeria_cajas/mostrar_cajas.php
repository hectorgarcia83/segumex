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
	<div class="small-1 small-offset-2 columns div-left">
		<a href="javascript:void" class="arrow-left" data-tipo="<?php echo strtolower($tipoCaja); ?>">
			<i class="fa fa-angle-left"></i>
		</a>
	</div>
	<div class="small-6 columns text-center slide-img">
		<?php include($include); ?>
	</div>
	<div class="small-1 end columns div-right">
		<a href="javascript:void" class="arrow-right" data-tipo="<?php echo strtolower($tipoCaja); ?>">
			<i class="fa fa-angle-right"></i>
		</a>
	</div>
</div>

<div class="bottom-menu hide-for-small-only">
	<div class="small-7 columns small-centered text-center">
		<ul>
			<li><a data-tipo="personal" href="javascript:void" class="menutipocaja <?php echo ($tipo==1)?'active':'';?>">PERSONAL</a></li>
			<li><a data-tipo="corporativa" href="javascript:void" class="menutipocaja <?php echo ($tipo==2)?'active':'';?>">CORPORATIVA</a></li>
			<li><a data-tipo="deluxe" href="javascript:void" class="menutipocaja <?php echo ($tipo==3)?'active':'';?>">DELUXE</a></li>
			<li><a data-tipo="premium" href="javascript:void" class="menutipocaja <?php echo ($tipo==4)?'active':'';?>">PREMIUM</a></li>
		</ul>
	</div>
</div>