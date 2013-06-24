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
    <ul class="destaques-small">
      <?php if(count($assets) > 0): ?>
        <?php foreach($assets as $k=>$d): ?>
          <?php if($k > 2): ?>
            <?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
            <li class="span2">
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                <img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" />
                <?php //echo $d->getTitle() ?>
                <?php $tam=18; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
  <!-- /row-->
  <?php else: ?>
    <p>Nenhum joguinho encontrado.</p>
  <?php endif; ?>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->