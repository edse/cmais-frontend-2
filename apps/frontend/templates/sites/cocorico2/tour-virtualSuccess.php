<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
  
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
      </div>
    </div>
  </div>
  <!-- /row--> 
  
    <!-- breadcrumb-->
  <ul class="breadcrumb personagem">
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/tvcocorico">TV Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $section->getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->

  <h2 class="tit-pagina"><?php echo $section->getTitle() ?></h2>
  
  <!--row-->
  <?php if(isset($displays['tour-virtual'])):?>
  <?php if(count($displays['tour-virtual']) > 0): ?>
  <div class="row-fluid conteudo">  	
  <p><?php echo html_entity_decode($displays['tour-virtual'][0]->Asset->AssetContent->render()) ?></p>
  <p class="tit">Assista também:</p>
   </div>
  <?php endif; ?>
   <?php endif; ?>
  <!-- /row-->
  <!--row-->
   
  <div class="row-fluid conteudo erros">
    <p class="tit"></p>
   
  <?php if(isset($displays['destaque-1'])):?>
    <?php if(count($displays['destaque-1']) > 0): ?>
   
      <a class="span4 destaque1" title="<?php echo $displays['destaque-1'][0]->Asset->getTitle() ?>" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>">
       <div class="destaque-1 conteudo-tv">
        <h3><?php echo $displays['destaque-1'][0]->Asset->getTitle() ?></h3>
        <img alt="<?php echo $displays['destaque-1'][0]->Asset->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-1'][0]->Asset->AssetVideo->getYoutubeId()?>/1.jpg">
        <p><?php echo $displays['destaque-1'][0]->Asset->getDescription() ?><i class="ico-mais"></i></p>
      </div>
     </a>
    <?php endif; ?>
   <?php endif; ?>
     
  <!-- ** DESTAQUE 2 **-->
    
   <?php if(isset($displays['destaque-2'])):?>
  	<?php if(count($displays['destaque-2']) > 0): ?>
  	 
      <a class="span4 destaque1" title="titulo" href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>"> 
      <div class="destaque-1 conteudo-tv">
        <h3><?php echo $displays['destaque-2'][0]->Asset->getTitle() ?></h3>
        <img alt="<?php echo $displays['destaque-2'][0]->Asset->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-2'][0]->Asset->AssetVideo->getYoutubeId()?>/1.jpg">
        <p><?php echo $displays['destaque-2'][0]->Asset->getDescription() ?><i class="ico-mais"></i></p>
      </div>
    </a> 
    <?php endif; ?>
   <?php endif; ?>
   
     <!-- ** DESTAQUE 3 **-->
    
   <?php if(isset($displays['destaque-3'])):?>
  	<?php if(count($displays['destaque-3']) > 0): ?>
  	 
      <a class="span4 destaque1 last" title="titulo" href="<?php echo $displays['destaque-3'][0]->retriveUrl() ?>"> 
      <div class="destaque-1 conteudo-tv">
        <h3><?php echo $displays['destaque-3'][0]->Asset->getTitle() ?></h3>
        <img alt="<?php echo $displays['destaque-3'][0]->Asset->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-3'][0]->Asset->AssetVideo->getYoutubeId()?>/1.jpg">
        <p><?php echo $displays['destaque-3'][0]->Asset->getDescription() ?><i class="ico-mais"></i></p>
      </div>
    </a> 
    <?php endif; ?>
   <?php endif; ?>
    
   </div>  
  
  <!-- /row-->
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->