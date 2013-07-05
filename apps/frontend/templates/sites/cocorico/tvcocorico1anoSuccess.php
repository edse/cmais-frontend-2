<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!--FANCYBOX-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
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
    <h2><?php echo $section->getTitle() ?></h2>
  </div>
  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo">
    <?php if(isset($displays["destaque-principal"])): ?>
      <?php if(count($displays["destaque-principal"]) > 0): ?>
    <h5><?php echo $displays["destaque-principal"][0]->Asset->getDescription() ?></h5>     
      <img alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-5-b") ?>" style="float:left;margin-right: 20px;">
      <?php echo (html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent())) ?>
      <p class="grd">Parabéns!!!</p>
      <p class="grd"><span><?php echo $displays["destaque-principal"][0]->getTitle() ?><br/>
        <?php echo $displays["destaque-principal"][0]->getHeadline() ?></span>
      </p>
    </div>
      <?php endif; ?>
    <?php endif; ?>


     <!-- rodapé-->
      <div class="row-fluid  border-top"></div>
        <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
        <!--/rodapé-->
</div>
 
<!-- /container-->


