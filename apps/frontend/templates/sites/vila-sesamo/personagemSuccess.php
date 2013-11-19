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
      
      <h1><i class="icones-sprite-interna icone-personagem-grande"></i>Personagens</h1>
      
      <!--menu filtro persoagem-->
      <?php $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"personagens"); ?>
      <?php $personagens = $particularSection->subsections()?>
      
      <?php include_partial_from_folder('sites/vila-sesamo', 'global/menu-personagens', array('site'=>$site ,'section' => $section,'personagens' => $personagens)) ?>
      <!--/menu filtro persoagem-->
      
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
                          <img src="<?php echo $d->retriveImageUrlByImageUsage('image-13'); ?>" alt="<?php echo $d->getTitle() ?>" />
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
            
            <!--texto personagem-->
            <div class="descritivo">
              <h3><?php echo $section->getTitle() ?></h3>
              <p><?php echo html_entity_decode($displays["sobre-a-personagem"][0]->Asset->AssetContent->render()) ?></p>
              <p><?php //echo $section->getDescription() ?></p>
            </div>
            <!--/texto personagem-->
              
          </div>
          <!--/box-personagem-->
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <!--/span12-->
    <span class="divisa personagem"></span>
    
    
    <!--destaques-->
    <div class="destaques dest-pers bel row-fluid container">
      
      <!--quadro com imagem do personagem -->
      <div class="span4 pull-left">
        <img src="/portal/images/capaPrograma/vilasesamo2/personagens/vs_img_personagem-<?php echo $section->getSlug() ?>-ilustra.png" alt=""/>
      </div>
      <!--/quadro com imagem do personagem -->
      
      
      <?php if(isset($displays['destaques-de-assets'])): ?>
        <?php if(count($displays['destaques-de-assets']) > 0): ?>
          <section class="span8 pull-right">
            <?php foreach($displays['destaques-de-assets'] as $d): ?>
              <?php
                $sections = $d->Asset->getSections();
                foreach($sections as $s) {
                  if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                    $assetSection = $s;
                    break;
                  }
                }
                $preview = $d->Asset->retriveRelatedAssetsByRelationType('Preview')
              ?>
              <article class="span6 <?php echo $assetSection->getSlug() ?>">
                <a href="/<?php echo $site->getSlug() ?>/<?php echo $assetSection->getSlug() ?>/<?php echo $d->Asset->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
                  <?php if($d->Asset->AssetType->getSlug() == "video"): ?>
                    <div class="yt-menu">  
                      <img src="http://img.youtube.com/vi/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
                    </div>
                  <?php else: ?>
                    <img class="img-destaque" src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
                  <?php endif; ?>
                    <i class="icones-sprite-interna icone-<?php echo $assetSection->getSlug() ?>-pequeno"></i>
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
        <?php $pager2 = count($pager)/9; ?>
    <!--/assets-->
    <section class="todos-itens">
      <!--lista-->
      <ul role="contentinfo" id="container" class="row-fluid">
        <?php
        /*
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
            
            <li class="span4 element <?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?> <?php echo $assetSection->getSlug() ?>"> 
              <a href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
                <?php if($d->AssetType->getSlug() == "video"): ?>
                  <div class="yt-menu">
                    <img src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>">
                  </div>
                <?php else: ?>
                  <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
                  <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
                <?php endif; ?>
                <i class="icones-sprite-interna icone-<?php echo $assetSection->getSlug() ?>-pequeno"></i>
                <div><img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="<?php echo $assetSection->getSlug() ?>"/><?php echo $d->getTitle() ?></div>
              </a>
            </li>
        <?php endforeach; ?>
        */
       ?>
      </ul> 
      <!--lista-->  
    </section>
    <!--/assets-->
      <?php endif; ?>
    <?php endif; ?>
      
    <!--paginacao-->
    <?php include_partial_from_folder('sites/vila-sesamo', 'global/pagination', array('site' => $site, 'section' => $section,  'pager'=>$pager , 'pager2'=>$pager2)) ?>
    <!--/paginacao-->
      
      
  
      
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
  <link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/responsive-carousel/style-vilasesamo.css"/>
  
  <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script> 
  <!-- script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/youtubeapi.js"></script --> 
  
  
  <script>
  
	 $(document).ready(function() {
	  //arrays para players multiplos
	  var cont = 0;
	  var player = new Array();
	  var players_ids = new Array();
	  var playing;
	  var playing_id = false;
	  
	  onYouTubeIframeAPIReadyPlayer = function(obj, cont) {
	    //console.log("start"+cont);
	    //console.log("obj:"+obj);
	    //console.log("contador:"+cont);
	    player[cont] = new YT.Player(obj);
	    //console.log("player:"+player[cont]);
	    player[cont].addEventListener("onStateChange", function(res){
	      if(res.data == 1){
	        $('#carrossel-interna-personagem').responsiveCarousel('stopSlideShow');
	        playing = res.target;
	        //console.log('playing:'+playing.pauseVideo());
	      }
	      if(res.data == 0){
	        $('#carrossel-interna-personagem').responsiveCarousel('toggleSlideShow');
	      }
	    });
	  }
	  
	  $('.videoorimage iframe').each(function(i){
	    if($(this).attr('src').indexOf("youtube") != -1){
	      cont++;
	      $(this).attr("id","player"+cont);
	      onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
	    }
	  });

  //carrossel
  var total=0;
  $('#selector-interna-personagem li').each(function(i){
    var width = $(this).width();
    total = width + total + 14;
    console.log(total); 
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

  $('#selector-interna-personagem a').on('click', function (ev) {
    ev.preventDefault();
    var i = /\d/.exec($(this).attr('rel'));
    $('#carrossel-interna-personagem').responsiveCarousel('goToSlide', i);
    if(!$(this).hasClass('current') && playing != null){
      //playing.pauseVideo();
      setTimeout(function(){playing.pauseVideo()}, 500);
    } 
    stop();
    slideShow(); 
  });
  
  $(window).on('load', function (ev) {
  	
    //ev.preventDefault();
    $('#carrossel-interna-personagem').responsiveCarousel('redraw');
    $('#carrossel-interna-personagem').responsiveCarousel('toggleSlideShow');
    //slideShow();
  });
  
  slideShow = function(ev){
    //ev.preventDefault();
    $('#carrossel-interna-personagem').responsiveCarousel('toggleSlideShow');
  };
  stop = function(ev){
    //ev.preventDefault();
    $('#carrossel-interna-personagem').responsiveCarousel('stopSlideShow');
  };
  
  
  
	});  
  
  
  </script>
</div>