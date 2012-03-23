                <!-- BOX PADRAO Carrossel -->
              <?php if(isset($displays)): ?>
                <?php if(count($displays) > 0): ?>
                <div class="box-padrao grid1 carrossel-menu">
                  <div class="nav-menu topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                      <a href="#" class="btn proximo"></a>
                      <a href="#" class="btn anterior"></a>
                    </div>
                  </div>
                  <ul class="nav-conteudo conteudo">
                    <?php foreach($displays as $k=>$d): ?>
                      <li class="filho<?php if($k==0):?> ativo<?php endif; ?>"<?php if($k==0):?> style="display:block;"<?php endif; ?>>
                      <a href="<?php echo $d->retriveUrl() ?>" class="img-310x186"><img src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" /></a>
                      <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                      <a href="<?php echo $d->retriveUrl() ?>" class="txt"><?php echo $d->getDescription() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            <?php endif; ?>
                <!-- /BOX PADRAO Carrossel -->
