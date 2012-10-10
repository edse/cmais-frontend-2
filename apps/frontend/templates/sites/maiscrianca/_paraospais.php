        <?php
          $assets = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset sa, Section s')
            ->where('sa.asset_id = a.id')
            ->andWhere('sa.section_id = s.id')
            ->andWhere('a.site_id = ?', 1)
            ->andWhere('s.id = ?', 119)
            ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
            ->orderBy('a.id desc')
            ->limit(3)
            ->execute();
        ?>
        <?php if(isset($assets)): ?>
          <?php if(count($assets) > 0): ?>
        <div class="span4 pais">
          <div class="h2"><h2>Para os pais</h2></div>
          <ul class="row-fluid span12">
            <?php foreach($assets as $k=>$d): ?>
            <li class="row-fluid span12<?php if(($k+1) == count($assets)): ?> last<?php endif; ?>">
              <a href="<?php echo $d->retriveUrl() ?>" class="row-fluid span12" title="<?php echo $d->getTitle() ?>">
                <img src="<?php echo $d->retriveImageUrlbyImageUsage("image-2-b") ?>" alt="<?php echo $d->getTitle() ?>" />
                <p><?php echo $d->getTitle() ?></p>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
          <?php endif; ?>
        <?php endif; ?>