<?php
	$block = Doctrine::getTable('Block')->findOneById(450);
	if($block)
		$displays = $block->retriveDisplays();
?>
<?php if(isset($displays)): ?>
  <?php if(count($displays) > 0): ?>
  <!--DESTAQUE-->
  <div id="destaque">
	  <!--CONTAINER CAROUSEL-->
	  <div id="carousel-single-image" class="touchcarousel   minimal-light">       
		  <ul class="touchcarousel-container">
				<?php foreach($displays as $d): ?>
		    <!--ITEM-->
		    <li class="touchcarousel-item">
		      <!--PROGRAMA-->
		      <a href="<?php echo url_for('homepage') . 'programa/' . $d->Asset->Site->getSlug() ?>" data-transition="slidedown" rel="external">
		        <div class="touchcarousel-a" >
		          <!--LOGO-->
		          <?php if ($d->Asset->Site->getImageIcon()): ?>
		          <img title="<?php echo $d->Asset->Site->Program->getTitle() ?>" alt="<?php echo $d->Asset->Site->Program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $d->Asset->Site->getImageIcon() ?>" width="100%">
							<?php endif; ?>		          
		          <!--/LOGO-->
		          <?php if ($d->retriveImageUrlByImageUsage('image-9')): ?>
		          <!--FOTO-->
		          <img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-9') ?>" width="100%">
		          <!--/FOTO-->
		          <?php endif; ?>
		          <!--DESCRICAO / HORA-->
		          	<p><?php echo $d->getTitle() ?></p>
		          	<p><?php echo $d->getLabel() ?></p>
		          <!--/DESCRICAO / HORA-->
		        </div>
		      </a>
		      <!--/PROGRAMA-->
		    </li>
		    <!--/ITEM-->
		    <?php endforeach; ?>
		  </ul>      
		</div>
		<!--/CONTAINER CAROUSEL-->    
	</div>
	<!--DESTAQUE-->
  <?php endif; ?>
<?php endif; ?>
	