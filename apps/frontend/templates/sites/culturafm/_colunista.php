						<?php if(isset($displays['colunista'])): ?>
							<?php if(count($displays['colunista']) > 0): ?>
          	<div class="box-padrao noticia grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4><?php echo $displays['colunista'][0]->Block->getTitle() ?></h4>
                </div>
              </div>
              <a title="<?php echo $displays['colunista'][0]->getTitle() ?>" href="<?php echo $displays['colunista'][0]->retriveUrl() ?>">
              	<img name="<?php echo $displays['colunista'][0]->getTitle() ?>" alt="<?php echo $displays['colunista'][0]->getTitle() ?>" src="<?php echo $displays['colunista'][0]->retriveImageUrlByImageUsage("image-3-b") ?>">
              </a>
              <a href="<?php echo $displays['colunista'][0]->retriveUrl() ?>" class="titulos" title="<?php echo $displays['colunista'][0]->getTitle() ?>"><?php echo $displays['colunista'][0]->getTitle() ?></a>
              <p><?php echo $displays['colunista'][0]->getDescription() ?></p>
            </div>
            <style type="text/css">
            	.programacao { height:107px; }
            </style>
            	<?php endif; ?>
            <?php endif; ?>
