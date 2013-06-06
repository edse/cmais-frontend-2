            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
            <div class="box-padrao noticia grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4><?php echo $displays[0]->getLabel() ?></h4>
                </div>
              </div>
              <a title="<?php echo $displays[0]->getTitle() ?>" href="<?php echo str_replace("/home/","/",$displays[0]->retriveUrl()) ?>">
                <img name="<?php echo $displays[0]->getTitle() ?>" alt="<?php echo $displays[0]->getTitle() ?>" src="<?php echo $displays[0]->retriveImageUrlByImageUsage("image-3-b") ?>">
              </a>
              <a href="<?php echo str_replace("/home/","/",$displays[0]->retriveUrl()) ?>" class="titulos" title="<?php echo $displays[0]->getTitle() ?>"><?php echo $displays[0]->getTitle() ?></a>
              <p><?php echo $displays[0]->getDescription() ?></p>
            </div>
              <?php endif; ?>
            <?php endif; ?>
