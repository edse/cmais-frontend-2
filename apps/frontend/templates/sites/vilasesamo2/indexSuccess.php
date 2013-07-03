
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vila-sesamo/home.css" type="text/css" />
<script src="/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="/portal/js/responsive-carousel/style-vilasesamo.css"/>




<div id="content">
    <!-- HEADER -->
  <?php
  include_partial_from_folder('sites/vila-sesamo', 'global/mobile_detect'); 
  $detect = new Mobile_Detect(); 
  if ($detect->isTablet()) {
      // Any tablet device. 
      
      //banner           
      include_partial_from_folder('sites/vila-sesamo', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vila-sesamo', 'global/bannerprincipal');
      
    }else if($detect->isMobile()){
      // Any mobile device. 
      
      //banner
      include_partial_from_folder('sites/vila-sesamo', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vila-sesamo', 'global/bannerprincipalmobile');  
      
    }else{
      // Any desktop
      
      //banner 
      include_partial_from_folder('sites/vila-sesamo', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vila-sesamo', 'global/bannerprincipal'); 
      include_partial_from_folder('sites/vila-sesamo', 'global/bannerprincipalmobile');  
    }
   ?>
  <!-- /HEADER -->

  
  <style>
    .inner{position:relative}
    .inner a{overflow: hidden;width:100%; height:100%;}
    .inner a img{position:absolute; top:0;}
  </style>
  
  <section class="bgtotal">
    <div id="carrossel-personagem">
    <span class="divisa1"></span>
    <div class="carrossel-p" id="carrossel-p">
      <div class="slider">
        <div class="header-carrossel-personagens">
          <span class="topo-p"></span>
          <i class="sprite-icon-personagens-peq"></i>
          <h3><a href="/vila-sesamo/personagens">Personagens</a></h3>
          
          <div class="slider-mask-wrap">
            <div class="slider-mask">
              <ul class="slider-target">
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                      <img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/bel_personagem.png" alt="Personagem" />
                    </a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Beto" class="btn-beto"><img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/beto_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Come-come" class="btn-comecome"><img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/comecome_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Elmo" class="btn-elmo"><img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/elmo_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Enio" class="btn-enio"><img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/enio_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Garibaldo" class="btn-garibaldo"><img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/garibaldo_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Grover" class="btn-grover"><img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/grover_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vila-sesamo/beto" title="Zoe" class="btn-zoe"><img src="/portal/images/capaPrograma/vila-sesamo/botoes-carrossel/zoe_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                
              </ul>
              <div class="clearit"></div>
            </div>
          </div>
        </div>  
        <div class="slider-nav">
          <div class="arrow-left arrow personagem">
            <span title="Back" class="sprite-seta-esquerda personagens"></span>
          </div>
          <div class="arrow-right arrow personagem">
            <span title="Next" class="sprite-seta-direita personagens"></span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="bgtotal">
    <span class="divisa1"></span>
    <div class="destaques row-fluid container">
    <section class="span8">
      <article class="span6 jogo">
        <a href="/vila-sesamo/jogos" title="Jogo">
          <img src="/portal/images/capaPrograma/vila-sesamo/escola-pra-cachorro.jpg" alt="Jogos" />
        </a> 
        <h3><a href="/vila-sesamo/jogos" title="Jogos"><i class="sprite-icon-jogos-grd"></i>Jogo</a></h3>       
      </article>
      <article class="span6 video">
        <a href="/vila-sesamo/clipes" title="Clipes">
          <img src="/portal/images/capaPrograma/vila-sesamo/escola-pra-cachorro.jpg" alt="Clipes" />
        </a> 
        <h3><a href="/vila-sesamo/clipes" title="Clipes"><i class="sprite-icon-clipes-grd"></i>Clipe</a></h3>       
      </article>
      <article class="span6 atividade">
        <a href="/vila-sesamo/atividades" title="Para Colorir">
          <img src="/portal/images/capaPrograma/vila-sesamo/escola-pra-cachorro.jpg" alt="Para Colorir" />
        </a> 
        <h3><a href="/vila-sesamo/atividades" title="Para Colorir"><i class="sprite-icon-colorir-grd"></i>Para Colorir</a></h3>       
      </article>
    
    </section>
    <div class="span4 banner" >
      <a href="#" title=""><img src="/portal/images/capaPrograma/vila-sesamo/escola-pra-cachorro.jpg" alt="" /></a>
    </div>
    </div>
  </section>
</div>

<!--scripts e css banner-->
<script type="text/javascript" src="/portal/js/layer-slider/jQuery.layerSlider.js"></script>
<script src="/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<link rel="stylesheet" href="/portal/js/layer-slider/model06/jquery.layerSlider.css">
<link rel="stylesheet" href="/portal/js/layer-slider/model06/main.css">

<script>
/*
$(document).ready(function(){
  $('.mpc_ls_thumb_inside').remove();  
});
*/
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


if(screen.width > 1024){
  $('#carrossel-p').mouseenter(function(){
    $('.arrow.personagem').fadeIn('fast');
  });
  
  $('#carrossel-mobile').mouseenter(function(){
    $('.arrow.destaque-mobile').fadeIn('fast');
  });
};
if(navigator.appName!='Microsoft Internet Explorer')
{
  //carrossel personagens redraw pra tablet e celular home
  window.addEventListener('load', function() {
    $('.carrossel-p, #carrossel-mobile').responsiveCarousel('redraw');
  });
  window.addEventListener("orientationchange", function() {
    $('.carrossel-p, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  window.addEventListener("resize", function() {
    $('.carrossel-p, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  //carrossel personagens redraw pra tablet e celular home
}
/*
var alturaImg;
var alturaBox;
var altura;
$(".inner a img").each(function(i){
  if(i==0){
    $(this).attr("src", $(this).attr("src")).load(function() {
      alert('rodei load');
      alturaImg = this.height;
      alturaBox = $('.inner').height();
      altura = alturaBox - alturaImg;
    });
  }
});
*/
$('.inner.personagens a').mouseenter(function(){
  $(this).find('img').animate({top:-70, easing:"swing"},'fast');
});
$('.inner.personagens a').mouseleave(function(){
  $(this).find('img').stop();
  $(this).find('img').animate({top:0, easing:"swing"},'fast');  
});

<?php
if ($detect->isTablet()) {
?>
  $(document).ready(function(){
    $('.inner.personagens a').each(function(i){
      $(this).find('img').delay(1000 + (i*400)).animate({top:60},'fast');
    });
  });

<?php
}
if($detect->isMobile()){
?>
  $(document).ready(function(){
    $('.inner.personagens a').each(function(i){
      $(this).find('img').delay(1000 + (i*400)).animate({top:-50},'fast');
    });
  }); 
<?php 
}
?>
//carrossel personagens

</script>
