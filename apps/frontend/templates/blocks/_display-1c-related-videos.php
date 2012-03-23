          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>                
              <div id="box-videos" class="box-padrao grid1">
                
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>v&iacute;deos em destaque</h4>
                  </div>
                </div>
                
                <div class="carrossel">
                  <ul class="sem-borda" style="width: auto">
                    <li>
                    <?php foreach($displays as $k=>$d): ?>
                      <?php if(($k > 0) && ($k % 3 == 0)): ?>
                        </li><li>
                      <?php endif; ?>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="ativo img-150x90"><img src="<?php echo $d->retriveImageUrlByImageUsage('image-2') ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" /></a>
                        <h3 class="chapeu"><?php echo $d->retriveLabel() ?></h3>
                        <a href="<?php echo $d->retriveUrl() ?>" class="txt"><?php echo $d->getTitle() ?></a>
                      </div>
                    <?php endforeach; ?>
                    </li>
                  </ul>
                </div>

                <!-- PAGINACAO -->
                <div class="paginacao pag3 nav-menu">
                  <!--<p class="txt-12">P&aacute;gina 1 de 255</p>
                  <a href="#" class="btn proximo"></a>
                  <a href="#" class="btn anterior"></a>
                  -->
                </div>
                <!-- PAGINACAO -->
                
              </div>
            <?php endif; ?>
          <?php endif; ?>
