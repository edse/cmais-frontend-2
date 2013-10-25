<?php
  /*
   * Pega a campanha (seção filha de "campanhas") e as categorias (seçao filha de "categorias") as quais o asset pertence
   */
  $categories = array();
  $sections = $asset->getSections();
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
      if($parentSection->getSlug() == "categorias") {
        $categories[] = $s;
      }
    }
  }
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/js/hammer.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/js/responsive-carousel/style-vilasesamo.css"/>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap-fileupload.js"></script>

<script>
  $("body").addClass("interna atividades");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid">
    
    <h1>
      <i class="sprite-icon-colorir-med"></i>
      <?php echo $section->getTitle() ?>
      <a class="todos-assets" title="voltar para todas atividades">
        <i class="sprite-btn-voltar-atividades"></i>
        <p>todos as atividades</p>
      </a>
    </h1>
    
    <!--conteudo-asset-->
    <div class="conteudo-asset">
      
      <h2><?php echo $asset->getTitle() ?></h2>
      <?php
      /*
       * Este código serve apenas para pegar o selo (imagem) que indica que o asset pertence a uma categoria especial (entenda categoria como subseção de "categorias").
       * Este selo é um destaque de imagem - pode ser genérico! - dentro do bloco "selo" de cada categoria.
       * Todas as categorias tem este bloco, mas somente as marcadas como "is homepage" serão consideradas como especiais, tais como "Incluir Brincando" e "Hábitos Saudáveis".
       */
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
      <?php if($seloImageUrl): ?>
        
        <p>
          <a  href="<?php echo $seloUrl ?>" title="<?php echo $seloTitle ?>">
            <img src="<?php echo $seloImageUrl ?>" alt="<?php echo $seloTitle ?>" />
          </a>
          <?php echo $asset->getDescription() ?>
        </p>
        
      <?php endif; ?>
      
      <?php if(isset($asset)): ?>
      <div class="asset">
        <?php $related = $asset->retriveRelatedAssetsByRelationType("Preview"); ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
        <div>
          <span class="sprite-selo"></span>
          <a href="<?php echo $related[0]->retriveImageUrlByImageUsage("original") ?>" title="Imprimir" target="_blank">Imprimir</a>
          <span class="sprite-selo"></span>
          <a href="http://cmais.com.br/actions/vilasesamo/download_image.php?file=<?php echo $related[0]->retriveImageUrlByImageUsage("original") ?>" title="Baixar">Baixar</a>
        </div>
      </div>
      <?php endif; ?>
      
    </div>
    <!--/conteudo-asset-->
    
  </section>
  <!--/section -->
  
  <?php //include_partial_from_folder('sites/vila-sesamo', 'global/brinque-tambem-com', array("site" => $site, "section" => $section, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
  
  <?php //include_partial_from_folder('sites/vila-sesamo', 'global/form-campanha', array("site" => $site, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>

  <?php //include_partial_from_folder('sites/vila-sesamo', 'global/para-os-pais', array("site" => $site, "asset" => $asset, "categories" => $categories, "uri" => $uri)) ?>

</div>
<!--content-->

<script>
//carrossel interna
$('#carrossel-i').responsiveCarousel({
  arrowLeft: '.arrow-left span.personagens',
  arrowRight: '.arrow-right span.personagens',
  target:'#carrossel-i .slider-target',
  unitElement:'#carrossel-i .slider-target > li',
  mask:'#carrossel-i .slider-mask',
  easing:'linear',
  dragEvents:true,
  //speed:200,
  //slideSpeed:1000
});

if(navigator.appName!='Microsoft Internet Explorer')
{
  //carrossel personagens redraw pra tablet e celular home
  window.addEventListener('load', function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  });
  window.addEventListener("orientationchange", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  window.addEventListener("resize", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  //carrossel personagens redraw pra tablet e celular home
}
</script>
