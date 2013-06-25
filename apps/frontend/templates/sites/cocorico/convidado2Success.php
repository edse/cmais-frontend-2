<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
} 
?>

<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
 
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
    <li><a href="<?php echo $site->retriveUrl() ?>">Home</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Convidado do dia</li>
  </ul> 
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">Convidado do Dia</h2>
  <div class="convidados">
    <a href="<?php echo $site->retriveUrl() ?>/convidados" title="Quem já passou por aqui?">Quem já passou por aqui?</a>
  </div>
  
  
   <!-- PAGINACAO -->  	
     <?php if(isset($pager)): ?>
     <?php if($pager->haveToPaginate()): ?>
  	<!--row-->
  <div class="row-fluid">
    <div class="paginacao">
      <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="anterior" title="Convidado anterior"><span></span>Convidado Anterior</a>
      <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="proximo" title="Próximo Convidado">Próximo Convidado<span></span></a>
    </div>
  
  <!-- /row-->
  
  <form id="page_form" action="" method="post">
    <input type="hidden" name="return_url" value="<?php echo $url?>" />
    <input type="hidden" name="page" id="page" value="" />
    <input type="hidden" name="term" id="term" value="<?php echo $term ?>" />
    <input type="hidden" name="filter" id="filter" value="<?php echo $filter ?>" />
  </form>
  
  <script>
     function goToPage(i){
       $("#page").val(i);
       $("#page_form").submit();
     }
  </script>
  
   <?php endif; ?>
     <?php endif; ?>

  </div> 
    <!--row-->
    <!-- /PAGINACAO -->
    
  <div class="row-fluid conteudo">
   <h3><?php echo $asset->getTitle() ?></h3>
   <span class="data"><?php echo $asset->AssetContent->getHeadlineShort() ?></span>
   <a class="span6"><img src="<?php echo $asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $asset->getTitle() ?>" /></a>
   <div class="span6">
     <p class="frase"><span></span><?php echo $asset->AssetContent->getHeadline() ?>
   </div>
   <?php echo html_entity_decode($asset->AssetContent->render()) ?>
  </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid conteudo">
  	<p class="tit">Assista à participação na íntegra:</p>
  	<?php $related = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
      <?php if (count($related) > 0): ?>
      	<iframe width="940" height="529" src="http://www.youtube.com/embed/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>  
      <?php endif; ?>
    
   
  </div>
  <!-- /row-->

   <!-- PAGINACAO -->  
     <?php if(isset($pager)): ?>
     <?php if($pager->haveToPaginate()): ?>	
  	<!--row-->
  <div class="row-fluid">
    <div class="paginacao">
      <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="anterior" title="Convidado anterior"><span></span>Convidado Anterior</a>
      <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="proximo" title="Próximo Convidado">Próximo Convidado<span></span></a>
    </div>
  
  <!-- /row-->
  
  <form id="page_form" action="" method="post">
    <input type="hidden" name="return_url" value="<?php echo $url?>" />
    <input type="hidden" name="page" id="page" value="" />
    <input type="hidden" name="term" id="term" value="<?php echo $term ?>" />
    <input type="hidden" name="filter" id="filter" value="<?php echo $filter ?>" />
  </form>
  
  <script>
     function goToPage(i){
       $("#page").val(i);
       $("#page_form").submit();
     }
  </script>
  
   <?php endif; ?>
     <?php endif; ?>

  </div>
    <!--row-->
    <!-- /PAGINACAO -->

  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->