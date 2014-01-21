<?php  $noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página</noscript>"; ?>
<?php
  /*
   * Pega a campanha (seção filha de "campanhas") e as categorias (seçao filha de "categorias") as quais o asset pertence
   */
  $categories = array();
  $sections = $asset->getSections();
  foreach($sections as $s) {
    if($s->getParentSectionId() > 0) {
      $parentSection = Doctrine::getTable('Section')->findOneById($s->getParentSectionId());
      if($parentSection->getSlug() == "categorias") {
        $categories[] = $s;
      }
    }
  }
  $campaign = false;
  foreach($sections as $s) {
    if($s->getParentSectionId() > 0) {
      $parentSection = Doctrine::getTable('Section')->findOneById($s->getParentSectionId());
      if($parentSection->getSlug() == "campanhas") {
        if($s->getIsActive() == 1) { 
          $campaign = $s;
          break;
        }
      }
    }
  }
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<?php echo $noscript ?>
<script src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<?php echo $noscript ?>
<script src="http://cmais.com.br/portal/js/hammer.min.js" type="text/javascript"></script>
<?php echo $noscript ?>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<?php echo $noscript ?>
<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/responsive-carousel/style-vilasesamo.css"/>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap-fileupload.js"></script>
<?php echo $noscript ?>
<script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/paiseeducadores.js"></script>
<?php echo $noscript; ?>
<script>
  $("body").addClass("interna videos");
</script>
<?php echo $noscript ?>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  <h1 tabindex="0" class="ac-explicacao">
    Você está na vídeo <?php echo $asset->getTitle() ?>
  </h1>
  <!--section -->
  <section class="filtro row-fluid">
    
    <h1>
      <i class="icones-sprite-interna icone-atividades-grande"></i>
      <?php echo $section->getTitle() ?>
      <a class="todos-assets" title="voltar para todas vídeos" href="/<?php echo $site->getSlug()?>/<?php echo $section->getSlug()?>" target="_self" >
        <i class="icones-setas icone-voltar-videos"></i>
        <p aria-hidden="true" tabindex="-1">todos os vídeos</p> 
      </a>
    </h1>
    
    <!--conteudo-asset-->
    <div class="conteudo-asset">
      
      <h2 tabindex="0"><?php echo $asset->getTitle() ?></h2>
      <?php
      /*
       * Este código serve apenas para pegar o selo (imagem) que indica que o asset pertence a uma categoria especial (entenda categoria como subseção de "categorias").
       * Este selo é um destaque de imagem - pode ser genérico! - dentro do bloco "selo" de cada categoria.
       * Todas as categorias tem este bloco, mas somente as marcadas como "is homepage" serão consideradas como especiais, tais como "Incluir Brincando" e "Hábitos Saudáveis".
       */
      ?>
      <p aria-label="Descrição da atividade: <?php echo $asset->getDescription() ?>"  tabindex="0">
      <?php if(isset($categories)): ?>
        <?php if(count($categories) > 0): ?>
          <?php      
            foreach($categories as $c) {
              if($c->getIsHomepage() == 1) { // A seção filha de "categorias" precisa estar com a opção "is Homepage" marcada para ser considerada especial, tais como "Hábitos Saudáveis" e "Incluir Brincando".
                $seloTitle = $c->getTitle(); // pega o título da secão filha
                $seloUrl = $c->retriveUrl(); // pega a url da seção filha
                $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($c->getId(), "selo"); // Pega o bloco "selo" da seção filha
                $category_displays["selo"] = $block->retriveDisplays(); // Pega os destaques do bloco "selo"
                $seloImageUrl = $category_displays["selo"][0]->retriveImageUrlByImageUsage("original"); // Pega a imagem do destaque
              }
            }
          ?>
          <?php if(isset($seloImageUrl)): ?>
        <a  href="<?php echo $seloUrl ?>" title="<?php echo $seloTitle ?>">
          <img src="<?php echo $seloImageUrl ?>" alt="<?php echo $seloTitle ?>" />
        </a>
          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>
       <span aria-hidden="true"><?php echo $asset->getDescription() ?></span>
      </p>
      
      <?php if(isset($asset)): ?>
      <div class="asset">
        <div id="player"></div>
        <a href="#" class="play" aria-label="Iniciar o vídeo"></a>
        <a href="#" class="pause" aria-label="Pausar o vídeo"></a>
        <a href="#" class="stop" aria-label="Parar o vídeo"></a>
        <!--iframe width="900" height="675" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe-->
      </div>
      <?php endif; ?>
      
    </div>
    <!--/conteudo-asset-->
    
  </section>
  <!--/section-->
  
  <?php include_partial_from_folder('sites/vilasesamo', 'global/brinque-tambem-com', array("site" => $site, "section" => $section, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
  
  <?php //include_partial_from_folder('sites/vilasesamo', 'global/form-campanha', array("site" => $site, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>

  <?php include_partial_from_folder('sites/vilasesamo', 'global/para-os-pais', array("site" => $site, "asset" => $asset, "categories" => $categories, "uri" => $uri)) ?>

</div>
<!--/content-->
<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script> 
<!-- script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/youtubeapi.js"></script --> 
<?php echo $noscript; ?>
<script>
    //Load player api asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var done = false;
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '675',
          width: '900',
          videoId: '<?php echo $asset->AssetVideo->getYoutubeId() ?>',
          events: {
            //'onReady': onPlayerReady,
            //'onStateChange': onPlayerStateChange
          }
        });
    }
    function onPlayerReady(evt) {
        evt.target.playVideo();
    }
    function onPlayerStateChange(evt) {
        if (evt.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }
    function playVideo() {
        player.playVideo();
    }
    function stopVideo() {
        player.stopVideo();
    }
    function pauseVideo() {
        player.pauseVideo();
    }
    $('.play').click(function(){playVideo()});
    $('.stop').click(function(){
      stopVideo()
      $('.stop').before('<span class="stopado" aria-label="Você parou a reprodução amiguinho, para iniciar novamente aperte enter no link Iniciar o vídeo" tabindex="0"></span>')
      setTimeout(function(){
        $('.stopado').focus();
      },500);
      setTimeout(function(){
        $('.stopado').remove();
        $('.play').focus();
      },5000);
    });
    $('.pause').click(function(){
      pauseVideo()
      $('.pause').before('<span class="pausado" aria-label="Você pausou a reprodução amiguinho, para iniciar novamente aperte novamente o link Iniciar o vídeo" tabindex="0"></span>')
      setTimeout(function(){
        $('.pausado').focus();
      },500);
      setTimeout(function(){
        $('.pausado').remove();
        $('.play').focus();
      },3000);
    });
</script>
<?php echo $noscript ?>
  

