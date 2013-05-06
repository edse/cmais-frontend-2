						<?php
	        		$section = $asset->getSections();
							if (count($section) > 1) {
								foreach ($section as $s) {
									if($parentSection = $s->getParent()){
										if($parentSection->getSlug() == "colunistas"){
											$section = $s;
										}
									}
								}
							}
							else {
								$section = $section[0];
							}
							if (isset($section))
								$assets = $section->getAssets();
              $assets = array_reverse($assets);
						?>
						<?php if(isset($assets)): ?>
							<?php if(count($assets) >= 1): ?>
						<div class="box-padrao grid1">
            	<div class="topo claro">
								<span></span>
								<div class="capa-titulo">
									<h4>+ Recentes</h4>
								</div>
							</div>

							<ul class="recentes">
								<?php foreach($assets as $d): ?>
                <li><a href="<?php echo 'http://culturafm.cmais.com.br/colunistas/' . $section->getSlug() . '/' . $d->getSlug() ?>" name="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
							<?php endif; ?>
						<?php endif; ?>
						
