<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>"
?> 
<script>
  $("body").addClass("cuidadores");
  <?php if($section->getSlug()=="pais-e-educadores"):?>
    $(document).ready(function(){
      $(".btn-cuidadores-topo").addClass("active");
    });  
  <?php endif; ?>
</script>
<?php echo $noscript; ?>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--Explicação acessibilidade-->
  <h1 tabindex="0" class="ac-explicacao">
   <?php echo $section->getDescription(); ?>
  </h1>
  
  <!--section -->
  <section class="filtro row-fluid">
    
    <!--container carrossel-->
    <div class="container-carrossel b-verde borda-arredonda">
      <h1>
        <span class="icones-sprite-interna icone-cuidadores-grande"></span>
        <?php echo $section->getTitle() ?>
      </h1>
      
      <?php if(isset($displays['destaque-principal'])): ?>
        <?php if(count($displays['destaque-principal']) > 0): ?>
      <!--inicio carrossel--> 
      <div id="carrossel-interna-artigo">
        <!--slider-->
        <div class="slider">
          <!--slider-mask-wrap-->
          <div class="slider-mask-wrap">
            <!--slider-mask-->
            <div class="slider-mask">
              <!--slider-mask-wrap--> 
              <ul class="slider-target">
                <?php foreach($displays['destaque-principal'] as $d): ?>
                <!--item-->
                <li>
                  <a class="btn-carrossel" href="<?php echo $site->retriveUrl() ?>/<?php echo $section->getSlug() ?>/<?php echo $d->Asset->getSlug() ?>" title="<?php echo $d->getTitle() ?>" target="_self">
                    <div class="pull-left videoorimage">
                      <div class="imagem-destaque-carrossel">
                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>" />
                      </div>
                    </div>

                    <div class="descritivo titulo-slider">
                      <h2><?php echo $d->getTitle() ?></h2>
                      <p><?php echo $d->getDescription() ?></p>
                      <?php if($d->Asset->AssetContent->getAuthor()): ?>
                      <p>Por <span><?php echo $d->Asset->AssetContent->getAuthor() ?></span></p>
                      <?php endif; ?>
                    </div>
     
                  </a>
                </li>
                <!--/item-->
                <?php endforeach; ?>
              </ul>
              <!--slider-mask-->
              <div class="clearit"></div>
            </div>
          </div>
          <!--slider-mask-wrap--> 
          <!--slider-nav-->
          <div class="slider-nav">
            <div class="arrow-left arrow"><span title="Anterior" class="back icones-setas icone-car-set-ve-esquerda"></span></div>
            <div class="arrow-right arrow"><span title="Proximo" class="next icones-setas icone-car-set-ve-direita"></span></div>
          </div> 
          <!--slider-nav-->
        </div>
        <!--/slider-->
        <!--seletor carrossel-->
        <div class="container-itens"> 
          <ul id="selector-interna-artigo">
            <?php foreach($displays['destaque-principal'] as $k=>$d): ?>
            <li><a href="#" rel="frame_<?php echo $k ?>"></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <!--/seletor carrossel--> 
      </div>
      <!--/inicio carrossel-->
        <?php endif; ?>
      <?php endif; ?>
       
    </div>
    <!--/container carrossel-->
      
  </section>
  <!--/section-->
  
  <div class="divisa"></div>
  
  <!--section-->
  <section class="row-fluid" verde>
    
    <!-- col esquerda -->
    <div class="span8">
      
      <!--selecione-->
      <div class="selecione">
        
        <!--barra selecao-->
        <div class="barra-selecao b-verdeescuro" tabindex="0" aria-label="Escolha os artigos por categoria." >
          <h3 >Todos os Artigos de:</h3>
          <h3 aria-live="polite" id="filtro-descricao">todas as categorias</h3>
          <!-- selecione uma categoria-->
          <?php
            $sectionCategorias = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"categorias");
            $allCategories = $sectionCategorias->subsections(); // pega todas as categorias para o usuário poder navegar por elas
          ?>        
          <?php if(isset($allCategories)): ?>
            <?php if(count($allCategories) > 0): ?>
            <div class="btn-group">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="javascript:;"> Selecione a categoria <span class="caret icones-setas icone-cat-abrir"></span> </a>
              <ul class="dropdown-menu cuidadores">
                <li>
                  <a href="javascript:;" title="Todas as categorias" data-filter="">
                    Todas as categorias
                  </a>
                </li>
                <?php foreach($allCategories as $c): ?>
                <li>
                  <a href="javascript:;" class="<?php echo $c->getSlug(); ?>" title="<?php echo $c->getTitle() ?>" data-filter=".<?php echo $c->getSlug() ?>" data-toggle="dropdown">
                    <?php echo $c->getTitle() ?>
                  </a>
                </li>
                <?php endforeach; ?>
                
              </ul>
            </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <!--/barra selecao-->
        
        <?php if(isset($pager)): ?>
          <?php if(count($pager) > 0): ?>
            <?php $pager2 = count($pager)/9; ?>
        <!--/section-->
        <section class="todos-itens ">
          <!--lista-->
          <ul id="container" class="row-fluid">
            <?php
            /*
            <?php foreach($pager->getResults() as $d): ?>
              <?php
                $assetCategorias = array();
                $categoriasSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'categorias');
                $assetSections = $d->getSections();
                foreach($assetSections as $a) {
                  if($a->getParentSectionId() == $categoriasSection->getId()) {
                    $assetCategorias[] = $a->getSlug();
                  }
                }
              ?>
            <li class="span4 element <?php if(count($assetCategorias) > 0) echo " " . implode(" ", $assetCategorias); ?>"> 
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                <?php $preview = $d->retriveRelatedAssetsByRelationType("Preview") ?>
                <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
                <i class="icones-sprite-interna icone-artigo-br-pequeno"></i>
                <div>
                  <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
                  <?php echo $d->getTitle() ?>
                </div>
              </a>
            </li>
            <?php endforeach; ?>
             */
             ?>            
          </ul> 
          <!--lista--> 
           
          
          
        </section>
        <!--/section-->
          <?php endif; ?>
        <?php endif; ?>
        
        <!--paginacao-->
        <?php include_partial_from_folder('sites/vilasesamo', 'global/pagination', array('site' => $site, 'section' => $section,'pager'=>$pager , 'pager2'=>$pager2)) ?>
        <!--/paginacao-->
      </div>
      <!--/selecione-->
      
    </div>  
    <!--/col esquerda-->
    
    
    <div class="span4 col-direita">  
      <?php if(isset($displays['destaques-secundarios'])): ?>
        <?php if(count($displays['destaques-secundarios']) > 0): ?>
          <?php foreach($displays['destaques-secundarios'] as $d): ?>
          <!--destaque 1-->
          <a class="destaque-small" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
          </a>
          <!-- destaque 1 -->
          <?php endforeach; ?> 
        <?php endif; ?>
      <?php endif; ?>
    
      <!-- banner vilasesamo -->
      <?php //include_partial_from_folder('sites/vilasesamo', 'global/banner300x250', array('site' => $site, 'section' => $section)) ?>
      <!-- vilasesamo -->
      <div id='div-gpt-ad-1385748525978-0' class="google-banner-home" aria-label="Banner de publicidade dos programas." tabindex="0">
        <script type='text/javascript'>
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1385748525978-0'); });
        </script>
        <?php echo $noscript; ?>
      </div>
      <!-- /banner vilasesamo -->
      
    </div>
    <!--/col direita--> 
    
  </section>  
  
    
</div> 
<!--/content-->


 
  <!--scripts e css carrossel-->
  <script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script><?php echo $noscript; ?>
  <script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script><?php echo $noscript; ?>
  <script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script><?php echo $noscript; ?>
  <script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script><?php echo $noscript; ?>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script><?php echo $noscript; ?>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/hammer.min.js"></script><?php echo $noscript; ?>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script><?php echo $noscript; ?>
  <link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/responsive-carousel/style-vilasesamo.css"/>
  
  <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script> <?php echo $noscript; ?>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/youtubeapi.js"></script> <?php echo $noscript; ?>
  
  
  <script>
  //carrossel
  var total=0;
  $('#selector-interna-artigo  li').each(function(i){
    var width = $(this).width();
    total = width + total + 14; 
  });
  $('.btn-carrossel').click(function(){
    window.location.assign($(this).attr('href'))
  });
  $('.dropdown-menu a, .dropdown-toggle').click(function(){
    $('.dropdown-menu').toggle();
    $('.dropdown-toggle').find('span').toggleClass('icone-cat-fechar');
  })
  $('#selector-interna-artigo ').css('width', total);
  
  $('#carrossel-interna-artigo').responsiveCarousel({
      unitWidth:          'inherit',
      target:             '#carrossel-interna-artigo .slider-target',
      unitElement:        '#carrossel-interna-artigo .slider-target > li',
      mask:               '#carrossel-interna-artigo .slider-mask',
      arrowLeft:          '#carrossel-interna-artigo .arrow-left',
      arrowRight:         '#carrossel-interna-artigo .arrow-right',
      dragEvents:         true,
      step:-1,
      onShift:function (i) {
          var $current = $('#selector-interna-artigo  li a[rel=frame_' + i + ']');
          $('#selector-interna-artigo  li a').removeClass('current');
          $current.addClass('current');
      },
      slideSpeed: 5000
  });
  
  slideShow();
  var widthLi;
  $(window).on("load",function(){
    widthLi = $('.slider-mask').width();
    $('.slider-mask li').css('width', widthLi);
    $('#carrossel-interna-artigo').responsiveCarousel('redraw');  
  });
  
  $(window).on("resize",function(){
    widthLi =  $('.slider-mask').width();
    $('.slider-mask li').css('width', widthLi);  
    $('#carrossel-interna-artigo').responsiveCarousel('redraw');
  });
  
  
  //$('.arrow, #selector-interna-artigo  a').click(function(){
    //slideShow(); 
  //});
  
  $('#selector-interna-artigo  a').on('click', function (ev) {
    ev.preventDefault();
    var i = /\d/.exec($(this).attr('rel'));
    $('#carrossel-interna-artigo').responsiveCarousel('goToSlide', i);

    stop();
    slideShow(); 
  });
  
  $(window).on('load', function (ev) {
    ev.preventDefault();
    $('#carrossel-interna-artigo').responsiveCarousel('redraw');
    $('#carrossel-interna-artigo').responsiveCarousel('toggleSlideShow');
    slideShow();
  });
  
  $('.dropdown-menu a').click(function(){
    var select = $(this).attr('title');
    $('.btn.dropdown-toggle').html(select + '<span class="caret icones-setas icone-cat-abrir"></span>');
  });
  
  
  
  function slideShow(ev){
    //ev.preventDefault();
    $('#carrossel-interna-artigo').responsiveCarousel('toggleSlideShow');
  };
  function stop(ev){
    ev.preventDefault();
    $('#carrossel-interna-artigo').responsiveCarousel('stopSlideShow');
  };
  </script>
  <?php echo $noscript; ?>
  
  <script>
  $('.descritivo h2').each(function(index) {
  $(this).attr('tabindex', -1).attr("aria-hidden","true");
  });
  </script>
  <?php echo $noscript; ?>
<!--scripts-->

