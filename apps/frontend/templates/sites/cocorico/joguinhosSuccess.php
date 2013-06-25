<?php
$assets = $pager->getResults(); //depois tem de ordenar por ranking...
?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/popover.js"></script>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/joguinhos.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
  
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->
  
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  
  <h2 class="tit-pagina">Joguinhos</h2>
  
  <!--row-->
  <?php if(count($assets) > 0): ?>
  <div class="row-fluid conteudo destaques">
    <?php if(isset($assets[0])): ?>
      <?php $related = $assets[0]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[0]->retriveUrl() ?>" title="<?php echo $assets[0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[0]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[0]->getDescription() ?>" data-original-title="<?php echo $assets[0]->getTitle() ?>">
        <span></span>
        <?php echo $assets[0]->getTitle() ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section' => $section, 'asset' => $assets[0])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    <?php if(isset($assets[1])): ?>
      <?php $related = $assets[1]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[1]->retriveUrl() ?>" title="<?php echo $assets[1]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[1]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[1]->getDescription() ?>" data-original-title="<?php echo $assets[1]->getTitle() ?>">
        <span></span>
        <?php echo $assets[1]->getTitle() ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$assets[1])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    <?php if(isset($assets[2])): ?>
      <?php $related = $assets[2]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[2]->retriveUrl() ?>" title="<?php echo $assets[2]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[2]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[2]->getDescription() ?>" data-original-title="<?php echo $assets[2]->getTitle() ?>">
        <span></span>
        <?php //echo $assets[2]->getTitle() ?>
        <?php $tam=18; $str=$assets[2]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$assets[2])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
  </div>
  
  <!-- /row-->
  <!--row-->
  <div class="row-fluid conteudo destaques">
    
    <?php if(count($assets) > 3): ?>

    <?php if(isset($assets[3])): ?>
      <?php $related = $assets[3]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[3]->retriveUrl() ?>" title="<?php echo $assets[3]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[3]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[3]->getDescription() ?>" data-original-title="<?php echo $assets[3]->getTitle() ?>">
        <span></span>
        <?php echo $assets[3]->getTitle() ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section' => $section, 'asset' => $assets[3])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    <?php if(isset($assets[4])): ?>
      <?php $related = $assets[4]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[4]->retriveUrl() ?>" title="<?php echo $assets[4]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[4]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[4]->getDescription() ?>" data-original-title="<?php echo $assets[4]->getTitle() ?>">
        <span></span>
        <?php echo $assets[4]->getTitle() ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$assets[4])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    <?php if(isset($assets[5])): ?>
      <?php $related = $assets[5]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[5]->retriveUrl() ?>" title="<?php echo $assets[5]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[5]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[5]->getDescription() ?>" data-original-title="<?php echo $assets[5]->getTitle() ?>">
        <span></span>
        <?php //echo $assets[2]->getTitle() ?>
        <?php $tam=18; $str=$assets[5]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$assets[5])) ?>
      <!--/RANKING -->
     </div>
    <?php endif; ?>
   </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid conteudo destaques">
    
    <?php if(count($assets) > 6): ?>
      
      <?php if(isset($assets[6])): ?>
      <?php $related = $assets[6]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[6]->retriveUrl() ?>" title="<?php echo $assets[6]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[6]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[6]->getDescription() ?>" data-original-title="<?php echo $assets[6]->getTitle() ?>">
        <span></span>
        <?php echo $assets[6]->getTitle() ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section' => $section, 'asset' => $assets[3])) ?>
      <!--/RANKING -->
    </div>
     <?php endif; ?>
   <?php endif; ?> 
  
     <?php endif; ?>
    <?php endif; ?>
   </div>
   <p>
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->