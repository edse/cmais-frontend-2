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
  <!-- menu-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'naslojas', 'site'=>$site)) ?>

  <!-- /menu-->
  
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section, 'asset'=>$asset)) ?> 
  <!-- /breadcrumb-->
  
   <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <h2 class="tit-pagina interna"><?php echo $asset->getTitle() ?></h2>
  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span6 zoom">
      
      <?php $related_preview = $asset->retriveRelatedAssetsByRelationType('Preview') ?> 
      <?php $related_download = $asset->retriveRelatedAssetsByRelationType('Download') ?>    
         
      <?php if(count($related_preview)>0): ?>
      <!--deixar o espaço em branco no title--> 
      <div id="produto-grid" title=" ">
       
        <a class="btn-produto" href="#myModal" data-toggle="modal"  name="<?php echo $related_download[0]->retriveImageUrlByImageUsage("original") ?>" >
          <img class="destacada" src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("original") ?>"/>
        </a>
      </div>
      <!-- Button to trigger modal -->
          
      <ul class="span12">
        <?php for($i=0; $i<count($related_preview);$i++):?>
          <?php if($i>0): ?>  
            <li class="span4">
              <a class="btn-produto" href="#myModal" data-toggle="modal" title="Ampliar imagem" name="<?php echo $related_download[$i]->retriveImageUrlByImageUsage("original") ?>">
                <img src="<?php echo $related_download[$i]->retriveImageUrlByImageUsage("original") ?>" />
              </a>
            </li>
          <?php endif; ?>
        <?php endfor; ?>
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
          <img src=" " alt="teste" />
        </div>
        <div class="modal-footer">
          <ul>
            <?php for($i=0; $i<count($related_preview);$i++):?>
              <li class="span2">
                <a href="javascript:;" class="btn-modal-prod" title="Ampliar imagem" name="<?php echo $related_download[$i]->retriveImageUrlByImageUsage("original") ?>" >
                  <img src="<?php echo $related_preview[$i]->retriveImageUrlByImageUsage("original") ?>" />
                </a>
              </li>
            <?php endfor;?>
            
          </ul>
        </div>
      </div>
       
    <div class="span6">
    <?php include_partial_from_folder('sites/cocorico', 'global/like', array('site'=>$site, 'uri'=>$uri)) ?>
     <?php endif; ?> 
    
    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
    <a class="site" href="<?php echo $asset->AssetContent->getHeadlineShort() ?>" title="Site do fabricante" target="_blank">Site do fabricante</a>
    </div>
    
  </div>
  <!--/row--> 
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape-em-familia', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
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
<!--modal produto-->
<script>
//chamando modal
$('.btn-produto').click(function(){
  var img_ampl = $(this).attr('name');
  $('.modal-body img').attr('src', img_ampl); 
});
$('.btn-modal-prod').not('.btn-modal-prod.ativado').click(function(){
  var img_ampl_modal = $(this).attr('name');
  $('.modal-body img').hide().attr('src', img_ampl_modal).show();
});

</script>
<!--/modal produto-->