<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <link href="/feed" type="application/atom+xml" rel="alternate" title="cmais+ feed" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/geral2.css" type="text/css" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/css/ie-only.css" />
    <![endif]-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

    <?php include_title() ?>
    <?php include_metas() ?>
    <meta property="og:title" content="<?php echo $asset->getTitle(); ?> - <?php echo $site->getTitle(); ?> - cmais+ O portal de conteúdo da Cultura" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="<?php echo $asset->getDescription(); ?>" />
    <meta property="og:url" content="<?php echo $asset->retriveUrl(); ?>" />
    <meta property="og:site_name" content="<?php echo $site->getTitle(); ?>" />
    <meta property="og:image" content="http://cmais.com.br/portal/images/capaPrograma/castelo/ratimbum-icon.jpg"/>
    
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />
    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>
    <script>
    /*
    if(window.location == parent.window.location){
    	self.location.href+='&layout=1';
    }
    */
    </script>
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
    <!-- /scripts -->

  </head>
  <body>
<?php use_helper('I18N','Date') ?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<script src="http://cmais.com.br/portal/js/orbit/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet">
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />

<script type="text/javascript">
$(window).load(function() {
	$('#featured').orbit({
		'bullets' : true,   
		'bulletThumbs': true
	});
});
</script>

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
			
      <?php $relacionados = $asset->retriveRelatedAssetsbyRelationType('Asset Relacionado'); ?>
      <?php if(count($relacionados) > 0): ?>
      <!-- SAIBA MAIS -->
      <div class="box-padrao grid2" style="margin-bottom: 20px;">
        <div id="saibamais">                                                            
        <h4>Veja +</h4>                                                            
        <ul class="conteudo">
				<?php foreach($relacionados as $k=>$d): ?>        
          <li style="width: auto;">
            <a class="titulos" href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>" style="width: auto;"><?php echo $d->getTitle()?></a>
          </li>
        <?php endforeach; ?>
          
        </ul>
       </div>
      </div>
      <!-- SAIBA MAIS -->
      <?php endif; ?>
			
			
 	    <div id="fb-root"></div>
	    <script>
	      window.fbAsyncInit = function() {
	        FB.init({appId: '124792594261614', status: true, cookie: true, xfbml: true});
	      };
	      (function() {
	        var e = document.createElement('script'); e.async = true;
	        e.src = document.location.protocol +
	          '//connect.facebook.net/pt_BR/all.js';
	        document.getElementById('fb-root').appendChild(e);
	      }());
	    </script>

			<!-- barra compartilhar -->
			<?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
			<!-- /barra compartilhar -->

		</div>
		<!--CONTAINER ASSSET -->


  
</div>
</body>
</html>