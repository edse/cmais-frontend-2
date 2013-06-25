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
          GA_googleFillSlot("portal-cocorico-familia");

        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
      <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
     <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'naslojas', 'site'=>$site)) ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">nas lojas</h2> 
  <!--row-->
  
  <?php if(isset($displays['descricao'])):?>
    <?php if(count($displays['descricao']) > 0): ?>     
  	  <?php foreach($displays['descricao'] as $k=>$d):?>   
      <div class="row-fluid conteudo ">
        <p><?php echo $d->getDescription() ?></p>
      </div>
      <?php endforeach; ?>   
    <?php endif; ?>
  <?php endif; ?>
    
  <!--/row-->
  <!--row-->
  <div class="row-fluid naslojas"> 
    <div class="span12">
    	<?php if(count($assets) > 0): ?>
 	      <ul class="lista-produtos">
    	 	  <?php foreach($assets as $k=>$d): ?>
    	 	  	<?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
		        <li class="span4">
		          <a class="span12" href="<?php echo $d->retriveUrl() ?>" title="">
		            <img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" />
		            <?php //echo $d->getTitle() ?>
		            <?php $tam=32; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
		          </a>
		        </li>
          <?php endforeach; ?>
        </ul>                   
      <?php endif; ?>
    </div>
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
    
  </div>
  <!--row-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape-em-familia', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
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