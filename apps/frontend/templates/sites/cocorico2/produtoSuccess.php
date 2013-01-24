<link href="/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
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
  <!-- menu-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('site'=>$site)) ?>
  <!-- /menu-->
  
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/naslojas">Nas Lojas</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $section->getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->
  
   <!--btn voltar-->
  <a href="#" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <a class="tit-pagina interna" href=""><?php echo $asset->getTitle() ?></a>
  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span6 zoom">
    	
    	   <?php $related_preview = $asset->retriveRelatedAssetsByRelationType('Preview') ?> 
         <?php $related_download = $asset->retriveRelatedAssetsByRelationType('Download') ?>    
         
         <?php if(isset($images)): ?> 
           <?php if(count($images)>0): ?>
      <!--deixar o espaço em branco no title--> 
      <div id="produto-grid" title=" ">
        <a href="#myModal" data-toggle="modal"><img class="destacada" src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("preview") ?>" alt="produto"></a>
      </div>
      <!-- Button to trigger modal -->
          
      <ul class="span12">
      	
      <li class="span4"><a href="#myModal" data-toggle="modal" title=""><img src="<?php echo $related_preview[1]->retriveImageUrlByImageUsage("preview") ?>" /></a></li>
     	<li class="span4"><a href="#myModal" data-toggle="modal" title=""><img src="<?php echo $related_preview[2]->retriveImageUrlByImageUsage("preview") ?>" /></a></li>
     	<li class="span4"><a href="#myModal" data-toggle="modal" title=""><img src="<?php echo $related_preview[3]->retriveImageUrlByImageUsage("preview") ?>" /></a></li>
     	<li class="span4"><a href="#myModal" data-toggle="modal" title=""><img src="<?php echo $related_preview[4]->retriveImageUrlByImageUsage("preview") ?>" /></a></li>
     	<li class="span4"><a href="#myModal" data-toggle="modal" title=""><img src="<?php echo $related_preview[5]->retriveImageUrlByImageUsage("preview") ?>" /></a></li>
     	<li class="span4"><a href="#myModal" data-toggle="modal" title=""><img src="<?php echo $related_preview[6]->retriveImageUrlByImageUsage("preview") ?>" /></a></li>
     	
      </ul>
    </div>
     <!-- Modal -->
      <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Fechar</button>
          <h3 id="myModalLabel"><?php echo $asset->getTitle() ?></h3>
          <p><?php echo $asset->AssetContent->getHeadline() ?></p>
        </div>
        <div class="modal-body">
          <img src="/portal/images/capaPrograma/cocorico/thumb-brincadeira2.jpg" alt="teste" />
        </div>
        <div class="modal-footer">
          <ul>
          	<li class="span2"><a href="" title=""><img src="<?php echo $related_download[0]->retriveImageUrlByImageUsage("original") ?>" /></a></li>
            <li class="span2"><a href="" title=""><img src="<?php echo $related_download[1]->retriveImageUrlByImageUsage("original") ?>" /></a></li>
            <li class="span2"><a href="" title=""><img src="<?php echo $related_download[2]->retriveImageUrlByImageUsage("original") ?>" /></a></li>
            <li class="span2"><a href="" title=""><img src="<?php echo $related_download[3]->retriveImageUrlByImageUsage("original") ?>" /></a></li>
            <li class="span2"><a href="" title=""><img src="<?php echo $related_download[4]->retriveImageUrlByImageUsage("original") ?>" /></a></li>
            <li class="span2"><a href="" title=""><img src="<?php echo $related_download[5]->retriveImageUrlByImageUsage("original") ?>" /></a></li>
            <li class="span2"><a href="" title=""><img src="<?php echo $related_download[6]->retriveImageUrlByImageUsage("original") ?>" /></a></li>
          </ul>
        </div>
      </div>
       
    <div class="span6">
    <div class="redes">
      <!--face-->
      <div id="rede-face" class="fb-like" data-href="http://www3.tvcultura.com.br/cocorico/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
      <!-- twitter -->
      <div id="rede-twitter">
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
      </div>  
      <!-- pinterst -->
      <div id="rede-pinterest">
        <a href="http://pinterest.com/pin/create/button/?url=<?php echo $images[0]->retriveImageUrlByImageUsage("original") ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
      </div>
      <!-- google+ -->
      <div id="rede-google">
        <div class="g-plusone" data-size="medium"></div>
      </div>
    </div>
     <?php endif; ?> 
      <?php endif; ?>
    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
    <a class="site" href="<?php echo $asset->AssetContent->getHeadlineShort() ?>" title="Site do fabricante">Site do fabricante</a>
    </div>
    
  </div>
  <!--/row-->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
  
  <!-- /row-->
</div>
<!-- /container-->

<!-- face -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=418273974898589";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- tweet -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- google+-->
<script type="text/javascript">
  window.___gcfg = {lang: 'pt-BR'};
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!--tooltip estilizado-->
<script type="text/javascript" src="/portal/js/jquery-tooltip/jquery.tooltip.js"></script>
<script type="text/javascript">
$('#produto-grid').tooltip({ 
    track: true, 
    fixPNG: true,
    left:-60,
    extraClass:"tool1"
}); 
</script>
<!--/tooltip estilizado-->
<!-- pinterest -->
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<!--/pinterest -->