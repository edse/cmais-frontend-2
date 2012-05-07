<?php use_helper('I18N', 'Date') ?>

<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<script src="/portal/js/orbit/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
<link type="text/css" href="/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet">
<link rel="stylesheet" href="/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />

<script type="text/javascript">
$(window).load(function() {
  $('#featured').orbit({
    'bullets' : true,   
    'bulletThumbs': true
  });
});

$(document).ready(function(){
  $('#rodape-portal').addClass('display')
});
</script>
<!--GOOGLE ANALYTICS-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22770265-1']);
  _gaq.push(['_setDomainName', 'cmais.com.br']);
  _gaq.push(['_setAllowHash', 'false']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
</script>
<!--GOOGLE ANALYTICS-->

<div class="base">
  

    
    <!--CONTAINER ASSSET -->
    <div class="container">
      
      <!-- GALERIA DE FOTOS -->
      <div class="container galeriaNew" style="float: left; margin-bottom: 10px; width: 640px;">
        <div id="featured">
        <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
        <?php if(count($related)>0): ?>
          <?php foreach($related as $d): ?>
          <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $d->getTitle() ?>" data-thumb="<?php echo $d->retriveImageUrlByImageUsage('image-1') ?>" data-caption="#html<?php echo $d->getSlug() ?>" />
          <?php endforeach; ?>
        <?php endif; ?>
        </div>
      
        <!-- THUMBNAILS -->
        <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
        <?php if(count($related)>0): ?>
          <?php foreach($related as $d): ?>
            <?php $related_content = $d->retriveRelatedAssetsByAssetTypeId(1); ?>
        <span class="orbit-caption" id="html<?php echo $d->getSlug() ?>">
          <span class="espaco">
            <?php echo $d->getDescription() ?><?php if($d->AssetImage->getHeadline()!="") echo "<br>".$d->AssetImage->getHeadline() ?><?php if($d->AssetImage->getAuthor()!="") echo "<br>Foto: ".$d->AssetImage->getAuthor() ?>
            <?php if(count($related_content)>0): ?>
            <br /><a href="<?php echo $related_content[0]->retriveUrl()?>" target="_blank">Saiba mais</a>
            <?php endif; ?>
          </span>
        </span>
          <?php endforeach; ?>
        <?php endif; ?>
        <!-- THUMBNAILS -->
      </div>
      <!-- /GALERIA DE FOTOS -->
              
      <!-- barra compartilhar -->
      <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
      <!-- /barra compartilhar -->

    </div>
    <!--CONTAINER ASSSET -->


  
</div>