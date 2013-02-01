<?php if(isset($displays)):?>
<?php if(count($displays) > 0):?>
<!--DESTAQUE-->
<div id="destaque-ferias">
	<?php if($displays[0]->Asset->AssetType->getSlug() == "image"):
	?>
	<a href="<?php echo $displays[0]->retriveUrl() ?>" class="media grid2<?php if($displays[0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif;?>"> <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $displays[0]->getTitle() ?>" name="<?php echo $displays[0]->getTitle() ?>" /> </a>
	<?php elseif($displays[0]->Asset->AssetType->getSlug() == "video"):?>
	<div class="media grid2 video">
		<iframe src="http://www.youtube.com/embed/<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
		<div class="capa-video" onclick="play()"></div>
	</div>
	<!--/DESTAQUE-->
	<?php else:?>
	<h2><?php echo $displays[0]->getTitle()
	?></h2>
</div>
<?php endif;?>
</div>
<!--/DESTAQUE-->

<?php if(isset($displays2)):?>
<?php if(count($displays2) > 0):?>
<!--TEXTO-->
<div id="destaque-texto-ferias">
	<p><?php echo html_entity_decode($displays2[0]->Asset->AssetContent->render()) ?></p>
</div>
<?php endif;?>
<?php endif;?>

<?php /* if(isset($section)):?>
	<?php if($section->getSlug()=="ideias-mirabolantes"):?>
	        <a class="btn-ideias" href="/lista-ideias" title="lista completa de ideias">...ver todas as ideias :)</a>
	<?php endif; ?>
<?php endif; */ ?>	
<!--/TEXTO-->
<?php endif;?>
<?php endif;?>