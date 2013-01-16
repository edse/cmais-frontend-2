<?php
if(!isset($asset)){
  $assets = $pager->getResults();
  $asset = $assets[0];
}
?>

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
  <!-- breadcrumb-->
  <ul class="breadcrumb">
    <li><a href="/cocorico">TV Cocoricó</a><span class="divider">&rsaquo;</span></li>
    <li><a href="/cocorico">Bastidores</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Erros de gravação</li>
  </ul>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">Erros de gravação</h2>
  
  <!--row-->
  <div class="row-fluid conteudo">  	
  <p><?php echo $asset->getDescription()?></p>
  <iframe width="940" height="529" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
  </div>

  <!-- /row-->
  <!--row-->
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="/cocorico/joguinhos">Erros de gravação</a><span></span></div>
    <ul class="destaques-small">
    	<?php if(count($assets) > 0): ?>
        <?php foreach($assets as $k=>$d): ?>
      <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $asset->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?></a></li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
    
  </div>
  <!-- /row-->
  
  <!-- rodape-->
    <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /rodape-->
</div>
<!-- /container-->