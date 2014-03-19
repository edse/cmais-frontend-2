<?php use_helper('I18N', 'Date') ?>
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
<?php echo $noscript; ?>
<script src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<?php echo $noscript; ?>
<script src="http://cmais.com.br/portal/js/hammer.min.js" type="text/javascript"></script>
<?php echo $noscript; ?>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<?php echo $noscript; ?>
<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/responsive-carousel/style-vilasesamo.css"/>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap-fileupload.js"></script>
<?php echo $noscript; ?>
<script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/paiseeducadores.js"></script>
<?php echo $noscript; ?>
<script>
  $("body").addClass("interna atividades");
</script>
<?php echo $noscript; ?>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  <h1 tabindex="0" class="ac-explicacao">
    Você está na atividade <?php echo $asset->getTitle() ?>
  </h1>
  <!--section -->
  <section class="filtro row-fluid">
    
    <h1 class="back-page">
      <i class="icones-sprite-interna icone-atividades-grande"></i>
      <span aria-hidden="true" tabindex="-1"><?php echo $section->getTitle() ?></span>
      <a class="todos-assets" href="/<?php echo $site->getSlug()?>/<?php echo $section->getSlug()?>" aria-label="voltar para todas as atividades" target="_self" >
        <i class="icones-setas icone-voltar-atividades"></i>
        <p aria-hidden="true" tabindex="-1">todas as atividades</p>
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
      <p aria-label="Atividade: <?php echo $asset->getDescription() ?>"  tabindex="0" >
      
        <span aria-hidden="true" style="width: 70%;float: left;"><?php echo $asset->getDescription() ?></span>
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
            <a  href="<?php echo $seloUrl ?>" title="" tabindex="0" aria-label="<?php echo "categoria ".$seloTitle ?>">
              <img src="<?php echo $seloImageUrl ?>" alt=""   />
            </a>
          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>
      </p>
      
      
      <?php if(isset($asset)): ?>
      <div class="asset">
        <?php $related = $asset->retriveRelatedAssetsByRelationType("Preview"); ?>
        <?php $relatedMore = $asset->retriveRelatedAssetsByRelationType("Download"); ?>
        
      <a href="#print" aria-label="Descrição da imagem:<?php echo $related[0]->AssetImage->getHeadline(); ?>, para imprimir aperte enternno link imprimir" tabindex="0" ></a>
        <img class="picture" src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" aria-hidden="true" tabindex="-1"/>
      </a>  
        <div class="paginas">
          
          <?php if(isset($relatedMore)): ?>
            <?php if(count($relatedMore) > 0): ?>
              <span class="paginador">veja também:</span>
              <a href="#" class="changePicture" title="página 1"  aria-label="página 1 - <?php echo $related[0]->AssetImage->getHeadLine(); ?>"  tabindex="0">
                <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
                <input id="baixar-hidden" type="hidden" value="http://cmais.com.br/actions/vilasesamo/download_image.php?file=<?php echo $related[0]->retriveImageUrlByImageUsage("original") ?>">
                <input id="press-hidden" type="hidden" value="<?php echo $related[0]->retriveImageUrlByImageUsage("original"); ?>">
              </a>
              <?php foreach($relatedMore as $k=>$p): ?>
                <a href="#" class="changePicture" title="página <?php echo $k+2 ?>" aria-label="página <?php echo $k+2 ?> - <?php echo $relatedMore[$k]->AssetImage->getHeadLine(); ?>"  tabindex="0">
                  <img src="<?php echo $relatedMore[$k]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>"  />
                  <input id="baixar-hidden" type="hidden" value="http://cmais.com.br/actions/vilasesamo/download_image.php?file=<?php echo $relatedMore[$k]->retriveImageUrlByImageUsage("original") ?>">
                  <input id="press-hidden" type="hidden" value="<?php echo $relatedMore[$k]->retriveImageUrlByImageUsage("original"); ?>">
                </a> 
              <?php endforeach; ?>
                
            <?php endif ?>
          <?php endif ?>  
        </div> 
         
        <div>
          <a class="option-assets download" href="http://cmais.com.br/actions/vilasesamo/download_image.php?file=<?php echo $related[0]->retriveImageUrlByImageUsage("original") ?>" title="Baixar">
            <i class="icones-sprite-interna icone-baixar-roxo"></i>
            <span>Baixar</span>
          </a>
          
           
          <!--a class="option-assets" href="javascript:printDiv('div0')" title="Imprimir" target="_blank"-->
          <a href="javascript:printDiv('div0')" id="print" class="option-assets print" datasrc="<?php echo $related[0]->retriveImageUrlByImageUsage("original"); ?>" title="">
            <i class="icones-sprite-interna icone-imprimir-roxo"></i>
            <span>Imprimir</span>
            <div id="div0" style="display: none;page-break-after:always;">
              <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("original")?>" style="width:95%" alt="" aria-hidden="true" tabindex="-1">
            </div>
          </a>
          
        </div>
      </div>
      <?php endif; ?>
      <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id="print_frame" width="0" height="0" frameborder="0" src="about:blank" title="iframe" ></iframe> 
      <!--/IFRAME PARA IMPRESSAO EM IE -->
    </div>
    <!--/conteudo-asset-->
    
  </section>
  <!--/section-->
  
  <?php include_partial_from_folder('sites/vilasesamo', 'global/brinque-tambem-com', array("site" => $site, "section" => $section, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
  
  <?php include_partial_from_folder('sites/vilasesamo', 'global/form-campanha', array("site" => $site, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>

  <?php include_partial_from_folder('sites/vilasesamo', 'global/para-os-pais', array("site" => $site, "asset" => $asset, "categories" => $categories, "uri" => $uri)) ?>

</div>
<!--/content-->

  
<script>
$('.changePicture, .picture').click(function(){
  var picture = $(this).find('img').attr('src');
  var desc = $(this).find('img').attr('alt');
  var download = $(this).find('#baixar-hidden').attr('value');
  var press = $(this).find('#press-hidden').attr('value');
  var aria= $(this).attr('aria-label'); 

  
  $('.picture').attr('src', picture).attr('alt', desc).attr('aria-label', aria);
  $('.option-assets.download').attr('href', download);
  $('.option-assets.print').attr('datasrc', press);
  $('#div0 img').attr('src', press);
  
  $('.print').attr('aria-label','você escolheu ' + aria + '. se quiser imprimir aperte enter para ir para a janela de impressão').attr('tabindex','0');
  $('.print').focus();
  
});
</script>
<?php echo $noscript; ?>