            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <div class="box-padrao grid4 col1">
                  <ul class="left">
                    <?php foreach($displays as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>" class="titulos"><?php echo $d->getTitle() ?></a>
                      <p><?php echo $d->getDescription() ?></p>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            <?php endif; ?>
