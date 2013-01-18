<?php use_helper('I18N', 'Date') ?>

<script type="text/javascript" src="/portal/js/bootstrap/tooltip.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
 <!-- row-->
  <div class="row-fluid menu">
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
     <li><a href="<?php echo $site->retriveUrl() ?>">Home</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/receitinhas">Receitinhas</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="<?php echo $site->retriveUrl() ?>/receitinhas" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina">
    <h2><?php echo $asset->getTitle() ?></h2>
    <span></span>
    <!-- RANKING -->
    <?php $section = $asset->getSections(); ?>
    <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('asset'=>$asset,'section'=>$section[0])) ?>
    <!--/RANKING -->
  </div>
  <a id="btn_1" href="javascript: vote('<?php echo $asset->getId() ?>');" class="curtir" title="Curtir">curtir</a>
  <img src="/images/spinner_bar.gif" style="display: none; float: right;" id="v_load" />
  <a id="btn_2" href="javascript:;" class="curtir disabled" title="Curtir">curtir</a>
  <!-- titulo da pagina -->
  
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span6 receita">
    <p class="alerta"><span></span>Na cozinha, Sempre peça ajuda a um adulto!</p>
    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
    </div>
    <div class="span6">
      <?php $related_video = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
      <?php 
      if (count($related_video) > 0):
        $offset = "0m0s";
        if($related_video[0]->AssetVideo->getStartFrom() != ""){
          $p = explode(":",$related_video[0]->AssetVideo->getStartFrom());
          $offset = $p[0]."m".$p[1]."s";
        }
      ?>
      <iframe width="460" height="259" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0<?php echo "#t=".$offset; ?>" frameborder="0" allowfullscreen></iframe>
      <?php endif; ?>
    </div>
  </div>
  <!--/row-->
  
  <?php
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "receitinhas"')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 1')
      ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
      ->groupBy('sa.asset_id')
      ->orderBy('a.id desc')
      ->limit(6)
      ->execute();
  ?>
  <?php if (count($assets) > 0): ?>
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit"><span class="mais"></span><a href="<?php echo $site->retriveUrl() ?>/receitinhas">Receitinhas</a><span></span></div>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
        <?php $related = $d->retriveRelatedAssetsByAssetTypeId(6); ?>
      <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- /row-->
  <?php endif; ?>

  <!-- rodapé--> 
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->

<script>
function vote(id){
  $.ajax({
    type: "GET",
    dataType: "text",
    data: "asset_id="+id,
    url: "/ajax/ranking",
    beforeSend: function(){
      $('#btn_1').hide();
      $('#btn_2').show();
      $('#v_load').show();
    },
    success: function(data){
      if(data == 1){
        $('#btn_1').hide();
        $('#btn_2').show();
      }else{
        alert('Erro!');
        $('#btn_1').show();
        $('#btn_2').hide();
      }
      $('#v_load').hide();
    }
  });
}
</script>