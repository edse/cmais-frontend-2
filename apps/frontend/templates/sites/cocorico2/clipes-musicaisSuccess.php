  <?php
  if(!isset($asset)){
    $assets = $pager->getResults();
    $asset = $assets[0];
  }
  ?>

<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(36)').css('margin-right', '0');
  });
</script>

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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section,'asset'=>$asset)) ?> 
  <!-- /breadcrumb-->
  
  <!--btn voltar
  <a href="#" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina">

    <h2><?php $tam=32; $str=$asset->getTitle(); if(strlen($str) <= $tam) echo $str; else echo substr($str, 0, $tam-1)."&hellip;" ?></h2>

     <span></span>
    <!-- RANKING -->
    <?php $section = $asset->getSections(); ?>
    <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('asset'=>$asset,'section'=>$section)) ?>
    <!--/RANKING -->
  </div> 
  
  <a id="btn_1" href="javascript: vote('<?php echo $asset->getId()?>');" class="curtir" title="Curtir">curtir</a>
  <img src="/images/spinner_bar.gif" style="display: none; float: right;" id="v_load" />
  <a id="btn_2" href="javascript:;" class="curtir disabled" title="Curtir">curtir</a>

  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo" id="videos">
    
    <iframe width="940" height="529" style="margin-bottom: 20px;" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
    <p class="span12"><?php echo $asset->getDescription()?></p>
    <p class="tit">Assista mais Clipes!</p>
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid relacionados ytb">
    
    <ul class="destaques-small top">
      <?php if(count($assets) > 0): ?>
        <?php foreach($assets as $k=>$d): ?>
          <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <img class="span12" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />
            <p><?php $tam=16; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p></a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
  <!-- /row-->
  
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
    url: "http://app.cmais.com.br/ajax/ranking",
    beforeSend: function(){
      $('#btn_1').hide();
      $('#btn_2').show();
      $('#v_load').show();
    },
    success: function(data){
      if(data == 1){
        //alert('Voto realizado com sucesso!');
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
