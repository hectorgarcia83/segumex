$(document).ready(function() {

    $('#my-video').backgroundVideo();
    $(document).foundation();

    $('.camera_wrap').camera({
      height: '400px',
      navigation: false,
      playPause: false,
      pagination: false,
      thumbnails: true,
      autoAdvance: true
    });
    

    $(".showcajadetail").click(function(){
      ocultarPagina();
      var dataTipo = $(this).data('tipo');
      $('#galeria-'+dataTipo).fadeIn("slow", function(){
        $('html, body').animate({ scrollTop: 0 }, 900);
      });
    });

    $(".cerrarGaleriaDetail").click(function () {
      var dataTipo = $(this).data('tipo');
      $('#galeria-'+dataTipo).fadeOut("slow",function(){
        mostrarPagina();
        goToSection(1);
      });  
      return false;
    });

    $('.menutipocaja').click(function(){
      $('.galeria-cajas').hide();
      var dataTipo = $(this).data('tipo');
      $('#galeria-'+dataTipo).show();
    });

    $('#ico-galeria').mouseover(function(){
      $(this).attr('src','media/images/icono_galeria_blanco.png');
    });

    $('#ico-galeria').mouseout(function(){
      $(this).attr('src','media/images/icono_galeria.png');
    });

    $(".link-galeria").click(function(){
      ocultarPagina();
      //$('.galeria-imagenes').show();
      $('.galeria-imagenes').fadeIn("slow", function(){
        $('html, body').animate({ scrollTop: 0 }, 900);
      });
    });

    $(".cerrarGaleriaImagenes").click(function () {
      $('.galeria-imagenes').fadeOut("slow",function(){
        mostrarPagina();
        goToSection(2);
      });  
      return false;
    });

    $('.caja').mouseover(function(){
      $(this).find('.nombre-caja').addClass('active');
    });

    $('.caja').mouseout(function(){
      $(this).find('.nombre-caja').removeClass('active');
    });
});

function goToSection(item){
  switch(item){
    case 0:
      $('html, body').animate({ scrollTop: 0 }, 1200);
      break;
    case 1:
      $('html, body').animate({ scrollTop: $("#galeriacajas").offset().top -125 }, 1200);
      break;
    case 2:
      $('html, body').animate({ scrollTop: $("#conocenos").offset().top -76 }, 1200);
      break;
    case 3:
      $('html, body').animate({ scrollTop: $("#formasdepago").offset().top -76 }, 1200);
      break;
    case 4:
      $('html, body').animate({ scrollTop: $("#misionvision").offset().top -86 }, 1200);
      break;
    case 5:
      $('html, body').animate({ scrollTop: $("#footer").offset().top -76 }, 1200);
      break;
  }
}

function ocultarPagina(tipoGaleria){
  $('#header').hide();
  $('#conocenoscontent').hide();
  $('#formasdepago').hide();
  $('#misionvision').hide();
  $('#footer').hide();
  $('#nuestrascajas').hide();
}

function mostrarPagina(){
  $('#header').show();
  $('#conocenoscontent').show();
  $('#formasdepago').show();
  $('#misionvision').show();
  $('#footer').show();
  $('#nuestrascajas').show();
}