        <?php if(isset($displays)): ?>
          <?php if(count($displays) > 0): ?>
          <!-- DESTAQUE 5C -->     
            <div class="novoDestaque">
              <!-- remover quando acabar promocao madmen-->
              <div id="topo-destaque">
                <a class="banner-topo" href="http://tvcultura.cmais.com.br/madmen" title="Mad Men"><img src="/portal/images/capaPrograma/home-madmen/img-topo.jpg" alt="Mad Men" /></a>
                <div class="logo">
                  <a class="logo" href="http://tvcultura.cmais.com.br/madmen" title="Mad Men"><img src="/portal/images/capaPrograma/home-madmen/logomadmen.png" alt="Mad Men" /></a>
                  <p>estreia 24 de abril | Quarta, às 22h</p>
                </div>
              </div>
              <!-- /remover quando acabar promocao madmen-->
              <div class="enunciado">
                <h2><a href="http://tvcultura.cmais.com.br/grade">Confira na tela da Cultura</a></h2>
                <span></span>
              </div>
              <div class="destaque-5">
              	<ul id="v2" class="grid3">
              		<?php foreach($displays as $k=>$d): ?>
              		<?php
              			if($d->Asset->Site->getFacebookUrl() != "")
              				$u = $d->Asset->Site->getFacebookUrl();
              			else
											$u = $d->retriveUrl();
              		?>
              		<li>
									<div class="curtir">
					        	<fb:like href="<?php echo $u?>" layout="button_count" show_faces="false" width="170"></fb:like>
					        </div>
              			<div class="logo">
              				<a href="<?php echo $d->retriveUrl() ?>">
              					<img title="<?php echo $d->Asset->Site->Program->getTitle() ?>" alt="<?php echo $d->Asset->Site->Program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $d->Asset->Site->getImageIcon() ?>" />
              				</a>              				
              			</div>
              			<a class="foto" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
              				<img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-9') ?>"  />
              			</a>
              			<div class="descricao">
              				<a class="tit" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
              					<?php echo $d->getTitle() ?>
              				</a>
              				<a  href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><?php echo $d->getLabel() ?></a>
              			</div>
              			
              		</li>
              		<?php endforeach; ?>
              	 </ul>
              </div>
            </div>                          	              	              	                   
          <!-- /DESTAQUE 5C -->
          <?php endif; ?>
        <?php endif; ?>
        