<link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css" type="text/css">
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/interna.css" type="text/css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>



<div class="bg-site">
</div>

<!--CASTELO-->
<div >
  
    <!-- CAPA SITE -->
    <div id="capa-site">      

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          
          <h2>
            <a href="http://cmais.com.br/castelo" style="text-decoration: none;">
          
                <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/img-logo-castelo.png" class="logo" alt="Castelo Ra Tim Bum" />
              
            </a>
          </h2>
          

					<?php include_partial_from_folder('sites/castelo','global/like', array('uri' => $uri)) ?>          
          
          
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('sites/castelo','global/menu', array('siteSections' => $siteSections, 'section' => $section)) ?>

         
        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->
      <div class="bg-video"></div>

      <!-- MIOLO -->
      <div id="miolo">
        
<script src="http://cmais.com.br/portal/js/orbit/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet">

<script type="text/javascript">
$(window).load(function() {
	$('#featured').orbit({
		'bullets' : true,   
		'bulletThumbs': true
	});
});
</script>
       <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
				<!-- /GALERIA DE FOTOS -->
			<div class="container galeriaNew" style="float: right; margin-bottom: 10px; width: 640px;">
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
				     	
        </div>
        <!-- /CONTEUDO PAGINA -->
        
        
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
</div>   
<!--/CASTELO-->