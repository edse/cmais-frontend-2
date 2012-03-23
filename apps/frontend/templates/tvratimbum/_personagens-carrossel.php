      <?php if(isset($displays)): ?>
        <?php if(count($displays) > 0): ?>
          <div class="box-carrossel">
            <p>Conheça os personagens</p> 
            <div class="carrossel jcarousel-container jcarousel-container-horizontal" style="display: block;">
              <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;" disabled="false"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;" disabled="false"></div><div class="jcarousel-clip jcarousel-clip-horizontal">
                <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 1287px; left: 0px;">
                  <?php foreach($displays as $k=>$d): ?>
                  <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1">
                    <div class="boxPersonagens-tip">
                      <a href="<?php echo $d->Site->retriveUrl() ?>/personagens/<?php echo $d->getSlug() ?>">
                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" />
                        <span><?php echo $d->getTitle() ?></span>
                      </a>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>
