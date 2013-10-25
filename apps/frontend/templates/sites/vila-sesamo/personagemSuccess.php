<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna personagens");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <section class="filtro row-fluid">
    
    <div class="span12" role="main">
      
      <h1><i class="sprite-icon-personagens-med"></i>Personagens</h1>
      
      <?php include_partial_from_folder('sites/vila-sesamo', 'global/menu-personagens') ?>
      
      <?php if(isset($displays['destaque-principal'])): ?>
        <?php if(count($displays['destaque-principal']) > 0): ?>
      <!--box-personagem-->
      <div class="desc-personagem">
        
        <!--carrossel--> 
        <div id="carrossel-interna-personagem">
          
          <!--destaques carrossel-->
          <div class="slider">
            <div class="slider-mask-wrap">
              <div class="slider-mask">
                <ul class="slider-target">
                  <?php foreach($displays['destaque-principal'] as $d): ?>
                  <li>
                    <div class="pull-left videoorimage">
                    <?php if($d->Asset->AssetType->getSlug() == "video"): ?>
                      <iframe width="351" height="263" src="http://www.youtube.com/embed/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
                    <?php elseif($d->Asset->AssetType->getSlug() == "image"): ?>
                      <img src="<?php $d->retriveImageUrlByImageUsage() ?>" alt="<?php echo $d->getTitle() ?>" />
                    <?php endif; ?>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <div class="clearit"></div>
              </div>
            </div>
          </div>
          <!--/destaques carrosel-->
          
          <!--seletor carrossel-->
          <div class="container-itens"> 
            <ul id="selector-interna-personagem">
              <?php foreach($displays['destaque-principal'] as $k=>$d): ?>
              <li><a href="#" rel="frame_<?php echo $k ?>"></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <!--/seletor carrossel--> 
        </div>
        <!--/inicio carrossel-->
        
        <div class="descritivo">
          <h3><?php echo $section->getTitle() ?></h3>
          <p><?php echo html_entity_decode($displays["sobre-a-personagem"][0]->Asset->AssetContent->render()) ?></p>
        </div>  
      </div>
      <!--/box-personagem-->
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <!--/span12-->
    <span class="divisa personagem"></span>
    
    
    <!--destaques-->
    <div class="destaques dest-pers bel row-fluid container">
      <div class="span4 pull-left">
        <img src="/portal/images/capaPrograma/vilasesamo2/personagens/int-pers-<?php echo $section->getSlug() ?>.png" alt=""/>
      </div>
      
      <?php if(isset($displays['destaques-de-assets'])): ?>
        <?php if(count($displays['destaques-de-assets']) > 0): ?>
      <section class="span8 pull-right">
        <?php foreach($displays['destaques-de-assets'] as $d): ?>
          <?php
            $sections = $d->getSections();
            foreach($sections as $s) {
              if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                $assetSection = $s;
                break;
              }
            }
            $preview = $d->retriveRelatedAssetsByRelationType('Preview')
          ?>
        <article class="span6 <?php echo $assetSection->getSlug() ?>">
          <a href="/<?php echo $site->getSlug() ?>/<?php echo $assetSection->getSlug() ?>/<?php echo $d->Asset->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
            <img class="img-destaque" src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>" />
            <i class="sprite-icons-new sprite-icone_<?php echo $assetSection->getSlug() ?>"></i>
            <p><?php echo $d->getTitle() ?></p>  
          </a>  
        </article>
        <?php endforeach; ?>
      </section>
        <?php endif; ?>
      <?php endif; ?>
      
      <div class="span12 mais-brincadeiras">
        <p>Mais brincadeiras <?php if(in_array($section->getSlug(), array("bel","zoe"))): ?>da <?php else: ?>do <?php endif; ?><?php echo $section->getTitle() ?>:</p>
      </div>
      
    </div>
    <!--/destaques-->
    
    <?php if(isset($pager)): ?>
      <?php if(count($pager) > 0): ?>
    <!--/assets-->
    <section class="todos-itens">
      <!--lista-->
      <ul role="contentinfo" id="container" class="row-fluid">
        <?php foreach($pager->getResults() as $k=>$d): ?>
        <?php
          $assetPersonagens = array();
          $personagensSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'personagens');
          $assetSections = $d->getSections();
          foreach($assetSections as $a) {
            if($a->getParentSectionId() == $personagensSection->getId()) {
              $assetPersonagens[] = $a->getSlug();
            }
            if(in_array($a->getSlug(),array("videos","jogos","atividades"))) {
              $assetSection = $a;
              break;
            }
          }
        ?>
          
        <li class="span4 element jogos<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?>"> 
          <a href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
            <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
            <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>" />
            <i class="sprite-icons-new sprite-icone_<?php echo $assetSection->getSlug() ?>"></i>
            <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="<?php echo $assetSection->getSlug() ?>"/><?php echo $d->getTitle() ?></div>
          </a>
        </li>
        <?php endforeach; ?>
      </ul> 
      <!--lista-->  
    </section>
    <!--/assets-->
      <?php endif; ?>
    <?php endif; ?>
      
      <!--pagina-->
      <div class="pagina">  
        <span class="divisa carregar"></span
        
        <input type="hidden" id="filter-choice" value="">
        <nav id="page_nav">
          <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="sprite-icon-mais"></i></a>
        </nav>
      </div>
      <!--pagina-->
      
      
      <!-- para os pais -->
      <?php /*
      <div id="dicas-pais" class="pais">
        
        <span class="divisa"></span>
        
        <h2>Para adultos <span class="sprite-seta-down"></span></h2>
        <!--redes-->
        <div class="redes">
          <p>Compartilhe esta brincadeira:</p>
          <g:plusone size="medium" count="false"></g:plusone>
          <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pinterest" style="margin-top:-10px;" /></a>
          <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura" style="width: 80px;">Tweet</a>
        </div>
        <!--/redes-->
        
        <!--content-->
        <div class="content span12">
          
          <!--dica-->
          <div class="span4 dica">
            
            <h2><span class="sprite-aspa-esquerda"></span>Nome da Dica</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend. Duis vel mauris et nunc posuere vehicula a id arcu. Maecenas malesuada ante ac consequat viverra. Vivamus tempor, nulla quis facilisis ullamcorper, tortor odio elementum eros, sit amet cursus felis elit vel diam. Fusce fringilla, nulla eu luctus lacinia, risus turpis varius orci, vel fringilla sem eros eu diam. Pellentesque sodales cursus elit, ac suscipit eros consectetur nec.
            Aenean at metus.<span class="sprite-aspa-direita"></span></p>
            
            <button type="submit" class="btn">baixar</button>
          </div>
          <!--/dica-->
          
          <!--box-select-->
          <div class="span4 box-select">
            <a href="#" title=""> <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="thumb do jogo" /> </a>
            <h2>Nome jogo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend.</p>
          </div>
          <!--box-select-->
          
          <!--parceiros-->
          <div class="span4">
            <h2>Conheça nossos parceiros:</h2>
            
            <a class="publicidade" href="#" title="Publicidade">
              
            </a>
            
            <!--categorias-->
            <h2>Você também pode escolher o jogo de acordo com as preferências da criança:</h2>
            <div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret sprite-seta-down-amarela"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">categoria 01</a></li>
                <li><a href="#">categoria 02</a></li>
                <li><a href="#">categoria 03</a></li>
                <li><a href="#">categoria 04</a></li>
              </ul>
            </div>
            <!--/categorias-->
            
          </div>
          <!--/parceiros-->
          
          <div class="fechar-toogle ativo"><span class="sprite-seta-up"></span></div>
          
        </div>
        <!--/content-->
        
        <span class="linha"></span>
        
      </div>  
      <!-- /para os pais -->
       */
      ?>
      
      <?php include_partial_from_folder('sites/vila-sesamo', 'global/para-os-pais', array("site" => $site, "uri" => $uri)) ?>
      
    </div>
    <!--destaques-->
    
    
    
    
    
    

  </section>
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
</div>
<!--/section-->
<!--scripts-->

