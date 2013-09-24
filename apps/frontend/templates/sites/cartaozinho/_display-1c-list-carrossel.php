            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
              <!-- BOX PADRAO NOTICIAS -->
              <div id="box-videos" class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/tit-videos.png" />
                  </div>
                </div>
                <div class="carrossel" id="carrossel1">
                  <ul class="sem-borda" style="width: auto">
                    <li>
                    <?php foreach($displays as $k=>$d): ?>
                      <?php if(($k > 0) && ($k % 3 == 0)): ?>
                        </li><li>
                      <?php endif; ?>
                      <div class="conteudo-lista">
                        <?php if($d->retriveImageUrlByImageUsage('image-7')): ?>
                        <a href="<?php echo $d->retriveUrl() ?>" class="img-150x90">
                          <img src="<?php echo $d->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" />
                        </a>
                        <?php endif; ?>
                        <h3 class="chapeu"><?php echo $d->retriveLabel() ?></h3>
                        <a href="<?php echo $d->retriveUrl() ?>" class="txt"><?php echo $d->getTitle() ?></a>
                      </div>
                    <?php endforeach; ?>
                    </li>
                  </ul>
                </div>
                <!-- PAGINACAO -->
                <div class="paginacao pag3 nav-menu"></div>
                <!-- PAGINACAO -->
              </div>
              <!-- /BOX PADRAO NOTICIAS -->
              <?php endif; ?>
            <?php endif; ?>
