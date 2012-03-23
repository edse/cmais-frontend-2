            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
              <!-- DESTAQUE 1 COLUNA -->
              <div class="uma-coluna destaque grid1" id="destaque">
                <ul class="abas-conteudo conteudo">
                  <?php foreach($displays as $k=>$d): ?>
                  <li class="filho" id="bloco<?php echo $k+1 ?>" style="display: <?php if($k==0): ?>block<?php else: ?>none<?php endif;?>;">
                    <?php if($d->retriveImageUrlByImageUsage("image-8") != ""): ?>
                    <a title="<?php echo $d->getTitle() ?>" href="<?php echo $d->retriveUrl() ?>" class="media">
                      <img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-8-b") ?>" style="width: 310px;" />
                    </a>
                    <?php endif; ?>
                    <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                    <p><?php echo $d->getDescription() ?></p>
                    <?php if($d->getLabel()!=""): ?>
                    <p class="data"><?php echo $d->getLabel()?></p>
                    <?php endif; ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <ul class="abas-menu pag-bola destaque1">
                  <?php foreach($displays as $k=>$d): ?>
                  <li<?php if($k==0): ?> class="ativo"<?php endif; ?>><a title="<?php echo $d->getTitle() ?>" href="#bloco<?php echo $k+1 ?>"></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <!-- /DESTAQUE 1 COLUNA -->
              <?php endif; ?>
            <?php endif; ?>
