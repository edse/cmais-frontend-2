<!-- BOX PADRAO Noticia -->
	<?php if(count($displays)>0): ?>
		<div class="box-padrao grid1">
		<!--div class="curtir">
        	<fb:like href="<?php echo $u?>" layout="button_count" show_faces="false" width="170"></fb:like>
        </div-->
		<p class="chapeu"><?php if ($displays[0]->Block->getTitle()) echo $displays[0]->Block->getTitle() ?></p>
		
		<?php if($displays[0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
		<a href="<?php echo $displays[0]->retriveUrl() ?>" title="<?php echo $displays[0]->getTitle() ?>">
		<img src="<?php echo $displays[0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $displays[0]->getTitle() ?>" name="<?php echo $displays[0]->getTitle() ?>" class="<?php if($displays[0]->getImage() == ""):?>img-video<?php endif;?>" />
		</a>
		<?php endif; ?>
		
		<a class="titulos" href="<?php echo $displays[0]->retriveUrl() ?>"><?php echo $displays[0]->getTitle() ?></a>
		<p><?php echo $displays[0]->getDescription() ?></p>
		
		</div>
	<?php endif; ?>
<!-- BOX PADRAO Noticia -->
