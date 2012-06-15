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
          <ul>
    		      <?php foreach($relateds as $k=>$d): ?>
    		      	<?php if ($d->related_asset_type == 'Download'): ?>
    		      		<?php if ($d->getAssetType() == 'Imagem'): ?>
          	<li><a href="<?php echo $d->AssetImage->getOriginalUrl(); ?>" title="<?php echo $d->getTitle(); ?>" target="_blank"><?php echo $d->getTitle(); ?></a></li>
          				<?php endif; ?>
          			<?php else: ?>
						<li><a href="<?php echo url_for('@homepage') . 'm/' . $d->getSlug() ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></li>          	
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