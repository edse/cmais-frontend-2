            <?php if(isset($displays['colunista'])): ?>
              <?php if(count($displays['colunista']) > 0): ?>
                <?php
                  $section = $displays['colunista'][0]->Asset->getSections();
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
                ?>
            <div class="box-padrao noticia grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4><?php echo $displays['colunista'][0]->Block->getTitle() ?></h4>
                </div>
              </div>
              <a title="<?php echo $displays['colunista'][0]->getTitle() ?>" href="<?php echo 'http://culturafm.cmais.com.br/colunistas/' . $section->getSlug() . '/' . $displays['colunista'][0]->Asset->getSlug(); ?>">
                <img name="<?php echo $displays['colunista'][0]->getTitle() ?>" alt="<?php echo $displays['colunista'][0]->getTitle() ?>" src="<?php echo $displays['colunista'][0]->retriveImageUrlByImageUsage("image-3-b") ?>">
              </a>
              <a href="<?php echo 'http://culturafm.cmais.com.br/colunistas/' . $section->getSlug() . '/' . $displays['colunista'][0]->Asset->getSlug(); ?>" class="titulos" title="<?php echo $displays['colunista'][0]->getTitle() ?>"><?php echo $displays['colunista'][0]->getTitle() ?></a>
              <p><?php echo $displays['colunista'][0]->getDescription() ?></p>
            </div>
              <?php endif; ?>
            <?php endif; ?>
