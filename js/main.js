$(document).ready(function() {
    $(document)
      .foundation()
      .foundation('reveal',{
        animation: 'none'
      });

    $(document).foundation({ "magellan-expedition": { destination_threshold: 85 } });
    
    $('#my-video').backgroundVideo();
    
    $('.camera_wrap').camera({
      height: '400px',
      navigation: false,
      playPause: false,
      pagination: false,
      thumbnails: true,
      autoAdvance: true,
      loader: 'none'
    });
    
    $('.menutipocaja').click(function(){
      var dataTipo = $(this).data('tipo');
      $('#myModal-'+dataTipo).foundation('reveal', 'open');
      
      var item = $('.image-item.active').filter('[data-tipo="'+ dataTipo +'"]');
      $(item).removeClass('active');

      var itemTipoCaja = $('.image-item').filter('[data-tipo="'+ dataTipo +'"]');
      $(itemTipoCaja).filter('[data-item="1"]').addClass('active');
    });

    $('#ico-galeria').mouseover(function(){
      $(this).attr('src','media/images/icono_galeria_blanco.png');
    });

    $('#ico-galeria').mouseout(function(){
      $(this).attr('src','media/images/icono_galeria.png');
    });

    $('#img_personal').mouseover(function(){
      $(this).attr('src','media/images/cajas_ejemplos/personal_on.png');
    });

    $('#img_corporativa').mouseover(function(){
      $(this).attr('src','media/images/cajas_ejemplos/corporativa_on.png');
    });

    $('#img_deluxe').mouseover(function(){
      $(this).attr('src','media/images/cajas_ejemplos/deluxe_on.png');
    });

    $('#img_premium').mouseover(function(){
      $(this).attr('src','media/images/cajas_ejemplos/premium_on.png');
    });

    $('#img_personal').mouseout(function(){
      $(this).attr('src','media/images/cajas_ejemplos/personal_off.png');
    });

    $('#img_corporativa').mouseout(function(){
      $(this).attr('src','media/images/cajas_ejemplos/corporativa_off.png');
    });

    $('#img_deluxe').mouseout(function(){
      $(this).attr('src','media/images/cajas_ejemplos/deluxe_off.png');
    });

    $('#img_premium').mouseout(function(){
      $(this).attr('src','media/images/cajas_ejemplos/premium_off.png');
    });

    $('.caja').mouseover(function(){
      $(this).find('.nombre-caja').addClass('active');
    });

    $('.caja').mouseout(function(){
      $(this).find('.nombre-caja').removeClass('active');
    });


    /**
     * Slide right instantiation and action.
     */
    var slideRight = new Menu({
      wrapper: '#o-wrapper',
      type: 'slide-right',
      menuOpenerClass: '.c-button',
      maskId: '#c-mask'
    });

    var slideRightBtn = document.querySelector('#c-button--slide-right');
    
    slideRightBtn.addEventListener('click', function(e) {
      e.preventDefault;
      slideRight.open();
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
      $('html, body').animate({ scrollTop: $("#formasdepago").offset().top -76 }, 1200);
      break;
    case 3:
      $('html, body').animate({ scrollTop: $("#galeriaimagenes").offset().top -76 }, 1200);
      break;
    case 4:
      $('html, body').animate({ scrollTop: $("#altaseguridad").offset().top -76 }, 1200);
      break;
    case 5:
      $('html, body').animate({ scrollTop: $("#nosotros").offset().top -86 }, 1200);
      break;
    case 6:
      $('html, body').animate({ scrollTop: $("#footer").offset().top -76 }, 1200);
      break;
    
  }
}