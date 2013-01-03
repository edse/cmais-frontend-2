<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">


<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });
</script>


<!-- container-->
<div class="container tudo">
 <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <?php include_partial_from_folder('sites/cocorico2', 'global/menu') ?>
      </div>
      <div class="lista-personagens">
        <h3>turma</h3>
        <?php include_partial_from_folder('sites/cocorico2', 'global/personagens', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri, 'site'=>$site)) ?>
      </div>
    </div>
  </div>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico/joguinhos">Joguinhos</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Nome do Joguinho</li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="#" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  <?php
  // section assets
  if(!$section){
    if(count($assets)<=0){
      $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->whereIn('sa.section_id', 2114)
        ->andWhere('sa.asset_id = a.id')
        ->orderBy('a.id desc')
        ->execute();
    }
  }else{
    if(isset($pager))
      $assets = $pager->getResults();
    else{
      $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->Where('sa.section_id = ?', $section->id)
        ->andWhere('sa.asset_id = a.id')
        ->orderBy('a.id desc')
        ->execute();
    }
  }
  if(!isset($asset))
    $asset = $assets[0];
  
  ?>   
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php echo $asset->getTitle(); ?></h2>
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
  <?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
  <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
  <?php if(count($preview) > 0 && count($download) > 0): ?>
    <?php echo "P title:".$preview[0]->getTitle(); ?>
    <?php echo "P:".$preview[0]->retriveImageUrlByImageUsage('image-6-b'); ?>
    <?php echo "D:".$download[0]->AssetImage->getOriginalFile() ?>
  <?php endif; ?>
  <!--row-->
  <div class="row-fluid conteudo">
    <p class="span12">Descrição</p>
    <a  href="javascript:printDiv('div1')" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->file.".jpg";?>" title="Imprimir">
      <img class="border-radius10" width="100%" src="http://midia.cmais.com.br/assets/image/image-6-b/305540493098327627d91b979a23d9c5c0c9a7ea.jpg" alt="" />
    </a>
    <a href="javascript:printDiv('div1')" class="print btn-imprimir border-radius10" datasrc="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->file.".jpg";?>" alt="imprimir">imprimir</a>
    <div id="div1" style="display: none;page-break-after:always;">
      <img src="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->file.".jpg";?>" style="width:95%">
    </div>
    <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id=print_frame width=0 height=0 frameborder=0 src=about:blank></iframe>
      <!--/IFRAME PARA IMPRESSAO EM IE -->
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="/cocorico/joguinhos">Imprima e brinque</a><span></span></div>
    <ul class="destaques-small">
      <?php if(isset($displays["destaques"])):?>
        <?php if(count($displays["destaques"])>0):?>
          <?php foreach($displays["destaques"] as $d):?>
            
            <li class="span2">
              <a href="#" title="">
                <img class="span12" src="http://midia.cmais.com.br/assets/image/original/<?php echo $d->Asset->AssetImage->file.".jpg"?>" alt="" />
                <?php echo $d->getTitle();?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>  
    </ul>
  </div>
  <!-- /row-->
 
  
  <!-- rodape-->
    <?php include_partial_from_folder('sites/cocorico2', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /rodape-->
</div>
<!-- /container-->