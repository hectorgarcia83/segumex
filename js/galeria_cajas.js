$(document).ready(function() {
	$('.arrow-left').click(function(){
		var itemActivo = $('.image-item.active').data('item');
		$('.image-item.active').removeClass('active');
		if(itemActivo == 1){
			$("div").find("[data-item='" + $('.image-item').length + "']").addClass('active');
		}else{
			var nuevoItem = parseInt(itemActivo)-1;
			$("div").find("[data-item='" + nuevoItem + "']").addClass('active');
		}
	});

	$('.arrow-right').click(function(){
		var itemActivo = $('.image-item.active').data('item');
		$('.image-item.active').removeClass('active');
		if(itemActivo == $('.image-item').length){
			$("div").find("[data-item='" + 1 + "']").addClass('active');
		}else{
			var nuevoItem = parseInt(itemActivo)+1;
			$("div").find("[data-item='" + nuevoItem + "']").addClass('active');
		}
	});
});

function cambiarCaja(url){
	$("#project-content").load(url);
}