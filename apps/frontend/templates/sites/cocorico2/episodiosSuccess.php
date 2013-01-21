<?php
$assets = Doctrine_Query::create()
->select('a.*')
->from('Asset a, AssetVideo av')
->where('a.id = av.asset_id')
->andWhere('a.site_id = ?', 1017)
->andWhere('a.asset_type_id = 6')
->andWhere("av.youtube_id != ''")
->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
->orderBy('a.id desc')
->limit(12)
->execute();
?>
<?php 
 $assets = $pager->getResults($assets);
 echo count($assets). "teste";
?>
<?php 
/*
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });

</script>
<!-- container-->
<div class="container tudo tvcocorico">
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
  <ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $section->getTitle()?></li>
  </ul>
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina">
    <h2>Episódios completos</h2>
  </div>
  <!-- titulo da pagina -->
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
  <div class="row-fluid conteudo destaques">
    <ul id="convidados">
      <?php foreach($pager->getResults() as $d): ?>
        <?php $related = $d->retriveRelatedAssetsByAssetTypeId(6); ?>
        <li class="span4">
          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />
            <?php echo $d->getTitle() ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- /row-->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a href="#" title="Anterior"></a></li>
      <li class="active"><a href="#" title="1">1</a></li>
      <li><a href="#" title="1">2</a></li>
      <li><a href="#" title="1">3</a></li>
      <li><a href="#" title="1">...</a></li>
      <li><a href="#" title="1">18</a></li>
      <li class="proximo" title="Próximo"><a href="#"></a></li>
    </ul>
  </div>
  <!-- /paginacao -->
  <?php endif;?>
    <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
 * */?>
 */