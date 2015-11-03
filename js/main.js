$(document).ready(function() {

    $("#hider").hide();
    $("#popup_box").hide();

    $("#showpopup").click(function () {
        $("#hider").fadeIn("slow");
        $('#popup_box').fadeIn("slow");
        $("#contentDialog").load("galeria_cajas/mostrar_cajas.php?tipo=1");
        $("html").css({
            overflow: 'hidden'
        });
    });

    //on click hide the message and the
    $("#buttonClose").click(function () {

        $("#hider").fadeOut("slow");
        $('#popup_box').fadeOut("slow");
    });

    /*$('#openModal').click(function(){
      $("html").css({
          overflow: 'hidden'
      });
      $("#contentDialog").load("galeria_cajas.php?tipo=1");
    });

    $('#closeModal').click(function(){
      jQuery("html").css({
          overflow: 'auto'
      });
    });*/


    $('#my-video').backgroundVideo();
    $(document).foundation();

    $('#ico-galeria').mouseover(function(){
      $(this).attr('src','media/images/icono_galeria_blanco.png');
    });

    $('#ico-galeria').mouseout(function(){
      $(this).attr('src','media/images/icono_galeria.png');
    });

    $('.caja').mouseover(function(){
      $(this).find('.nombre-caja').addClass('active');
    });

    $('.caja').mouseout(function(){
      $(this).find('.nombre-caja').removeClass('active');
    });

    $('.open-project').click(function(){
      /*$('#header').hide();
      $('#conocenos').hide();
      $('#formasdepago').hide();
      $('#misionvision').hide();
      $('#footer').hide();*/
      
      var projectUrl = $(this).attr("href");      
      
      $('#project-content').animate({opacity:0}, 400,function(){
        $("#project-content").load(projectUrl);
        $('#project-content').delay(400).animate({opacity:1}, 400);
      });  
      
      //Project Page Open
      $('#project-extended').slideUp(600, function(){
        $('#project-extended').addClass('open');
        $('html, body').animate({ scrollTop: $(".portfolio-bottom").offset().top }, 900);
      }).delay(500).slideDown(600,function(){          
          $('#project-content').fadeIn('slow',function(){
            
          });
      });

      return false;       
    
    });

    //Project Page Close
    $('#close-project').click(function(event) {
      $('#project-content').animate({opacity:0}, 400,function(){
        $('#project-extended').delay(400).slideUp(400).removeClass('open');
        $('html, body').animate({ scrollTop: $(".portfolio-top").offset().top -60}, 900);
      });
      return false;
    });

    $('#close-project-galeria').click(function(event) {
      $('#project-content-galeria').animate({opacity:0}, 400,function(){
        $('#project-extended-galeria').delay(400).slideUp(400).removeClass('open');
        //$('html, body').animate({ scrollTop: $(".portfolio-top-galeria").offset().top -60}, 900);
        $('html, body').animate({ scrollTop: $("#conocenos").offset().top -76 }, 900);
        //goToSection(2);
      });
      return false;
    });
});

function abrirGaleriaImagenes(){
  var projectUrl = "galeriaimagenes.php"
    
  $('#project-content-galeria').animate({opacity:0}, 400,function(){
    $("#project-content-galeria").load(projectUrl);
    $('#project-content-galeria').delay(400).animate({opacity:1}, 400);
  });  
  
  //Project Page Open
  $('#project-extended-galeria').slideUp(600, function(){
    $('#project-extended-galeria').addClass('open');
    $('html, body').animate({ scrollTop: $(".portfolio-bottom-galeria").offset().top }, 900);
  }).delay(500).slideDown(600,function(){          
      $('#project-content-galeria').fadeIn('slow',function(){
        
      });
  });

  return false;  
}

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