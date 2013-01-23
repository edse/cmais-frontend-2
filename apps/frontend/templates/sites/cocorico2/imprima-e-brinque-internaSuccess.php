<script type="text/javascript" src="/portal/js/bootstrap/tooltip.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
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
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/atividades">Atividades</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="#" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php echo $asset->getTitle() ?></h2>
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
    <p class="span12"><?php echo $asset->getDescription() ?></p>
    <div class="span6 esq">
    <p class="alerta"><span></span>tenha Cuidado! peça ajuda a um adulto!</p>
    
    <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>


  </div>
    <div class="span6">
      <?php $related_video = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
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
      <?php endif; ?>
       <?php endif; ?>     
      
         <?php $related_image = $asset->retriveImageUrlByImageUsage("preview") ?>     
      <?php if(count($related_image)>0): ?>
      
       <ul class="imprimir">
        <!-- figura -->
        <li class="span4">
          <a href="javascript:printDiv('div1')" class="btn-tooltip print" datasrc="<?php echo $related_image[0]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="<?php echo $related_image[0]->retriveImageUrlByImageUsage("original") ?>" alt="nome brincadeira" /><span></span></a>
          <div id="div1" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_image[0]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div2')" class="btn-tooltip print" datasrc="<?php echo $related_image[1]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="<?php echo $related_image[1]->retriveImageUrlByImageUsage("original") ?>" alt="nome brincadeira" /><span></span></a>
          <div id="div2" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_image[1]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        
        <!-- figura -->
        <li class="span4">
          <a style="margin-bottom:10px;" href="javascript:printDiv('div3')" class="btn-tooltip print" datasrc="<?php echo $related_image[2]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="<?php echo $related_image[2]->retriveImageUrlByImageUsage("original") ?>" alt="nome brincadeira" /><span></span></a>
          <div id="div3" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_image[2]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div4')" class="btn-tooltip print" datasrc="<?php echo $related_image[3]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="<?php echo $related_image[3]->retriveImageUrlByImageUsage("original") ?>" alt="nome brincadeira" /><span></span></a>
          <div id="div4" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_image[3]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div5')" class="btn-tooltip print" datasrc="<?php echo $related_image[4]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="<?php echo $related_image[4]->retriveImageUrlByImageUsage("original") ?>" alt="nome brincadeira" /><span></span></a>
          <div id="div5" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_image[4]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div6')" class="btn-tooltip print" datasrc="<?php echo $related_image[5]->retriveImageUrlByImageUsage("original") ?>" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="<?php echo $related_image[5]->retriveImageUrlByImageUsage("original") ?>" alt="nome brincadeira" /><span></span></a>
          <div id="div6" style="display: none;page-break-after:always;">
            <img src="<?php echo $related_image[5]->retriveImageUrlByImageUsage("original") ?>" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
      </ul>
      
      <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id=print_frame width=0 height=0 frameborder=0 src=about:blank></iframe>
      <!--/IFRAME PARA IMPRESSAO EM IE -->
      <?php endif; ?>   
    </div>
  </div>
  <!--/row--> 
  
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="/cocorico/joguinhos">Imprima e brinque</a><span></span></div>
    <ul class="destaques-small">
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
    </ul>
  </div>
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