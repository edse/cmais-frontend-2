<?php 
$assets = $pager->getResults();
?>

<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo receitinhas">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
  
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  
  <a href="<?php echo $site->retriveUrl() ?>/receitinhas" class="tit-pagina">Receitinhas</a>
  <div class="zaza">
    <p>Cozinha da Amiga Zazá</p>
  </div>

  <?php if(count($favoritos) > 0): ?>
  <div class="row-fluid conteudo destaques ytb">
    <?php if(isset($favoritos[0])): ?>
      <?php $related = $favoritos[0]->retriveRelatedAssetsByAssetTypeId(6); ?>
    <div class="span4">
      <a href="<?php echo $favoritos[0]->retriveUrl() ?>" title="<?php echo $favoritos[0]->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $favoritos[0]->getTitle() ?>" /></a>
      <a href="<?php echo $favoritos[0]->retriveUrl() ?>" class="span12 btn" title="<?php echo $favoritos[0]->getTitle() ?>">
        <span class=""></span>
        <?php //echo $favoritos[0]->getTitle() ?>
        <?php $tam=22; $str=$favoritos[0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section' => $section, 'asset' => $favoritos[0])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    
    <?php if(isset($favoritos[1])): ?>
      <?php $related = $favoritos[1]->retriveRelatedAssetsByAssetTypeId(6); ?>
    <div class="span4">
      <a href="<?php echo $favoritos[1]->retriveUrl() ?>" title="<?php echo $favoritos[1]->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $favoritos[1]->getTitle() ?>" /></a>
      <a href="<?php echo $favoritos[1]->retriveUrl() ?>" class="span12 btn" title="<?php echo $favoritos[1]->getTitle() ?>" >
        <span class=""></span>
        <?php //echo $favoritos[1]->getTitle() ?>
        <?php $tam=22; $str=$favoritos[1]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$favoritos[1])) ?>
      <!--/RANKING -->
    </div>    
    <?php endif; ?>
    
    <?php if(isset($favoritos[2])): ?>
      <?php $related = $favoritos[2]->retriveRelatedAssetsByAssetTypeId(6); ?>
    <div class="span4">
      <a href="<?php echo $favoritos[2]->retriveUrl() ?>" title="<?php echo $favoritos[2]->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $favoritos[2]->getTitle() ?>" /></a>
      <a href="<?php echo $favoritos[2]->retriveUrl() ?>" class="span12 btn" title="<?php echo $favoritos[2]->getTitle() ?>" >
        <span class=""></span>
        <?php //echo $favoritos[2]->getTitle() ?>
         <?php $tam=22; $str=$favoritos[2]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$favoritos[2])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
  </div>
  <!-- /row--> 
  <?php endif; ?>
  
  <!--row-->
  <?php if(count($pager) > 0): ?>
  <div class="row-fluid conteudo ytb">
    <ul class="destaques-small">
    <?php foreach($pager->getResults() as $d): ?>
      <?php $related = $d->retriveRelatedAssetsByAssetTypeId(6); ?>
      <li class="span2">
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          <img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />
          <p><?php $tam=16; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>

    <?php if($pager->haveToPaginate()): ?>
    <!-- PAGINACAO -->
    <div class="pagination pagination-centered">
      <ul>
        <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
        <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php else: ?>
        <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php endif; ?>
        <?php endforeach; ?>
        <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
      </ul>
    </div>
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
    <!--// PAGINACAO -->
    <?php endif; ?>

  <?php else: ?>
    <p>Nenhuma receitinha encontrada.</p> 
  <?php endif; ?>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
  
  <!-- /rodape-->
</div>
<!-- /container-->