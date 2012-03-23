            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <div class="col2 exception">
                  <div class="content">
                    <div id="galleria3">
                    <?php foreach($displays as $d): ?>
                      <a href="<?php echo $d->retriveImageUrlByImageUsage("image-4") ?>">
                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getDescription() ?>" longdesc="<?php echo $d->retriveUrl() ?>" />
                      </a>
                    <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endif; ?>
