						<?php if(isset($displays)): ?>
							<?php if(count($displays) > 0): ?>
	          <div id="menu-rodape" class="grid3">
	          	
	          	<ul class="abas">
	          	  <li class="neutro"><a href="videos"><?php echo $displays[0]->Block->getTitle() ?></a><span></span></li>
	          	</ul>
	          	
	          	<div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
	          		
	          	  <div id="todas" class="filho blocos" style="display:block;">
	          	  	<div class="capa">
	          	  	  <ul>
	                    <?php foreach($displays as $d): ?>
	          	  	  	<li class="conteudo-lista">
	          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="bg" title="<?php echo $d->getTitle() ?>"><img class="" src="<?php echo $d->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
	          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="titulos" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a>
	          	  	  	</li>
	          	  	  	<?php endforeach; ?>
	          	      </ul>
	          	    </div>
	          	  </div>
					</div>
			  </div>
					<?php endif; ?>			  
				<?php endif; ?>			  