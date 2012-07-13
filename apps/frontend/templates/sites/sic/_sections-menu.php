        <?php if(count($siteSections) > 0): ?>
        <!-- MENU -->
        <div class="menu-sic">
          <ul>
          	<?php foreach($siteSections as $s): ?>
            <li>
              <a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>">
                <?php echo $s->getTitle()?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>  
        </div>  
        <!-- /MENU -->
        <?php endif; ?>
