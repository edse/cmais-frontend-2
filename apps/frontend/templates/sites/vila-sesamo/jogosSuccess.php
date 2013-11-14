<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna jogos");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
<!--section-->
<section class="filtro row-fluid">
  <!--span12-->
  <div class="span12" role="main">
    
    <!--h3><i class="sprite-icon-colorir-med"></i>Atividades</h3-->
    <h1><i class="icones-sprite-interna icone-jogos-grande"></i>Jogos</h1>
    
    <?php if(isset($displays['destaque-1']) || isset($displays['destaque-2'])): ?>
      <?php if(count($displays['destaque-1']) > 0 || count($displays['destaque-2']) > 0): ?>
    <!--destaque-filtro-->
    <div class="span10 destaque-filtro">
      <!--/destaques-->
      <div class="aba1">
        <?php if(isset($displays['destaque-1'])): ?>
          <?php if(count($displays['destaque-1']) > 0): ?>
            <?php $related_preview = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByRelationType("Preview"); ?>
        <h2 aria-describedby="Novidade">
          <article class="span6 clipes">
            <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/jogos/<?php echo $displays['destaque-1'][0]->Asset->getSlug() ?>">
              <span class="sprite-selo">Novidade!</span>
              <img src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" />
              <p><?php echo $displays['destaque-1'][0]->getTitle() ?></p> 
            </a> 
          </article>
        </h2>
          <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($displays['destaque-2'])): ?>
          <?php if(count($displays['destaque-2']) > 0): ?>
        <h2 aria-describedby="Novidade">
          <article class="span6 clipes  semmargem">
            <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/jogos/<?php echo $displays['destaque-2'][0]->Asset->getSlug() ?>">
              <span class="sprite-selo">Novidade!</span>
              <img src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" />
              <p><?php echo $displays['destaque-2'][0]->getTitle() ?></p> 
            </a> 
          </article>
        </h2>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <!--/destaques-->
    </div>
    <!--destaque-filtro-->
      <?php endif; ?>
    <?php endif; ?>
    
    <!--menu filtro persoagem-->
    <?php $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"personagens"); ?>
    <?php $personagens = $particularSection->subsections()?>
    
    <?php include_partial_from_folder('sites/vila-sesamo', 'global/menu-personagens', array('site'=>$site ,'section' => $section,'personagens' => $personagens)) ?>
    <!--/menu filtro persoagem-->
        
  </div>
  <!--/span12-->
</section>
<!--/section-->


<?php if(isset($pager)): ?>
  <?php if(count($pager) > 0): ?>
    
<span class="divisa"></span>

<!--/section-->
<section class="todos-itens ">
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
      }
    ?>
    <li class="span4 element<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?> jogos"> 
      <a href="/<?php echo $site->getSlug() ?>/jogos/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>" aria-label="<?php echo $d->getTitle() ?>">
        <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getDescription() .". ".$related[0]->AssetImage->getHeadline() ?>" />
        <i class="icones-sprite-interna icone-jogos-pequeno"></i>
        <div>
          <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
          <span aria-hidden="true"><?php echo $d->getTitle() ?></span>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
  </ul> 
  <!--lista-->  
</section>
<!--/section-->
  <?php endif; ?>
<?php endif; ?>

</div>
<!--/content-->
  


<input type="hidden" id="filter-choice" value="">

<nav id="page_nav">
  <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="icones-sprite-interna icone-carregar-br-grande"></i></a>
</nav>


<!--scripts-->
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<?php /*<script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script> */ ?>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
