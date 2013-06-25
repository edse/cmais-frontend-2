
<?php 
if(isset($pager)){
  $assets = $pager->getResults();
}
if(!isset($asset))
  $asset = $assets[0];

?>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section,'asset'=>$asset)) ?>
  <!-- /breadcrumb-->
  
   <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->

  <h2 class="tit-pagina"><?php echo $section->getTitle() ?></h2>
  
  <!--row-->
  <?php if(isset($displays['tour-virtual'])):?>
  <?php if(count($displays['tour-virtual']) > 0): ?>
  <div id="box-destaque" class="row-fluid conteudo">    
    <p><?php echo html_entity_decode($displays['tour-virtual'][0]->Asset->AssetContent->render()) ?></p>
    <p style="margin: 20px 0 -20px 0" class="tit">Cante e dance com a turma do Cocoricó Confira mais clipes aqui:</p>
    <div class="row-fluid relacionados">
    <?php if(isset($displays['destaques'])):?>
      <?php if(count($displays['destaques']) > 0): ?> 
      <!-- clipe --> 
      <div class="span4 destaque-2 conteudo-diverso">
        <a href="<?php echo $displays['destaques'][0]->retriveUrl() ?>" title="<?php echo $displays['destaques'][0]->getTitle() ?>" class="clipe">
          <h3><?php echo $displays['destaques'][0]->getTitle() ?></h3>
          <img alt="<?php echo $displays['destaques'][0]->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaques'][0]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
          <p>
            <?php //echo $displays['destaques'][0]->getDescription() ?>
            <?php $tam=38; $str=$displays['destaques'][0]->getDescription() ; mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
          </p> 
        </a>
        <?php $se = $displays["destaques"][0]->Asset->Sections[0]->getTitle(); ?>
        <?php $se_link = $displays["destaques"][0]->Asset->Sections[0]->getSlug(); ?>
        <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="btn-ico-mais" title="<?php echo $se_link ?>"><i class="ico-mais"></i></a>
      </div> 
      <!-- /clipe -->
       
      <!-- clipe --> 
      <div class="span4 destaque-2 conteudo-diverso">
        <a href="<?php echo $displays['destaques'][1]->retriveUrl() ?>" title="<?php echo $displays['destaques'][1]->getTitle() ?>" class="clipe">
          <h3><?php echo $displays['destaques'][1]->getTitle() ?></h3>
          <img alt="<?php echo $displays['destaques'][1]->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaques'][1]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
          <p>
            <?php //echo $displays['destaques'][1]->getDescription() ?>
            <?php $tam=38; $str=$displays['destaques'][1]->getDescription(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
          </p>       
        </a>
        <?php $se = $displays["destaques"][1]->Asset->Sections[0]->getTitle(); ?>
        <?php $se_link = $displays["destaques"][1]->Asset->Sections[0]->getSlug(); ?>
        <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="btn-ico-mais" title="<?php echo $se ?>">
          <i class="ico-mais"></i>
        </a>
      </div> 
      <!-- /clipe -->
       
      <!-- clipe --> 
      <div class="span4 destaque-2 conteudo-diverso">
        <a href="<?php echo $displays['destaques'][2]->retriveUrl() ?>" title="<?php echo $displays['destaques'][2]->getTitle() ?>" class="clipe">
          <h3><?php echo $displays['destaques'][2]->getTitle() ?></h3>
          <img alt="<?php echo $displays['destaques'][2]->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaques'][2]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
          <p>
            <?php //echo $displays['destaques'][2]->getDescription() ?>
            <?php $tam=38; $str=$displays['destaques'][2]->getDescription(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
          </p>
        </a> 
        <?php $se = $displays["destaques"][2]->Asset->Sections[0]->getTitle(); ?>
        <?php $se_link = $displays["destaques"][2]->Asset->Sections[0]->getSlug(); ?>
        <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="btn-ico-mais" title="<?php echo $se ?>">
          <i class="ico-mais"></i>
        </a>
      </div> 
      <!-- /clipe -->
       
      <?php endif; ?>
    <?php endif; ?> 
    </div>
    <!-- /row clipes relacionados -->
  </div>
  <?php endif; ?>
  <?php else: ?>
  <div id="box-destaque" class="row-fluid conteudo">    
    <p>
      <iframe allowfullscreen="" frameborder="0" height="529" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId()?>?wmode=transparent&amp;rel=0#t=0m0s" title="<?php echo $asset->getTitle()?>" width="940"></iframe>
    </p>
  </div>
  <?php endif; ?>

  <!-- /row-->
  
  <?php /*
  <div class="row-fluid conteudo erros">
    <p class="tit">Assista tambÃ©m:</p>
   
  <?php if(isset($displays['destaque-1'])):?>
    <?php if(count($displays['destaque-1']) > 0): ?>
   
      <a class="span4 destaque1" title="<?php echo $displays['destaque-1'][0]->Asset->getTitle() ?>" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>">
       <div class="destaque-1 conteudo-tv">
        <h3><?php echo $displays['destaque-1'][0]->Asset->getTitle() ?></h3>
        <img alt="<?php echo $displays['destaque-1'][0]->Asset->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-1'][0]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
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
        <img alt="<?php echo $displays['destaque-2'][0]->Asset->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-2'][0]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
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
        <img alt="<?php echo $displays['destaque-3'][0]->Asset->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-3'][0]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
        <p><?php echo $displays['destaque-3'][0]->Asset->getDescription() ?><i class="ico-mais"></i></p>
      </div>
    </a> 
    <?php endif; ?>
   <?php endif; ?>
    
   </div>  
    * 
    */ ?>
  
  <!-- /row-->
  <!-- rodapÃ©-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapÃ©-->
</div>
<!-- /container-->