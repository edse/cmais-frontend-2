<section class="bgtotal">
  <div id="carrossel-personagem">
    <span class="divisa1"></span>
    <div class="carrossel-p" id="carrossel-p">
      <div class="slider">
        <div class="header-carrossel-personagens">
          <span class="topo-p"></span>
          <i class="sprite-icon-personagens-peq"></i>
          <h3><a href="/vilasesamo2/personagens">Personagens</a></h3>
          
          <div class="slider-mask-wrap">
            <div class="slider-mask">
              <ul class="slider-target">
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/beto" title="Bel" class="btn-bel">
                      <img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/bel_personagem.png" alt="Personagem" />
                    </a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/personagens/beto" title="Beto" class="btn-beto"><img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/beto_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/personagens/come-come" title="Come-come" class="btn-comecome"><img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/comecome_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/personagens/elmo" title="Elmo" class="btn-elmo"><img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/elmo_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/personagens/enio" title="Enio" class="btn-enio"><img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/enio_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/personagens/garibaldo" title="Garibaldo" class="btn-garibaldo"><img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/garibaldo_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/personagens/grover" title="Grover" class="btn-grover"><img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/grover_personagem.png" alt="Personagem" /></a>
                  </div>
                </li>
                <li>
                  <div class="inner personagens">
                    <a href="/vilasesamo2/personagens/zoe" title="Zoe" class="btn-zoe"><img src="/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/zoe_personagem.png" alt="Personagem" /></a>
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