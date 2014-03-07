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
<script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/paiseeducadores.js"></script>
<?php echo $noscript; ?>
<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/responsive-carousel/style-vilasesamo.css"/>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap-fileupload.js"></script>
<?php echo $noscript; ?>

<script>
  $("body").addClass("interna jogos");
</script>
<?php echo $noscript; ?>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  <h1 tabindex="0" class="ac-explicacao">
    Você está na jogo <?php echo $asset->getTitle() ?>
  </h1>
  
  <!--section -->
  <section class="filtro row-fluid">
    <h1 tabindex="0" class="ac-explicacao">
      Você está na atividade <?php echo $asset->getTitle() ?>
    </h1>
    <h1>
      <i class="icones-sprite-interna icone-jogos-grande"></i>
      <?php echo $section->getTitle() ?>
      <a class="todos-assets" title="voltar para todas jogos" href="/<?php echo $site->getSlug()?>/<?php echo $section->getSlug()?>" target="_self" >
        <i class="icones-setas icone-voltar-jogos"></i>
        <p aria-hidden="true" tabindex="-1">todos os jogos</p>
      </a>
    </h1>
    
    <!--conteudo-asset-->
    <div class="conteudo-asset">
      
      <h2  tabindex="0"><?php echo $asset->getTitle() ?></h2>
      <?php
      /*
       * Este código serve apenas para pegar o selo (imagem) que indica que o asset pertence a uma categoria especial (entenda categoria como subseção de "categorias").
       * Este selo é um destaque de imagem - pode ser genérico! - dentro do bloco "selo" de cada categoria.
       * Todas as categorias tem este bloco, mas somente as marcadas como "is homepage" serão consideradas como especiais, tais como "Incluir Brincando" e "Hábitos Saudáveis".
       */
      ?>
      <p aria-label="Jogo: <?php echo $asset->getDescription() ?>"  tabindex="0">
      
        <span aria-hidden="true"><?php echo $asset->getDescription() ?></span>
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
      </p>
      
      
      <?php if(isset($asset)): ?>
      <div class="turn-the-cell-please" style="display:none;">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/vire-celular.png" alt=""/>
      </div>
   
      <div class="asset" style="display:none;">
        <?php echo html_entity_decode($asset->AssetContent->render()) ?>
      </div>
      <input class="top" type="hidden" value="false">
      <?php endif; ?>
      
    </div>
  </section>
  <!--/section-->
  
  <?php include_partial_from_folder('sites/vilasesamo', 'global/brinque-tambem-com', array("site" => $site, "section" => $section, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
  
  <?php if(isset($_GET["m"]) && $_GET["m"] == 2143):?> 
    <?php include_partial_from_folder('sites/vilasesamo', 'global/form-campanha', array("site" => $site, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
  <?php endif; ?>
  <?php include_partial_from_folder('sites/vilasesamo', 'global/para-os-pais', array("site" => $site, "asset" => $asset, "categories" => $categories, "uri" => $uri)) ?>

</div>
<!--/content-->
<script>
$(document).find('object').before('<span class="sorryFlash" aria-label="Desculpe amiguinho, esse jogo esta sem acessibilidade mas você pode chamar o papai e a mamãe ou um amiguinho pra vocês brincarem juntos, é divertido ou continue navegando e descobrindo as várias formas de se divertir! Até mais!" tabindex="0"></span>').find('embed').after('<noembed>esse jogo usa plugin flash</noembed>');
$('.sorryFlash').focus();
</script>
<?php echo $noscript ?>  

<script>
setInterval(function(){
  updateOrientation();  
},500);
alert(navigator.platform)

function updateOrientation(){  
  var screenWidth = screen.width;
  var windowWidth = window.innerWidth;
  //alert(windowWidth)
  //console.log("oiiiii");
  if (windowWidth > 470 || (screenWidth > 470 && windowWidth > 470 && window.orientation == 90) || (screenWidth > 470 && windowWidth > 470 && window.orientation == -90) || navigator.platform == "Win32" || navigator.platform == "Win64") {  
    $('.asset').fadeIn('fast');
    $('.turn-the-cell-please').hide();
    //goTopGame('header');
  } else {  
    $('.asset').hide();
    $('.turn-the-cell-please').fadeIn('fast'); 
    //goTopGame('#gameIntro'); 
  } 
}

function goTopGame(el){
  alert($(el).offset().top)
  $('html, body').animate({
    scrollTop:parseInt($(el).offset().top)
  }, "fast");
  
}
</script>
<?php echo $noscript; ?>