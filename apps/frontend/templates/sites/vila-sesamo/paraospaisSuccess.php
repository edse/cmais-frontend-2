<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("cuidadores");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid">
  
    <div class="container-carrossel span12 b-verde borda-arredonda">
      teste<br><br><br>
    <div>  
  </section>
  <!--/section-->

</div> 
<!--/content-->
  
  <!--scripts e css carrossel-->
  <script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
  <script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script>
  <script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
  <script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/hammer.min.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
  <link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/js/responsive-carousel/style-vilasesamo.css"/>
  
  <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script> 
  <script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/youtubeapi.js"></script> 
  
  
  <script>
  //carrossel
  var total=0;
  $('#selector-interna-personagem li').each(function(i){
    var width = $(this).width();
    total = width + total + 14; 
  });
  
  $('#selector-interna-personagem').css('width', total);
  
  $('#carrossel-interna-personagem').responsiveCarousel({
      unitWidth:          'inherit',
      target:             '#carrossel-interna-personagem .slider-target',
      unitElement:        '#carrossel-interna-personagem .slider-target > li',
      mask:               '#carrossel-interna-personagem .slider-mask',
      arrowLeft:          '#carrossel-interna-personagem .arrow-left',
      arrowRight:         '#carrossel-interna-personagem .arrow-right',
      dragEvents:         true,
      step:-1,
      onShift:function (i) {
          var $current = $('#selector-interna-personagem li a[rel=frame_' + i + ']');
          $('#selector-interna-personagem li a').removeClass('current');
          $current.addClass('current');
      },
      slideSpeed: 8000
  });
  
  //$('.arrow, #selector-interna-personagem a').click(function(){
    //slideShow(); 
  //});
  
  $('#selector-interna-personagem a').on('click', function (ev) {
    ev.preventDefault();
    var i = /\d/.exec($(this).attr('rel'));
    $('#carrossel-interna-personagem').responsiveCarousel('goToSlide', i);
    if(!$(this).hasClass('current')){
      playing.pauseVideo();
    } 
    stop();
    slideShow(); 
  });
  
  $(window).on('load', function (ev) {
    ev.preventDefault();
    $('#carrossel-interna-personagem').responsiveCarousel('redraw');
    $('#carrossel-interna-personagem').responsiveCarousel('toggleSlideShow');
    slideShow();
  });
  
  slideShow = function(ev){
    ev.preventDefault();
    $('#carrossel-interna-personagem').responsiveCarousel('toggleSlideShow');
  };
  stop = function(ev){
    ev.preventDefault();
    $('#carrossel-interna-personagem').responsiveCarousel('stopSlideShow');
  };
  </script>
<!--scripts-->

