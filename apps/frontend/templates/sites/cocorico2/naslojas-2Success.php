<?php
$assets = $pager->getResults(); 
?>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
          GA_googleFillSlot("portal-cocorico");

        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
      <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div> 
  <!-- /row-->
  <!-- row-->
   <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia') ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Nas Lojas</li>
  </ul>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">NAS LOJAS</h2>
  <!--row--> 
  <?php if(isset($displays['descricao'])):?>
    <?php if(count($displays['descricao']) > 0): ?> 
    
  <?php foreach($displays['descricao'] as $k=>$d):?>   
   <div class="row-fluid conteudo ">
    <p><?php echo $d->getDescription() ?></p>
  <?php endforeach; ?>
   
   <?php endif; ?>
    <?php endif; ?>
  <!--/row-->
  <!--row-->
  <div class="row-fluid naslojas">
    <div class="span12">
      <ul class="lista-produtos">
      	<?php if(count($assets) > 0): ?>
        <?php foreach($assets as $k=>$d): ?>
         <?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
        <li class="span4">
        	<a class="span12" href="<?php echo $d->retriveUrl() ?>" title="">
        	<img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('Preview') ?>" alt="<?php echo $d->getTitle() ?>" />
          <?php echo $d->getTitle() ?>
         </a></li>
        <?php endforeach; ?>
      <?php endif; ?>
       </ul>   
    </div>
  </div>
  <!--row-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
   
  <!--row-->
  <!-- /row-->
</div>
<!-- /container-->
<div id="fb-root"></div>
<script>
  ( function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if(d.getElementById(id))
      return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=418273974898589";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

</script>