$(document).ready(function() {
	$('.arrow-left').click(function(){
		var tipoCaja = $(this).data('tipo');
		var item = $('.image-item.active').filter('[data-tipo="'+ tipoCaja +'"]');
		var itemActivo = $(item).data('item');

		$(item).removeClass('active');
		if(itemActivo == 1){
			var itemTipoCaja = $('.image-item').filter('[data-tipo="'+ tipoCaja +'"]');
			$(itemTipoCaja).filter('[data-item="'+ $('.image-item').filter('[data-tipo="'+ tipoCaja +'"]').length +'"]').addClass('active');
		}else{
			var nuevoItem = parseInt(itemActivo)-1;
			var itemTipoCaja = $('.image-item').filter('[data-tipo="'+ tipoCaja +'"]');
			$(itemTipoCaja).filter('[data-item="'+ nuevoItem +'"]').addClass('active');
		}
	});

	$('.arrow-right').click(function(){
		var tipoCaja = $(this).data('tipo');
		var item = $('.image-item.active').filter('[data-tipo="'+ tipoCaja +'"]');
		var itemActivo = $(item).data('item');

		$(item).removeClass('active');
		if(itemActivo == $('.image-item').filter('[data-tipo="'+ tipoCaja +'"]').length){
			var itemTipoCaja = $('.image-item').filter('[data-tipo="'+ tipoCaja +'"]');
			$(itemTipoCaja).filter('[data-item="1"]').addClass('active');
		}else{
			var nuevoItem = parseInt(itemActivo)+1;
			var itemTipoCaja = $('.image-item').filter('[data-tipo="'+ tipoCaja +'"]');
			$(itemTipoCaja).filter('[data-item="'+ nuevoItem +'"]').addClass('active');
		}
	});
});