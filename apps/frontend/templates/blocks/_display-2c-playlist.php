          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>
              <ul class="box-playlist grid2">
                <?php foreach($displays as $k=>$d): ?>
                  <li style="width: 155px">
                    <?php if($d->retriveImageUrlByImageUsage("image-3") != ""): ?>
                    <a href="<?php echo $d->retriveUrl() ?>" class="img">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" class="<?php if($d->Asset->AssetType->getSlug() == "video"):?>img-video teste<?php endif;?>"  />
                      
                    </a>
                    <?php endif; ?>
                    <?php if($d->retriveLabel() != ""): ?>
                    <h3 class="chapeu"><?php echo $d->retriveLabel() ?></h3>
                    <?php endif; ?>
                    <a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getDescription() ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <?php endif; ?>
