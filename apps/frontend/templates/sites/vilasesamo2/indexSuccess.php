<link rel="stylesheet" href="http://cmais.com.br/portal/js/layer-slider/model06/jquery.layerSlider.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/layer-slider/model06/main.css">

<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/js/responsive-carousel/style-vilasesamo.css"/>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/home.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/layer-slider/jQuery.layerSlider.js"></script>

<!--content-->
<div id="content">
  <!--menu principal && banner promocional-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)); ?>
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipal'); ?>
  <!--/menu principal && banner promocional-->
  
  <!--carrossel personagens-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menupersonagens', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
  <!--carrossel personagens-->
</div>
<!--/content-->

<!--scripts e css banner-->

<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/hammer.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>

<script>
//carrossel personagens home
$('#carrossel-p').responsiveCarousel({
  arrowLeft: '.arrow-left span.personagens',
  arrowRight: '.arrow-right span.personagens',
  target:'#carrossel-p .slider-target',
  unitElement:'#carrossel-p .slider-target > li',
  mask:'#carrossel-p .slider-mask',
  easing:'linear',
  dragEvents:true,
  speed:200,
  slideSpeed:1000,
  responsiveUnitSize : function() {
    return 2;
  },
  step : -1
});

//if(screen.width > 1024){
  $('#carrossel-p').mouseenter(function(){
    $('.arrow.personagem').fadeIn('fast');
  });
  
  $('#carrossel-mobile').mouseenter(function(){
    $('.arrow.destaque-mobile').fadeIn('fast');
  });
//};
if(navigator.appName!='Microsoft Internet Explorer'){
  //carrossel personagens redraw pra tablet e celular home
  window.addEventListener('load', function() {
    $('.carrossel-p, #carrossel-mobile').responsiveCarousel('redraw');
    machineScreenSize();
  });
  window.addEventListener("orientationchange", function() {
    $('.carrossel-p, #carrossel-mobile').responsiveCarousel('redraw');
    machineScreenSize();
  }, false);
  window.addEventListener("resize", function() {
    $('.carrossel-p, #carrossel-mobile').responsiveCarousel('redraw');
    machineScreenSize();
  }, false);
  //carrossel personagens redraw pra tablet e celular home
}

$('.inner.personagens a').mouseenter(function(){
  $(this).find('img').animate({top:-70, easing:"swing"},'fast');
});
$('.inner.personagens a').mouseleave(function(){
  $(this).find('img').stop();
  $(this).find('img').animate({top:0, easing:"swing"},'fast');  
});

/*
//carrossel personagens
function windowSize(){
  if(screen.width >= 640){
    $('#carrossel-destaque').css('display','block');
    $('#carrossel-destaque-mobile').css('display','none');
  }else{
    $('#carrossel-destaque').css('display','none');
    $('#carrossel-destaque-mobile').css('display','block');
  }
}
function machineScreenSize(){
  //alert(window.innerWidth);
  //alert(window.screen.width);
  var ua = navigator.userAgent.toLowerCase();
  //alert(ua);

  if(ua.indexOf("mobile") > -1 && (ua.indexOf("iphone") > -1 || ua.indexOf("android") > -1)) {
    //alert("Aplicar Versão Mobile");
    botoesPersonagensMobile();
    //Verificar Windows Phone
  }else{
    if(window.screen.width <= 640){
      //alert("Aplicar Versão Mobile");
      botoesPersonagensMobile();
      
    }else if(window.screen.width <= 1024){
      //alert("Aplicar Versão TABLET");
      botoesPersonagensTablet();
    }else{
      //alert("Aplicar Versão Desktop");

    }
  }
}

function botoesPersonagensMobile(){
  $('.inner.personagens a').each(function(i){
    $(this).find('img').delay(1000 + (i*400)).animate({top:-50},'fast');
  });
}

function botoesPersonagensTablet(){
  $('.inner.personagens a').each(function(i){
    $(this).find('img').delay(1000 + (i*400)).animate({top:60},'fast');
  });
}
*/
</script>