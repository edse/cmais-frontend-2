      <!-- CHAMADA -->
      <?php if(isset($displays[0])): ?>
      <div id="chamada" class="grid3">
        <span><?php echo $displays[0]->getTitle() ?></span>
        <?php if($displays[0]->getUrl()): ?>
        <a href="<?php echo $displays[0]->getUrl() ?>" target="<?php echo $displays[0]->getTarget() ?>">
        <?php endif; ?>
        <?php echo $displays[0]->getDescription() ?>
        <?php if($displays[0]->getUrl()): ?>
        </a>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <!-- /CHAMADA -->
