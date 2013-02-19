<script type="text/javascript" src="/portal/js/bootstrap/tooltip.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section, 'asset'=>$asset)) ?> 
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php $tam=28; $str=$asset->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></h2>
    <span></span>
    <ul class="likes">
      <li class="ativo"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <a href="#" class="curtir" title="Curtir">curtir</a>
  <a href="#" class="curtir disabled" title="Curtir">curtir</a>
  <!-- titulo da pagina -->
  
  <!--row-->
  <div class="row-fluid conteudo">
    <p class="span12"></p>
    <div class="span6 esq">
    <p class="alerta"><span></span>tenha Cuidado! peça ajuda a um adulto!</p>
    
    <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>


  </div>
    <div class="span6">
      <?php $related_video = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
      <?php $related_preview = $asset->retriveRelatedAssetsByRelationType('Preview') ?> 
      <?php $related_download = $asset->retriveRelatedAssetsByRelationType('Download') ?>
          
       <?php if(count($related_video)>0): ?>
      <?php 
      if (count($related_video) > 0):
        $offset = "0m0s";
        if($related_video[0]->AssetVideo->getStartFrom() != ""){
          $p = explode(":",$related_video[0]->AssetVideo->getStartFrom());
          $offset = $p[0]."m".$p[1]."s";
        }
      ?>
      <iframe width="460" height="259" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0<?php echo "#t=".$offset; ?>" frameborder="0" allowfullscreen></iframe>
        
        <ul class="imprimir"> 
        <!-- figura -->
         
            
      <?php $counter = 0 ?>
      <?php $counter_div = 1 ?>
      <?php if(count($related_preview)>0): ?>
      <?php foreach($related_preview as $k=>$d): ?>  
        <li class="span4">
          
          <a href="javascript:printDiv('div<?php $counter_div ?>')" class="btn-tooltip print" datasrc="<?php echo $related_download[$counter]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"> <img src="<?php echo $related_preview[$counter]->retriveImageUrlByImageUsage("original") ?>" 
            alt="nome brincadeira" /><span></span></a>
          <div id="div<?php $counter_div ?>" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_download[$counter]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <?php $counter ++ ?>
        <?php $counter_div ++ ?>
        <?php endforeach; ?>

        <?php endif; ?>
        <?php endif; ?>
       <?php endif; ?>   
        
      <?php if(count($related_video)==0): ?>
      <!-- figura -->
              
      <?php if(count($related_preview)>0): ?>
       
       <a href="javascript:printDiv('div0')" class="print grd" 
       datasrc="<?php echo $related_download[0]->retriveImageUrlByImageUsage("original") ?>"
       data-original-title="imprimir">
       <img src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("original") ?>" 
       alt="Imprimir" /><span></span></a>
      <ul class="imprimir"> 
      <?php $counter = 1 ?>
      <?php $counter_div = 1 ?>
      <?php if(count($related_preview)>0): ?>
      <?php foreach($related_preview as $k=>$d): ?>  
        <li class="span4">
          
          <a href="javascript:printDiv('div<?php $counter_div ?>')" class="btn-tooltip print" datasrc="<?php echo $related_download[$counter]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"> <img src="<?php echo $related_preview[$counter]->retriveImageUrlByImageUsage("original") ?>" 
            alt="nome brincadeira" /><span></span></a>
          <div id="div<?php $counter_div ?>" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_download[$counter]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <?php $counter ++ ?>
        <?php $counter_div ++ ?>
        <?php endforeach; ?>

        <?php endif; ?>
         </ul>
        <?php endif; ?>
        <?php endif; ?>

      <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id=print_frame width=0 height=0 frameborder=0 src=about:blank></iframe>
      <!--/IFRAME PARA IMPRESSAO EM IE -->
       
    </div>
  </div>
  <!--/row--> 
  
    <?php
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "imprima-e-brinque"')
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
    <div class="tit imprima"><span class="mais"></span><a href="<?php echo $site->retriveUrl() ?>/imprima-e-brinque">Imprima e brinque</a><span></span></div>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
        <?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
      <li class="span2">
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-7-b') ?>" alt="<?php echo $d->getTitle() ?>" />
          <?php $tam=17; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <!-- /row-->
 
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->

<!--tooltip estilizado-->
<!--
<script type="text/javascript" src="/portal/js/jquery-tooltip/jquery.tooltip.js"></script>
<script type="text/javascript">
$('.conteudo').tooltip({ 
    extraClass:"tp-imprimir"
}); 
-->
</script>