<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
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
<ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/episodios">episódios</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle()?></li>
  </ul>
  <!-- /breadcrumb-->
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  <h2 class="tit-pagina episodio"><?php echo $asset->getTitle() ?></h2>
  
  <!--row-->
  <div class="row-fluid conteudo">
   <span class="data"><?php echo $asset->AssetContent->getHeadline() ?></span>
   <p>
     <?php echo html_entity_decode($asset->AssetContent->render()) ?>
   </p>
     <?php
      if (count($asset) > 0):
        $offset = "0m0s";
        if($asset->AssetVideo->getStartFrom() != ""){
          $p = explode(":",$asset->AssetVideo->getStartFrom());
          $offset = $p[0]."m".$p[1]."s";
        }
      ?>
   <iframe width="940" height="529" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0<?php echo "#t=".$offset; ?>" frameborder="0" allowfullscreen></iframe>
   <?php endif; ?>
  </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="<?php echo $site->retriveUrl();?>/episodios"><?php echo $section->getTitle()?></a><span></span></div>

 <?php
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "episodios"')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 6')
      ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
      ->groupBy('sa.asset_id')
      ->orderBy('a.id desc')
      ->limit(6)
      ->execute();
  ?>
  <?php echo count($assets).">>>>>>>>>>" ?>
  <?php if(count($assets) > 0): ?>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
      <li class="span2">
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          <img class="span12" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />
          <?php echo $d->getTitle() ?> 
        </a>
     </li>
     <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  </div>
  <!-- /row-->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->