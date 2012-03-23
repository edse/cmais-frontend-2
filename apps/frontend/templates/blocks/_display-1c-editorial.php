            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <li class="<?php echo strtolower($displays[0]->retriveLabel()) ?><?php if(isset($last)): ?> last<?php endif; ?>">
                  <p class="chapeu"><?php if($displays[0]->retriveLabel()): ?><?php echo $displays[0]->retriveLabel() ?><?php else: ?>C+<?php endif; ?>&nbsp;</p>
                  <?php if($displays[0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                  <a href="<?php echo $displays[0]->retriveUrl() ?>" class="foto"><img src="<?php echo $displays[0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $displays[0]->getTitle() ?>" /></a>
                  <?php endif; ?>
                  <a href="<?php echo $displays[0]->retriveUrl() ?>"><?php echo $displays[0]->getTitle() ?></a>
                </li>
              <?php endif; ?>
            <?php endif; ?>
