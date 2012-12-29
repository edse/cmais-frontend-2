<script type="text/javascript" src="/portal/js/bootstrap/tooltip.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
 <!-- row-->
  <div class="row-fluid menu">
    <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <!-- MENU PRINCIPAL -->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu') ?>
      <!--/MENU PRINCIPAL -->
      
      <!-- PERSONAGENS -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site' => $site)) ?>
      <!--/PERSONAGENS -->
      
    </div>
  </div>
  <!-- /row-->
  
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico">Home</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico/receitinhas">Receitinhas</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php echo $asset->getTitle() ?></h2>
    <span></span>
    <!-- RANKING -->
    <?php $section = $asset->getSections(); ?>
    <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('asset'=>$asset,'section'=>$section[0])) ?>
    <!--/RANKING -->
  </div>
  <a id="btn_1" href="javascript: vote('<?php echo $asset->getId()?>');" class="curtir" title="Curtir">curtir</a>
  <img src="/images/spinner_bar.gif" style="display: none; float: right;" id="v_load" />
  <a id="btn_2" href="javascript:;" class="curtir disabled" title="Curtir">curtir</a>
  <!-- titulo da pagina -->
  
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span6 receita">
    <p class="alerta"><span></span>Na cozinha, Sempre peça ajuda a um adulto!</p>
    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
    </div>
    <div class="span6">
      <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
      <?php if (count($related) > 0): ?>
      <iframe width="460" height="259" src="http://www.youtube.com/embed/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>?wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
      <?php endif; ?>
    </div>
  </div>
  <!--/row-->
  
  <?php
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "receitinhas"')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 1')
      ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
      ->groupBy('sa.asset_id')
      ->orderBy('a.id desc')
      ->limit(6)
      ->execute();
  ?>
  <?php if (count($assets) > 0): ?>
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit"><span class="mais"></span><a href="/cocorico/receitinhas">Receitinhas</a><span></span></div>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
        <?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
      <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- /row-->
  <?php endif; ?>

  <div class="row-fluid  border-top"></div>
  <!-- rodape-->
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape') ?>
  <!-- /rodape-->
</div>
<!-- /container-->