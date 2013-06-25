<?php 
$assets = $pager->getResults();
?>

<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });

</script>
<!-- container-->
<div class="container tudo tvcocorico">
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
  <!-- breadcrumb -->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <h2 class="tit-pagina">Episódios completos</h2>
  <!-- titulo da pagina -->
  <!--
  <form class="form-search form-episodio">
    <p>XX resultados para "<i>palavra-chave</i>"</p>
    <div class="botoes">
      <span>|</span>
      <input type="text" class="input-medium search-query" placeholder="Busque por palavra-chave">
      <button type="submit" class="btn">
        <i class="icon-search"></i>
      </button>
    </div>
  </form>
  -->
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

  <!--row-->
  <div class="row-fluid conteudo destaques ytb">
    <ul id="convidados">
      <?php foreach($pager->getResults() as $d): ?>
        <li class="span4">
          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <img class="span12" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
            <p><?php $tam=33; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
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
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
 