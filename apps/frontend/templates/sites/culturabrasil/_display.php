        <?php if(isset($displays)): ?>
          <?php if(count($displays) > 0): ?>
        <!--destaque-->
        <div class="destaque-cultura">
          <div class="programa">
            <span><?php echo $displays[0]->getLabel(); ?></span><i class="borda-titulo"></i>
          </div>
          <a href="<?php echo $displays[0]->retriveUrl(); ?>" title="<?php echo $displays[0]->getTitle(); ?>">
            <h2><?php echo $displays[0]->getTitle(); ?></h2>
            <?php if($displays[0]->retriveImageUrlByImageUsage("culturabrasil-thumb2")): ?>
            <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage("culturabrasil-thumb2") ?>" alt="<?php echo $displays[0]->getTitle(); ?>" class="big">
            <?php endif; ?>
            <p><?php echo $displays[0]->getDescription(); ?></p>
          </a>
        </div>  
        <!--/destaque-->
          <?php endif; ?>
        <?php endif; ?>