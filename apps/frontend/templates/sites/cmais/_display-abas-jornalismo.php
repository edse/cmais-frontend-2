					<?php if(isset($displays)): ?>
						<?php foreach ($displays as $k => $d): ?>
							<div class="destaque-abas" id="<?php echo $id_aba ?>">
		 							<h2>"<?php echo $d->getTitle() ?>"</h2>
									 
					        <?php if($d->Asset->AssetType->id == 6): /*Verifica se o Asset é de Vídeo*/?>
					        	<iframe width="420" height="255" src="http://www.youtube.com/embed/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
					        	<p><?php echo $d->getDescription() ?></p>
					        <?php  elseif($d->Asset->AssetType->id == 1): /*Verifica se o Asset é de Conteúdo*/?>
					        	<a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle() ?>">
					        		<img src="<?php echo $d->retriveImageUrlByImageUsage('image-4-b') ?>" alt="<?php echo $d->getTitle() ?>">
					        		<p><?php echo $d->getDescription() ?></p>
					        	</a>	
					        <?php endif;?>
					         
					        
					        
					    </div>     
						<?php endforeach;?>
					<?php endif;?>