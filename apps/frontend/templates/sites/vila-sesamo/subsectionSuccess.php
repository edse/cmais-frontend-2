<?php
  $parentSection = $section; 
  if($section->getParentSectionId() > 0)
    $parentSection = Doctrine::getTable('Section')->findOneById((int)$section->getParentSectionId());
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna <?php echo $parentSection->getSlug() ?>");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->
<div id="content">
  <section class="scroll row-fluid">
    <h3><i class="sprite-icon-<?php echo $parentSection->getSlug() ?>-med"></i><?php echo $parentSection->getTitle() ?><i class="seta-scroll sprite-scroll-<?php echo $parentSection->getSlug() ?>"></i></h3>
  </section>
  <section class="filtro row-fluid">
    <div class="span12">
      <h3><i class="sprite-icon-<?php echo $parentSection->getSlug() ?>-med"></i><?php echo $parentSection->getTitle() ?></h3>
      
      <div class="span10 destaque-filtro especial">
    
        <?php if($parentSection->subsections()): ?>
        <ul class="nav nav-tabs" id="myTab">
            <?php foreach($parentSection->subsections() as $k=>$s): ?>
              <?php $k++; ?>
          <li class="<?php if($s->getId() == $section->getId()): ?>active <?php endif; ?>aba<?php echo $k ?>"><a href="<?php echo $s->retriveUrl() ?>"><?php echo $s->getTitle() ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
 
        <div class="tab-content">
          <div class="tab-pane active" id="clipes" class="aba1">
            <?php if(isset($displays['destaque-1'])): ?>
              <?php if(count($displays['destaque-1']) > 0): ?>
            <article class="span6">
              <a class="img-destaque" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-1'][0]->getTitle() ?>">
                <span class="sprite-selo">Novidade!</span>
                <img src="<?php echo $displays['destaque-1'][0]->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" /> 
              </a> 
              <h1><a href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-1'][0]->getTitle() ?>"><?php echo $displays['destaque-1'][0]->getTitle() ?></a></h1>
            </article>
              <?php endif; ?>
            <?php endif; ?>
          </div>
          <div class="tab-pane" id="episodios">
            <?php if(isset($displays['destaque-2'])): ?>
              <?php if(count($displays['destaque-2']) > 0): ?>
            <article class="span6">
              <a class="img-destaque" href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-2'][0]->getTitle() ?>">
                <span class="sprite-selo">Novidade!</span>
                <img src="<?php echo $displays['destaque-2'][0]->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" /> 
              </a> 
              <h1><a href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-2'][0]->getTitle() ?>"><?php echo $displays['destaque-2'][0]->getTitle() ?></a></h1>
            </article>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
       
      </div>

      <?php include_partial_from_folder('sites/vilasesamo', 'global/sidebar-personagens') ?>

    </div>
    
  </section>
  <span class="divisa"></span>
  <?php if(isset($pager)): ?>
    <?php if(count($pager) > 0): ?>
  <section class="todos-itens ">
    <ul  id="container" class="row-fluid">
      <?php foreach($pager->getResults() as $k=>$d): ?>
        <?php
          $personagensSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'personagens');
          $assetPersonagens = array();
          $assetSections = $d->getSections();
          foreach($assetSections as $a) {
            if($a->getParentSectionId() == $personagensSection->getId()) {
              $assetPersonagens[] = $a->getSlug();
            }
          }
        ?>
      <li class="span4 element<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?>">
        <?php if($d->AssetType->getSlug() == "video"): ?>
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" /></a>
        <?php else: ?>
          <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>" /></a>
        <?php endif; ?>
        <h2><a><?php echo $d->getTitle() ?></a></h2>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>
    <?php endif; ?>
  <?php endif; ?>  
  <span class="divisa"></span>
</div>

<input type="hidden" id="filter-choice" value="">

<!--
<nav id="page_nav">
  <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="sprite-icon-mais"></i></a>
</nav>
-->

<!--scripts-->

<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<!--<script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script>-->
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
