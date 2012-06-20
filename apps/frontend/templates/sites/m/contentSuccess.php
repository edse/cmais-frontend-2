<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<div id="cmais"  data-fullscreen="true">
    
  <!--CONTEUDO Content-->
  <div class="content" align="left" >
      
      <?php include_partial_from_folder('sites/m', 'global/topoAsset', array('asset'=>$asset)) ?>
      
      <!--ASSET-->
      <div class="asset">
      
        <div class="titulo">
          <h2><?php echo $asset->getTitle() ?></h2>
          <?php if ($asset->getDescription()): ?>
          <div class="olho">
            <p><?php echo $asset->getDescription() ?></p>
            <div class="espaco10"></div>
          </div>
          <?php endif; ?>
        </div>
        <div class="espaco10 bordaTopo"></div>
        <div class="data"><p>Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p></div>
        <div class="autor"><?php if ($asset->AssetContent->getAuthor()): ?><p>Por <?php echo $asset->AssetContent->getAuthor() ?></p><?php endif; ?>
        </div>
        
        <!--div class="fotob">
          <img src="http://midia.cmais.com.br/assets/image/image-6-b/bcfdf549db1a12278bf0b14e91c6151727b75572.jpg" width="100%"/>
        </div-->
        
        <div class="conteudo">
        	<?php if ($asset->AssetContent->getContent()): ?>
          <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
          
          <?php else: ?>
          	
	          <?php $relateds = $asset->retriveRelatedAssets(); ?>
	          
  	        <?php if (count($relateds) > 0): ?>
          <ul class="dow">
    		      <?php foreach($relateds as $k=>$d): ?>
    		      	<?php if ($d->related_asset_type != 'Download'): ?>
		    		      <?php if ($d->getAssetType() == 'Imagem'): ?>
	    		    <li class="dow-item">
	    		    	<a href="<?php echo $d->AssetImage->getOriginalUrl(); ?>" title="<?php echo $d->getTitle(); ?>">
	    		    		<img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b"); ?>" alt="<?php echo $d->getTitle() ?>" />
	    		    		<p><?php echo $d->getTitle(); ?></p>
	    		    		<p><?php echo $d->getDescription(); ?></p>
	    		    	</a>
	    		   	</li> 		  
		    		      <?php elseif ($d->getAssetType() == 'Vídeo'): ?>
	    		    <li class="dow-item">
	    		    	<a href="http://youtube.com/v/<?php echo $d->AssetVideo->getYoutubeId() ?>" title="<?php echo $d->getTitle(); ?>">
    		    			<img class="" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
	    		    		<p><?php echo $d->getTitle(); ?></p>
	    		    		<p><?php echo $d->getDescription(); ?></p>
	    		    	</a>
	    		   	</li> 		  
		          		<?php elseif ($d->getAssetType() == 'Áudio'): ?>
	    		    <li class="dow-item">
								<a href="http://midia.cmais.com.br/assets/audio/default/<?php echo $d->AssetAudio->getFile(); ?>.mp3" title="<?php echo $d->getTitle(); ?>">
			  		    	<p><?php echo $d->getTitle(); ?></p>
		    		    	<p><?php echo $d->getDescription(); ?></p>
		    		    </a>
	    		   	</li>  		  
	  	        		<?php elseif ($d->getAssetType() == 'File'): ?>
	    		    <li class="dow-item">
	    		    	<a href="http://midia.cmais.com.br/assets/file/original/<?php echo $d->AssetFile->getFile(); ?>" title="<?php echo $d->getTitle(); ?>">
		    		    	<p><?php echo $d->getTitle(); ?></p>
		    		    	<p><?php echo $d->getDescription(); ?></p>
	    		    	</a>
	    		   	</li>  		  
	          			<?php endif; ?>
          			<?php endif; ?>
        		  <?php endforeach; ?>
          </ul>
          	<?php endif; ?>
          	
	          <?php $relateds = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
	          
  	        <?php if (count($relateds) > 0): ?>
          <ul class="dow">
    		      <?php foreach($relateds as $k=>$d): ?>
	    		      <?php if ($d->getAssetType() == 'Imagem'): ?>
    		    <li class="dow-item">
    		    	<img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b"); ?>" alt="<?php echo $d->getTitle() ?>" />
    		    	<p><?php echo $d->getTitle(); ?></p>
    		    	<p><?php echo $d->getDescription(); ?></p>
    		    	<a href="<?php echo $d->AssetImage->getOriginalUrl(); ?>" title="<?php echo $d->getTitle(); ?>" class="mais" target="_blank">Baixar</a>
    		   	</li> 		  
	          		<?php elseif ($d->getAssetType() == 'Áudio'): ?>
    		    <li class="dow-item">
    		    	<p><?php echo $d->getTitle(); ?></p>
    		    	<p><?php echo $d->getDescription(); ?></p>
    		    	<a href="http://midia.cmais.com.br/assets/audio/default/<?php echo $d->AssetAudio->getFile(); ?>.mp3" title="<?php echo $d->getTitle(); ?>" class="mais" target="_blank">Baixar</a>
    		   	</li>  		  
  	        		<?php elseif ($d->getAssetType() == 'File'): ?>
    		    <li class="dow-item">
    		    	<p><?php echo $d->getTitle(); ?></p>
    		    	<p><?php echo $d->getDescription(); ?></p>
    		    	<a href="http://midia.cmais.com.br/assets/file/original/<?php echo $d->AssetFile->getFile(); ?>" title="<?php echo $d->getTitle(); ?>" class="mais" target="_blank">Baixar</a>
    		   	</li>  		  
          			<?php endif; ?>
        		  <?php endforeach; ?>
          </ul>
          	<?php endif; ?>
          	
          <?php endif; ?>
        </div>  
          
      </div>
      <!--/ASSET-->
      <?php include_partial_from_folder('sites/m', 'global/topoAsset', array('asset'=>$asset)) ?> 
      <div class="espaco30"></div>  
  </div>
  <!--/CONTEUDO Content-->
  
  
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site,'asset'=>$asset)) ?>
<!--/footer-->