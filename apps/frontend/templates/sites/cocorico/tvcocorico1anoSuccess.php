<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!--FANCYBOX-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<!--/FANCYBOX-->
<style>
.conteudo p {clear:none;}
.conteudo img{margin:5px;}
</style>
<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
    <!--topo coco-->
    <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
    <!--/topo coco-->
  
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina tit-extra">
    <h2><i class="ico-bike"></i><?php echo $section->getTitle() ?></h2>
  </div>
  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo">
    <?php if(isset($displays["destaque-principal"])): ?>
      <?php if(count($displays["destaque-principal"]) > 0): ?>
    <h2><?php echo $displays["destaque-principal"][0]->Asset->getDescription() ?></h2>     
      <img alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-5-b") ?>">
      <?php echo (html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent())) ?>
      <p class="grd">Parabéns!!!</p>
      <p class="grd"><span><?php echo $displays["destaque-principal"][0]->getTitle() ?><br/>
        <?php echo $displays["destaque-principal"][0]->getHeadline() ?></span>
      </p>
    </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php
    /*
    <?php if(isset($pager)): ?>
      <?php if($pager->haveToPaginate()): ?>
    <p class="tit" style="margin-top:30px;">conheça os desenhos participantes:</p>
      <?php endif; ?>
    <?php endif; ?>
     */
     ?>
  </div>
  <!--/row-->
  <?php
  /*
  <?php if(isset($pager)): ?>
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
  <?php endif; ?>
   */
   ?>
  
   <?php if(isset($pager)): ?>
  <?php if(count($pager) > 0): ?>
  <!--row-->
  <div class="row-fluid conteudo destaques">
    <ul id="convidados">
      <?php foreach($pager->getResults() as $d): ?>
        <?php if($d->AssetType->getSlug() == "image"): ?>
      <li class="span4">
        <a class="btn-produto" href="#myModal2" data-toggle="modal" title="<?php echo $d->getTitle(); ?>">
          <img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-4-b") ?>" class="span12">
          <p><?php echo $d->getTitle(); ?></p>
          <input type="hidden" id="cidade-link" value="<?php echo $d->AssetImage->getHeadline() ?>" />
          <input type="hidden" id="imagem-link" value="<?php echo $d->retriveImageUrlByImageUsage("image-5-b") ?>" />
        </a>
      </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <!-- Modal -->
    <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Fechar</button>
        <h3 id="myModalLabel"><span id="nome">Nome da criança</span><span id="cidade">cidade - uf</span></h3>
        <img src="" alt="" />
      </div>
    </div>
    <!-- /Modal -->
  </div>
  <!-- /row-->
  <?php endif; ?>
  <?php endif; ?>
  
  <?php if(isset($pager)): ?>
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
    <!--// PAGINACAO -->
    <?php endif; ?>
  <?php endif; ?>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->

<!--modal produto-->   
      <script>
//chamando modal
$('.btn-produto').click(function(){
  var imagem = $(this).children('input#imagem-link').val();
  var nome = $(this).attr('title');
  var cidade = $(this).children('input#cidade-link').val();
  $('.modal-header img').attr('src', imagem); 
  $('.modal-header h3 span#nome').text(nome); 
  $('.modal-header h3 span#cidade').text(cidade); 
});
/*
$('.btn-modal-prod').not('.btn-modal-prod.ativado').click(function(){
  var img_ampl_modal = $(this).attr('name');
  $('.modal-body img').hide().attr('src', img_ampl_modal).show();
});
*/

</script>
<!--/modal produto-->
