
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/home.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="/portal/js/responsive-carousel/style-vilasesamo.css"/>

<!--scripts e css banner-->
<script type="text/javascript" src="/portal/js/layer-slider/jQuery.layerSlider.js"></script>
<script src="/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="/portal/js/hammer.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/portal/js/responsive-carousel/script.js"></script>
<link rel="stylesheet" href="/portal/js/layer-slider/model06/jquery.layerSlider.css">
<link rel="stylesheet" href="/portal/js/layer-slider/model06/main.css">




<div id="content">
  <!-- HEADER -->
  <?php
  include_partial_from_folder('sites/vilasesamo2', 'global/mobile_detect'); 
  $detect = new Mobile_Detect(); 
  if ($detect->isTablet()) {
      // Any tablet device. 
      
      //banner           
      include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipal');
      
    }else if($detect->isMobile()){
      // Any mobile device. 
      
      //banner
      include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipalmobile');  
      
    }else{
      // Any desktop
      
      //banner 
      include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipal'); 
 
    }
   ?>
  <!-- /HEADER -->

  <!--carrossel personagens-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menupersonagens', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
  <!--carrossel personagens-->
  
  <!-- link seções -->
  <section class="bgtotal">
    <span class="divisa1"></span>
    <div class="destaques row-fluid container">
      <section class="span8">
        <article class="span6 jogo">
          <a href="/vilasesamo2/jogos" title="Jogo">
            <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Jogos" />
          </a> 
          <h3><a href="/vilasesamo2/jogos" title="Jogos"><i class="sprite-icon-jogos-grd"></i>Jogo</a></h3>       
        </article>
        <article class="span6 video">
          <a href="/vilasesamo2/clipes" title="Clipes">
            <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Clipes" />
          </a> 
          <h3><a href="/vilasesamo2/clipes" title="Clipes"><i class="sprite-icon-clipes-grd"></i>Clipe</a></h3>       
        </article>
        <article class="span6 atividade">
          <a href="/vilasesamo2/atividades" title="Para Colorir">
            <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Para Colorir" />
          </a> 
          <h3><a href="/vilasesamo2/atividades" title="Para Colorir"><i class="sprite-icon-colorir-grd"></i>Para Colorir</a></h3>       
        </article>
      
      </section>
      <div class="span4 banner" >
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
      </div>
    </div>
  </section>
  <!-- link seções -->
  
</div>



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
