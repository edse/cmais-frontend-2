              <?php if(isset($displays)): ?>
                <?php if(count($displays) > 0): ?>
                <ul class="conteudo">
                  <?php $displays = arsort($displays);?>
                  <?php foreach($displays as $k=>$d): ?>
                     <?php if($k<6):?>
                  <li><a class="titulos" href="/<?php echo $site->getSlug() ?>/<?php echo $d->getSlug() ?>"><?php echo $d->getTitle() ?></a>
                    <?php if($d->retriveImageUrlByImageUsage("image-3") != ""): ?>
                      <a href="/<?php echo $site->getSlug() ?>/<?php echo $d->getSlug() ?>" class="img-90x54" style="width: auto">
                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" style="width: auto" />
                      </a>
                    <?php endif; ?>
                     
                      <p><?php echo $d->getDescription() ?></p>
                  </li>
                  <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            <?php endif; ?>
