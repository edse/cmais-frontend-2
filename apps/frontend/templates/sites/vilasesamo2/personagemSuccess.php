<link rel="stylesheet" href="http://cmais.com.br/portal/js/layer-slider/model06/jquery.layerSlider.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/layer-slider/model06/main.css">

<link type="text/css" rel="stylesheet" href="http:/cmais.com.br//portal/js/responsive-carousel/style-vilasesamo.css"/>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/home.css" type="text/css" />

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<script>
  $("body").addClass("interna personagens");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->
<div id="content">
  <div class="section filtro row-fluid">
    <div class="span12">
      <?php
        include_partial_from_folder('sites/vilasesamo2', 'global/mobile_detect'); 
        $detect = new Mobile_Detect(); 
        if ($detect->isTablet() || $detect->isMobile()) {
            // Any tablet device.
      ?> 
         <!--script--> 
         <script type="text/javascript" src="http://cmais.com.br/portal/js/smint/jquery.smint.js"></script>  
         <script type="text/javascript" src="http://cmais.com.br/portal/js/superscrollorama/greensock/TweenMax.min.js"></script> 
         <script type="text/javascript" src="http://cmais.com.br/portal/js/superscrollorama/jquery.superscrollorama.js"></script>
         
         <section class="scroll barra-topo row-fluid" >
           <a href="#content"></a>
           <h3>
             <i class="sprite-icon-jogos-med"></i>Jogos<i class="seta-scroll sprite-scroll-jogos"></i>
           </h3>
         </section>
         
         <script type="text/javascript">
       
            var controller = $.superscrollorama({reverse:true, triggerAtCenter:false}); 
            controller.addTween('.filtro', TweenMax.from( $('.barra-topo'), .5, {css:{opacity: 0}}));
            $('.barra-topo').smint();
         </script> 
        <?php
        }
        ?>   
      
      <h3><i class="sprite-icon-personagens-med"></i>Personagens</h3>
      
      <div class="span10 destaque-filtro">
        <div class="section" id="carrossel-destaque-mobile">
  <!--inicio carrossel--> 
  <div id="carrossel-mobile">
    <!--slider-->
    <div class="slider">
      <!--slider-mask-wrap-->
      <div class="slider-mask-wrap">
        <!--slider-mask-->
        <div class="slider-mask">
          <!--slider-mask-wrap--> 
          <ul class="slider-target">
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
          </ul>
          <!--slider-mask-->
          <div class="clearit"></div>
        </div>
      </div>
      <!--slider-mask-wrap--> 
      <!--slider-nav-->
      <div class="slider-nav">
        <div class="arrow-left arrow"><span title="Anterior" class="back"></span></div>
        <div class="arrow-right arrow"><span title="Proximo" class="next"></span></div>
      </div> 
      <!--slider-nav-->
    </div>
    <!--/slider-->
  </div>
  <!--/inicio carrossel--> 
  <!--seletor carrossel-->
    <ul id="selector-mobile">
      <li><a href="#" rel="frame_0"></a></li>
      <li><a href="#" rel="frame_1"></a></li>
      <li><a href="#" rel="frame_2"></a></li>
      <li><a href="#" rel="frame_3"></a></li>
      <li><a href="#" rel="frame_4"></a></li>
      <li><a href="#" rel="frame_5"></a></li>
    </ul>

  <!--/seletor carrossel-->   
</div>
      </div>
      <nav class="span2">
        <p>escolha por personagem<span class="sprite-seta-down"></span></p>
        
        <ul class="filtro-personagem">
          <li><a href="javascript:;" title="" data-filter=".bel"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".beto"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".come-come"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".elmo"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".enio"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".garibaldo"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".grover"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".zoe"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
        </ul>
      </nav>
    </div>
    
  </div>

  <span class="divisa"></span>
  <!-- link seções -->
  <div class="section vamosbrincar">
    <span class="divisa1"></span>
    <div class="destaques row-fluid container">
       <div class="span4 banner">
         <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/tit-vamos-brincar.png" alt="Vamos Brincar!" />
         <img class="thumb-personagem" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/bel-interna.png" alt="Bel" />
       </div>
      <div class="span8">
        <div class="span6 jogo">
          <a href="/vilasesamo2/jogos" title="Jogo">
            <i class="sprite-icon-jogos-peq"></i>Jogos
            
          </a>
          <a href="/vilasesamo2/jogos" class="img" ><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Jogos" /></a> 
          <a class="asset" href="/vilasesamo2/jogos-interna" title="Jogos">Nome do Jogo</a>  
        </div>
        <div class="span6 video">
          <a href="/vilasesamo2/clipes" title="Vídeos">
            <i class="sprite-icon-videos-peq"></i>Vídeos
            
          </a>
          <a href="/vilasesamo2/clipes" class="img"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Clipes" /></a> 
          <a class="asset" href="/vilasesamo2/videos-interna" title="Clipes">Nome do Video</a>      
        </div>
        <div class="span6 atividade">
          <a href="/vilasesamo2/atividades" title="Atividades">
            <i class="sprite-icon-atividades-peq"></i>atividades
            
          </a> 
          <a href="/vilasesamo2/atividades" class="img" ><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Atividades" /></a>
          <a class="asset" href="/vilasesamo2/atividades-interna" title="Para Colorir">Nome da atividade</a>       
        </div>
      
      </div>
      <div class="span12">
        <p>Mais brincadeiras:</p>
      </div>
     
    </div>
  </div>
  <!-- link seções -->
  <input type="hidden" id="filter-choice" value="">
  <div id="page_nav">
    <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="sprite-icon-mais"></i></a>
  </div>
  
  <div class="section pais">
    <span class="divisa"></span>
    <h2>Para adultos <span class="sprite-seta-down"></span></h2>
    <div class="redes">
        <p>Compartilhe esta brincadeira:</p>
        <g:plusone size="medium" count="false"></g:plusone>
        <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pinterest" style="margin-top:-10px;" /></a>
        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura" style="width: 80px;">Tweet</a>
      </div>
    <div class="content span12 row-fluid">
      
      
      <div class="span4 dica">
        
        <h2><span class="sprite-aspa-esquerda"></span><a href="#">Nome da Dica</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend. Duis vel mauris et nunc posuere vehicula a id arcu. Maecenas malesuada ante ac consequat viverra. Vivamus tempor, nulla quis facilisis ullamcorper, tortor odio elementum eros, sit amet cursus felis elit vel diam. Fusce fringilla, nulla eu luctus lacinia, risus turpis varius orci, vel fringilla sem eros eu diam. Pellentesque sodales cursus elit, ac suscipit eros consectetur nec.
        Aenean at metus.<span class="sprite-aspa-direita"></span></p>
        
        <button type="submit" class="btn">baixar</button>
      </div>
      <div class="span4 box-select">
        <a href="#" title=""> <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="thumb do jogo" /> </a>
        <h2><a>Nome jogo</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend.</p>
      </div>
      <div class="span4">
        <p>Conheça nossos parceiros:</p>
        <a class="publicidade" href="#" title="Publicidade">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/banner-sesc.png" alt="Sesc" />
        </a>
        <a class="publicidade" href="#" title="Publicidade">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/banner-mapa.png" alt="Mapa do Brincar" />
        </a>
        
        <p>Você também pode escolher o jogo de acordo com as preferências da criança:</p>
        <div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret sprite-seta-down-amarela"></span> </a>
          <ul class="dropdown-menu">
            <li><a href="#">categoria 01</a></li>
            <li><a href="#">categoria 02</a></li>
            <li><a href="#">categoria 03</a></li>
            <li><a href="#">categoria 04</a></li>
          </ul>
        </div>
      </div>
      <h2 class="fechar-toogle ativo"><span class="sprite-seta-up"></span></h2>
    </div>
    
    <span class="linha"></span>
  </div>

  <div class="section todos-itens ">
    <ul  id="container-lista" class="row-fluid">
      <li class="span4 jogo"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 video"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 atividade"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 jogo"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 video"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 atividade"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 jogo"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 video"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 atividade"><a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
    </ul>
  </div>
  
  <span class="divisa"></span>
</div> 


<!--scripts-->

<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>

<!--scripts e css carrossel-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/hammer.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<script>
//carrossel mobile
var total=0;
$('#selector-mobile li').each(function(i){
  var width = $(this).width();
  total = width + total + 14; 
});

$('#selector-mobile').css('width', total);

$('#carrossel-mobile').responsiveCarousel({
    unitWidth:          'inherit',
    target:             '#carrossel-mobile .slider-target',
    unitElement:        '#carrossel-mobile .slider-target > li',
    mask:               '#carrossel-mobile .slider-mask',
    arrowLeft:          '#carrossel-mobile .arrow-left',
    arrowRight:         '#carrossel-mobile .arrow-right',
    dragEvents:         true,
    responsiveUnitSize:function () {
        return 1;
    },
    step:-1,
    onShift:function (i) {
        var $current = $('#selector-mobile li a[rel=frame_' + i + ']');
        $('#selector-mobile li a').removeClass('current');
        $current.addClass('current');
    }
});

$('.arrow, #selector-mobile a').click(function(){
  slideShow(); 
});

$('#selector-mobile a').on('click', function (ev) {
  ev.preventDefault();
  var i = /\d/.exec($(this).attr('rel'));
  $('#carrossel-mobile').responsiveCarousel('goToSlide', i);
});

$(window).on('load', function (ev) {
  $('#carrossel-mobile').responsiveCarousel('redraw');
  slideShow();
});

slideShow = function(ev){
  //ev.preventDefault();
  $('#carrossel-mobile').responsiveCarousel('toggleSlideShow');
};
//carrossel mobile
</script>

