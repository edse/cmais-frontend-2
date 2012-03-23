    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <div id="box-taSabendo">
          <div class="topo">
            <h3><a href="/ta-sabendo">Ta sabendo?</a></h3>
          </div>
          <div class="ico-ponta"></div>
          <div class="carrossel">
            <ul>
            <?php foreach($displays as $d): ?>
              <li>
                <a href="<?php echo $d->retriveUrl() ?>">
                  <img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>"/>
                  <span class="tit"><?php echo $d->getTitle() ?></span>
                  <span class="txt"><?php echo $d->getDescription() ?></span>
                </a>            
              </li>
            <?php endforeach; ?>
            </ul>
          </div>
          <span class="picote"></span>
          <hr />
        </div>
      <?php endif; ?>
    <?php endif; ?>
