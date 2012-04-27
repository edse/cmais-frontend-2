		<?php if(isset($asset)): ?>
			<?php if($asset->AssetType->getSlug() == "video"): ?>
				<div class="embed-video">
					<iframe width="640" height="390" wmode="opaque" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=opaque" frameborder="0" allowfullscreen></iframe>
					<a href="#" class="titulos"><?php echo $asset->getTitle() ?></a>
					<p><?php echo $asset->getDescription() ?></p>
				</div>
		  <?php endif; ?>
		<?php endif; ?>	
