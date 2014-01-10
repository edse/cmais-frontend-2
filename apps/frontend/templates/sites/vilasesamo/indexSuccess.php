<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/responsive-carousel/style-vilasesamo.css"/>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/home.css" type="text/css" />
<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>"
?> 
<!--content-->
<div id="content">
  <!--menu principal && banner promocional-->
  <?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
  <?php include_partial_from_folder('sites/vilasesamo', 'global/bannerprincipal', array('site' => $site)); ?>
  <!--/menu principal && banner promocional-->
  
  <!--carrossel personagens-->
  <?php $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"personagens"); ?>
  <?php $personagens = $particularSection->subsections()?>
  <?php include_partial_from_folder('sites/vilasesamo', 'global/menupersonagens', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'personagens'=>$personagens));?>
  <!--carrossel personagens-->
  
  <!-- link seções -->
  <section class="bgtotal">
    
    <span class="divisa1"></span>
    <!--destaques-->
    <div class="row-fluid container">
      
        <?php if(isset($displays['destaques-de-assets'])): ?>
          <?php if(count($displays['destaques-de-assets']) > 0): ?>
      <!--section-->
      <section class="destaques span8" aria-label="links em destaque">
            <?php foreach($displays['destaques-de-assets'] as $d): ?>
              <?php
                $sections = $d->Asset->getSections();
                foreach($sections as $s) {
                  if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                    $assetSection = $s;
                    break;
                    switch($s){
                      case "videos":
                        $decricaoImagem = "Desculpe, a imagem esta sem descrição mas o vídeo é muito legal, assista-o!";
                      break;
                      case "jogos":
                        $decricaoImagem = "Desculpe, a imagem esta sem descrição mas o jogo é muito legal, jogue-o!";
                      break;
                      case "atividades":
                        $decricaoImagem = "Desculpe, a imagem esta sem descrição mas a atividade é muito legal, brinque com ela!";
                      break;
                          
                    }
                  }
                }
                $preview = $d->Asset->retriveRelatedAssetsByRelationType('Preview')
              ?>
        <div class="span4 <?php echo $assetSection->getSlug() ?>">
          <a href="/<?php echo $site->getSlug() ?>/<?php echo $assetSection->getSlug() ?>/<?php echo $d->Asset->getSlug() ?>" title="">
            <?php if($d->Asset->AssetType->getSlug() == "video"): ?>
            <div class="yt-menu">  
              <img class="destaque" src="http://img.youtube.com/vi/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>/0.jpg" alt=""/>
            </div>
            <?php else: ?>
              <img class="destaque" src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt=""/>
            <?php endif; ?>
            <i class="icones-sprite-interna icone-<?php echo $assetSection->getSlug() ?>-pequeno"></i>
            <div class="texto">
              <img class="altura"src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="" aria-label="<?php echo $assetSection->getSlug(); ?>"/>
              <?php echo $d->getTitle() ?>
              <?php if($preview):?>
                <?php
                if(count($preview)>0):
                  $decricaoImagem = $preview[0]->AssetImage->getHeadline(); 
                endif; ?>
              <?php endif; ?>  
              <span aria-label="<?php echo ". ".$d->getDescription(). ". Descrição do thumbnail:". $decricaoImagem; ?>"></span>
                    
            </div>
          </a>
        </div>
            <?php endforeach; ?>
      </section>
      <!--section-->
          <?php endif; ?>
        <?php endif; ?>
        
      <div class="span4 banner" >
        <a href="http://cmais.com.br/<?php echo $site->getSlug() ?>/categorias/incluir-brincando" title="Incluir Brincando" class="icones-btns-sprite icone-incluir-brincando"></a>
        <a href="http://cmais.com.br/<?php echo $site->getSlug() ?>/categorias/habitos-saudaveis" title="Hábitos para uma vida saudável" class="icones-btns-sprite icone-habitos-saudaveis"></a>
        <!--a href="javascript:;" class="acha" title="O que achou do novo site?"><i class="icones-form icone-fale-conosco-br"></i>O que achou do site novo?</a-->
      </div>
    </div>
    <!--destaques-->
    
  </section>
  <!-- link seções -->
  
</div>
<!--/content-->

<!--scripts e css banner-->

<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<?php echo $noscript; ?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script>
<?php echo $noscript; ?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/hammer.min.js"></script>
<?php echo $noscript; ?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<?php echo $noscript; ?>

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

$('#carrossel-p').mouseenter(function(){
  $('.arrow.personagem').fadeIn('fast');
});

$('#carrossel-p').mouseleave(function(){
  $('.arrow.personagem').fadeOut('fast');
});

$('.inner.personagens a').mouseenter(function(){
  $(this).find('img').animate({top:-70, easing:"swing"},'fast');
});
$('.inner.personagens a').mouseleave(function(){
  $(this).find('img').stop();
  $(this).find('img').animate({top:0, easing:"swing"},'fast');  
});
 

</script>
<?php echo $noscript; ?>