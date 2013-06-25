<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
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
  
  <h2 class="tit-pagina">Papel de parede</h2>
  
  <!--row-->
  <?php if(count($favoritos) > 0): ?>
  <div class="row-fluid conteudo destaques">
    <?php if(isset($favoritos[0])): ?>
      <?php $related = $favoritos[0]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $favoritos[0]->retriveUrl() ?>" title="<?php echo $favoritos[0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $favoritos[0]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn btn-popover" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $favoritos[0]->getDescription() ?>" data-original-title="<?php echo $favoritos[0]->getTitle() ?>">
        <span class=""></span>
        <?php //echo $favoritos[0]->getTitle() ?>
        <?php $tam=32; $str=$favoritos[0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section' => $section, 'asset' => $favoritos[0])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    
    <?php if(isset($favoritos[1])): ?>
      <?php $related = $favoritos[1]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $favoritos[1]->retriveUrl() ?>" title="<?php echo $favoritos[1]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $favoritos[1]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $favoritos[1]->getDescription() ?>" data-original-title="<?php echo $favoritos[1]->getTitle() ?>">
        <span class=""></span>
        <?php //echo $favoritos[1]->getTitle() ?>
        <?php $tam=32; $str=$favoritos[1]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$favoritos[1])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    
    <?php if(isset($favoritos[2])): ?>
      <?php $related = $favoritos[2]->retriveRelatedAssetsByRelationType('Preview') ?>
    <div class="span4">
      <a href="<?php echo $favoritos[2]->retriveUrl() ?>" title="<?php echo $favoritos[2]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $favoritos[2]->getTitle() ?>" /></a>
      <a href="#" class="span12 btn" title="abre tooltip" rel="popover" data-placement="bottom" data-trigger="click" data-content="<?php echo $favoritos[2]->getDescription() ?>" data-original-title="<?php echo $favoritos[2]->getTitle() ?>">
        <span class=""></span>
        <?php //echo $favoritos[2]->getTitle() ?>
        <?php $tam=32; $str=$favoritos[2]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
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
  <div class="row-fluid conteudo">
    <ul class="destaques-small">
    <?php foreach($pager->getResults() as $d): ?>
      <?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
      <li class="span2">
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-2') ?>" alt="<?php echo $d->getTitle() ?>" />
          <?php $tam=18; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
  <!-- /row-->

  <?php if($pager->haveToPaginate()): ?>
  <!-- PAGINACAO -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
      <?php foreach ($pager->getLinks() as $page): ?>
        <?php if ($page == $pager->getPage()): ?>
      <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
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
  
</div>
<!-- /container-->