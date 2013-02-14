<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!--FANCYBOX-->
<script type="text/javascript" src="/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/portal/js/embedagram/jquery-embedagram.pack.js"></script> 
<!--/FANCYBOX-->

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
    <!--topo coco-->
    <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
    <!--/topo coco-->
  
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina tit-extra">
    <h2><i class="ico-bike"></i><?php echo $section->getTitle() ?><span><?php echo $section->getDescription() ?></span></h2>
  </div>
  <!-- titulo da pagina -->
  <!-- /row-->
  <div class="row-fluid conteudo">
   <h3><?php echo $asset->getTitle() ?></h3>
   <span class="data"><?php echo $asset->AssetContent->getHeadlineShort() ?></span>
   <a class="span6"><img src="<?php echo $asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $asset->getTitle() ?>" /></a>
   <div class="span6">
     <?php if ($asset->AssetContent->getHeadline()): ?>
     <p class="frase"><span></span><?php echo $asset->AssetContent->getHeadline() ?> <span class="last"></span></p>
     <?php endif; ?>
     <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
   </div>
   
  </div>
  <!-- /row-->
  
 
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
