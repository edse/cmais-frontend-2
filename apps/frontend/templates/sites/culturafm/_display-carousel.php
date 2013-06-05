            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <!-- BOX PADRAO NOTICIAS -->
                <div class="box-padrao grid1">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                      <a href="#" class="rss" title="rss"></a>
                    </div>
                  </div>
                  <?php if($displays[0]->retriveImageUrlByImageUsage("image-8-b") != ""): ?>
                  <a href="<?php echo $displays[0]->retriveUrl() ?>" class="img-310x186"><img src="<?php echo $displays[0]->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $displays[0]->getTitle() ?>" title="<?php echo $displays[0]->getTitle() ?>" /></a>
                  <?php endif; ?>
                  <ul class="conteudo">
                  <?php foreach($displays as $d): ?>
                    <li>
                      <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><?php echo $d->getTitle() ?></a>
                      <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                        <a href="<?php echo $d->retriveUrl() ?>" class="img-90x54">
                          <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" style="width: auto" />
                        </a>
                      <?php endif; ?>
                      <p><?php echo $d->getDescription() ?></p>
                    </li>
                  <?php endforeach; ?>
                  </ul>
                </div>
                <!-- /BOX PADRAO NOTICIAS -->
              <?php endif; ?>
            <?php endif; ?>