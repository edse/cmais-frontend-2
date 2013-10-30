<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/js/responsive-carousel/style-vilasesamo.css"/>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/home.css" type="text/css" />

<!--content-->
<div id="content">
  <!--menu principal && banner promocional-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)); ?>
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipal'); ?>
  <!--/menu principal && banner promocional-->
  
  <!--carrossel personagens-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menupersonagens', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
  <!--carrossel personagens-->
  
  <!-- link seções -->
  <section class="bgtotal">
    
    <span class="divisa1"></span>
    <!--destaques-->
    <div class="destaques row-fluid container">
      <!--section-->
      <section class="span8">
        
        <article class="span6 jogo">
          <a href="#" title="">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
            <i class="sprite-icons-new sprite-icone_atividade"></i>
            <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo1 Nomejogo3 Nomejogo3</div>
          </a>
        </article>
        
        <article class="span6 jogo">
          <a href="#" title="">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
            <i class="sprite-icons-new sprite-icone_atividade"></i>
            <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo1 Nomejogo3 Nomejogo3</div>
          </a>
        </article>
        
        <article class="span6 jogo">
          <a href="#" title="">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
            <i class="sprite-icons-new sprite-icone_atividade"></i>
            <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo1 Nomejogo3 Nomejogo3</div>
          </a>
        </article>
        
      </section>
      <!--section-->
      <div class="span4 banner" >
        <a href="#" title="Incluir Brincando" class="sprite-btn-incluir"></a>
        <a href="#" title="Hábitos para uma vida saudável" class="sprite-btn-habitos"></a>
        <a href="#" title="O que achou do novo site?" class="sprite-btn-contato"></a>
      </div>
    </div>
    <!--destaques-->
    
  </section>
  <!-- link seções -->
  
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

$('.inner.personagens a').mouseenter(function(){
  $(this).find('img').animate({top:-70, easing:"swing"},'fast');
});
$('.inner.personagens a').mouseleave(function(){
  $(this).find('img').stop();
  $(this).find('img').animate({top:0, easing:"swing"},'fast');  
});

$('.mpc_ls_thumb, .mpc_ls_prev_slide, .mpc_ls_next_slide').attr('role','presentation').attr('aria-hidden','true').attr('tabindex', '100'); 

</script>