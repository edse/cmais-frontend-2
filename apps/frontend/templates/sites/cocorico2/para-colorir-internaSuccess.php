<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

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
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/para-colorir">para colorir</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle()?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php echo $asset->getTitle()?></h2>
    <span></span>
    <ul class="likes">
      <li class="ativo"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <a href="#" class="curtir" title="Curtir">curtir</a>
  <a href="#" class="curtir disabled" title="Curtir">curtir</a>
  <!-- titulo da pagina -->

  <!--row-->
  <div class="row-fluid conteudo">
    <p class="span12"><?php echo $asset->getDescription(); ?></p>
    <a  href="javascript:printDiv('div1')" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->getFile(); ?>.jpg" title="Imprimir">
      <img class="border-radius10" width="100%" src="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->getFile(); ?>.jpg" alt="" />
    </a>
    <a href="javascript:printDiv('div1')" class="print btn-imprimir border-radius10" datasrc="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->getFile(); ?>.jpg" alt="imprimir">imprimir</a>
    <div id="div1" style="display: none;page-break-after:always;">
      <img src="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->getFile(); ?>.jpg" style="width:95%">
    </div>
    <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id=print_frame width=0 height=0 frameborder=0 src=about:blank></iframe>
      <!--/IFRAME PARA IMPRESSAO EM IE -->
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="<?php $site->retriveUrl();?>/para-colorir">para colorir</a><span></span></div>
    
      <?php
      $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa, Section s')
        ->where('a.id = sa.asset_id')
        ->andWhere('s.id = sa.section_id')
        ->andWhere('s.slug = "para-colorir"')
        ->andWhere('a.site_id = ?', (int)$site->id)
        //->andWhere('a.asset_type_id = 1')
        //->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
        ->groupBy('sa.asset_id')
        //->orderBy('a.id desc')
        ->limit(6)
        ->execute();
    ?>
    <?php if(count($assets) > 2): ?>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
      <?php $related = $d->retriveRelatedAssetsByRelationType('Original');  ?>
      <li class="span2">
        <?php echo $related[0]->retriveImageUrlByImageUsage('image-6-b')."teste6" ?>
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
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