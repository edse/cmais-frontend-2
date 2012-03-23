    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <?php $d = $displays[0]; ?>
        <div id="voceSabia">
		  <a class="voceSabiaLink" target="_blank" href="http://twitter.com/tvratimbum">http://twitter/@tvratimbum</a>
          <h3>Voc&ecirc; Sabia<span></span></h3>
          <p><?php echo $d->getTitle() ?></p>
          <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" />
          <?php endif; ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
