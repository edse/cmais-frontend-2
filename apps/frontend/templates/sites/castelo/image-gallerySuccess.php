<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-site">
</div>

<!--CASTELO-->
<div id="bg" >
  
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

      <!-- MIOLO -->
      <div id="miolo">
        
        

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            
           <!--tudo-->            
           <div class="tudo">
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
			
      </div>
        <!-- /CONTEUDO PAGINA -->
        
        
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
</div>   
<!--/CASTELO-->