$window = $(window);

$window.scroll(function() {
  var distanciaHeader = 0;
  var distanciaTiposCajas = $('#header').height();
  var distanciaAltaSeguridad = $('#header').height() + $('#galeriacajas').height()+110;
  var distanciaGaleria = distanciaAltaSeguridad + $('#altaseguridad').height()+45;
  var distanciaFormasDePago = distanciaGaleria + $('#galeriaimagenes').height()+55;
  var distanciaNosotros = distanciaFormasDePago + $('#formasdepago').height()+125;
  var distanciaFooter = distanciaNosotros + $('#nosotros').height()+110;

  position = $window.scrollTop();
  if ( position >= distanciaHeader && position < distanciaTiposCajas ) {
    $('#menu-titulo').html('');
  }else if ( position >= distanciaTiposCajas && position < distanciaAltaSeguridad ) {
    $('#menu-titulo').html('TIPOS DE CAJAS');
  }else if ( position >= distanciaAltaSeguridad && position < distanciaGaleria ) {
    $('#menu-titulo').html('ALTA SEGURIDAD');
  }else if ( position >= distanciaGaleria && position < distanciaFormasDePago) {
    $('#menu-titulo').html('GALERIA DE IMÁGENES');
  }else if ( position >= distanciaFormasDePago && position < distanciaNosotros) {
    $('#menu-titulo').html('FORMAS DE PAGO');
  }else if ( position >= distanciaNosotros && position < distanciaFooter) {
    $('#menu-titulo').html('NOSOTROS');
  }else if ( position >= distanciaFooter ) {
    $('#menu-titulo').html('CONTÁCTANOS');
  }
});