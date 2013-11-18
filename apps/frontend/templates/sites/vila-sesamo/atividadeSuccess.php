<?php use_helper('I18N', 'Date') ?>

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
    
    <h1 class="back-page">
      <i class="icones-sprite-interna icone-atividades-grande"></i>
      <?php echo $section->getTitle() ?>
      <a class="todos-assets" title="voltar para todas atividades" href="/<?php echo $site->getSlug()?>/<?php echo $section->getSlug()?>" target="_self" >
        <i class="icones-setas icone-voltar-atividades"></i>
        <p>todas as atividades</p>
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
      ?>
      <p>
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
        <?php echo $asset->getDescription() ?>
      </p>
      
      
      <?php if(isset($asset)): ?>
      <div class="asset">
        <?php $related = $asset->retriveRelatedAssetsByRelationType("Preview"); ?>
        <?php $relatedMore = $asset->retriveRelatedAssetsByRelationType("Asset Relacionado"); ?>
        
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
        
        <div class="paginas">
          
          <?php if(isset($relatedMore)): ?>
            <?php if(count($relatedMore) > 0): ?>
              <span class="paginador">veja também:</span>
              <?php foreach($relatedMore as $k=>$p): ?>
                <a href="javascript:;" class="changePicture" title="<?php echo $p->getTitle() ?>">
                  <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="teste" />
                </a>
              <?php endforeach; ?>
                
            <?php endif ?>
          <?php endif ?>  
        </div>  
        <div>
          <a class="option-assets" href="http://cmais.com.br/actions/vilasesamo/download_image.php?file=<?php echo $related[0]->retriveImageUrlByImageUsage("original") ?>" title="Baixar">
            <i class="icones-sprite-interna icone-baixar-roxo"></i>
            <span>Baixar</span>
          </a>
          
           
          <!--a class="option-assets" href="javascript:printDiv('div0')" title="Imprimir" target="_blank"-->
          <a href="javascript:printDiv('div0')" class="option-assets print" datasrc="<?php echo $related[0]->retriveImageUrlByImageUsage("original"); ?>" title="imprimir">
            <i class="icones-sprite-interna icone-imprimir-roxo"></i>
            <span>Imprimir</span>
            <div id="div0" style="display: none;page-break-after:always;">
              <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("original")?>" style="width:95%">
            </div>
          </a>
          
        </div>
      </div>
      <?php endif; ?>
      <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
      <!--/IFRAME PARA IMPRESSAO EM IE -->
    </div>
    <!--/conteudo-asset-->
    
  </section>
  <!--/section-->
  
  <?php include_partial_from_folder('sites/vila-sesamo', 'global/brinque-tambem-com', array("site" => $site, "section" => $section, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
  
  <?php include_partial_from_folder('sites/vila-sesamo', 'global/form-campanha', array("site" => $site, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>

  <?php include_partial_from_folder('sites/vila-sesamo', 'global/para-os-pais', array("site" => $site, "asset" => $asset, "categories" => $categories, "uri" => $uri)) ?>

</div>
<!--/content-->
