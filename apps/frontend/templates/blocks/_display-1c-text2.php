            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <div class="box-padrao noticia2 grid1">
                  <?php foreach($displays as $k => $d): ?>
                    <?php if($k == 0): ?>
                    <h3><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h3>
                    <?php else: ?>
                    <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><?php echo $d->getTitle() ?></a>
                    <?php endif; ?>
                    <p><?php echo $d->getDescription() ?></p>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            <?php endif; ?>
