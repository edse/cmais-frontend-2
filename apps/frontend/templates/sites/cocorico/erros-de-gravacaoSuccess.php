<?php 

  $assets = $pager->getResults();
  if(!$asset){
    $asset = $assets[0];
  }

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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  
  <h2 class="tit-pagina"><?php echo $section->getTitle() ?></h2>
  
  <?php if(count($pager) > 0): ?>

    <!--row-->
    <div class="row-fluid conteudo">    
      <?php if($asset->getDescription()!="") echo "<p>".$asset->getDescription()."</p>"; ?>
      <iframe width="940" height="529" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId(); ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
      <p class="tit" style="margin:20px 0 -20px 0">Assista também:</p>
    </div>
    <!-- /row-->

    <?php if($pager->haveToPaginate()): ?>
    <!-- paginacao -->
    <div class="pagination pagination-centered">
      <ul>
        <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
            <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php else: ?>
            <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php endif; ?>
        <?php endforeach;?>
        <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
      </ul>
    </div>
    <!-- /paginacao -->
    <?php endif; ?>

  <!--row-->
  <?php if(count($pager) > 0): ?>
  <div class="row-fluid relacionados">
    <div class="row-fluid conteudo ytb"> 
      <ul class="destaques-small top">
      <?php foreach($pager->getResults() as $d): ?>
        <li class="span2">
          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <img class="span12" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />
            <p><?php $tam=16; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p> 
          </a>
        </li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <?php endif; ?>
  <!-- /row-->
  
  <?php if(count($pager) > 0): ?>
    <?php if($pager->haveToPaginate()): ?>
    <!-- paginacao -->
    <div class="pagination pagination-centered">
      <ul>
        <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
            <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php else: ?>
            <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php endif; ?>
        <?php endforeach;?>
        <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
      </ul>
    </div>
    <!-- /paginacao -->
    <?php endif; ?>
   <?php endif; ?> 
      <form id="page_form" action="" method="post">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
    </form>
    <script>
      function goToPage(i){
        $("#page").val(i);
        $("#page_form").submit();
      }
    </script>
  <?php endif;?>
 
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->