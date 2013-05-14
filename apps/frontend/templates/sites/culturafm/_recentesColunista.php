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
								<?php for($k=count($assets); $k>=0; $k--): ?>
                <li><a href="<?php echo 'http://culturafm.cmais.com.br/colunistas/' . $section->getSlug() . '/' . $assets[$k]->getSlug() ?>" name="<?php echo $assets[$k]->getTitle() ?>" title="<?php echo $assets[$k]->getTitle() ?>"><?php echo $assets[$k]->getTitle() ?></a></li>
								<?php endfor; ?>
							</ul>
						</div>
							<?php endif; ?>
						<?php endif; ?>
						
