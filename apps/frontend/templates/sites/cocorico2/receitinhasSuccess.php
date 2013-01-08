<?php 
$assets = $pager->getResults(); //depois tem de ordenar por ranking...
?>

<script type="text/javascript" src="/portal/js/bootstrap/popover.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo receitinhas">
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
  <ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Home</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Receitinhas</li>
  </ul>
  <!-- /breadcrumb-->
  
  <a href="<?php echo $site->retriveUrl() ?>/receitinhas" class="tit-pagina">Receitinhas</a>
  <div class="zaza"><a href="<?php echo $site->retriveUrl() ?>/cozinha-da-zaza">zaza</a></div>

  <?php if(count($assets) > 0): ?>
  <div class="row-fluid conteudo destaques">
    <?php if(isset($assets[0])): ?>
      <?php $related = $assets[0]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[0]->retriveUrl() ?>" title="<?php echo $assets[0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[0]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[0]->getDescription() ?>" data-original-title="<?php echo $assets[0]->getTitle() ?>"><span class=""></span><?php echo $assets[0]->getTitle() ?></a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section' => $section, 'asset' => $assets[0])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    <?php if(isset($assets[1])): ?>
      <?php $related = $assets[1]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[1]->retriveUrl() ?>" title="<?php echo $assets[1]->getTitle() ?>"><img class="span12" src="<?php echo $related[1]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[1]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[1]->getDescription() ?>" data-original-title="<?php echo $assets[1]->getTitle() ?>"><span class=""></span><?php echo $assets[1]->getTitle() ?></a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$assets[1])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    <?php if(isset($assets[2])): ?>
      <?php $related = $assets[2]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $assets[2]->retriveUrl() ?>" title="<?php echo $assets[2]->getTitle() ?>"><img class="span12" src="<?php echo $related[2]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $assets[2]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $assets[2]->getDescription() ?>" data-original-title="<?php echo $assets[2]->getTitle() ?>"><span class=""></span><?php echo $assets[2]->getTitle() ?></a>
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
            <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
              <img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" />
              <?php echo $d->getTitle() ?></a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
  <!-- /row-->
  <?php else: ?>
    <p>Nenhuma receitinha encontrada.</p>
  <?php endif; ?>
  
  <?php /*
   * 
   * Paginação vai ficar pra depois!!!
   * 
   *   
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a href="#" title="Anterior"></a></li>
      <li class="active"><a href="#" title="1">1</a></li>
      <li><a href="#" title="1">2</a></li>
      <li><a href="#" title="1">3</a></li>
      <li><a href="#" title="1">...</a></li>
      <li><a href="#" title="1">18</a></li>
      <li class="proximo" title="Próximo"><a href="#"></a></li>
    </ul>
  </div>
  <!-- /paginacao -->
   * 
   */
  ?>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
  
  <!-- /rodape-->
</div>
<!-- /container-->