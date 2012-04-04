    <?php
      $displays = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset s, Section s2')
        ->where('s.asset_id = a.id')
        ->andWhere('s.section_id = s2.id')
        ->andWhere('a.site_id = 1')
        ->andWhere('a.asset_type_id = 1')
        ->andWhere('s2.id = 119')
        ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
        ->orderBy('a.id desc')
        ->limit(4)
        ->execute();
    ?>

    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <div id="box-pais">
          <div class="topo">
            <h3><a href="http://cmais.com.br/paraospais">Para os pais</a></h3>
            <a class="veja" href="http://cmais.com.br/paraospais"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="ico-ponta"></div>
          <div class="topo-rss">
            <a href="/rss">rss</a>
          </div>
          <hr />
          <div class="tudo">
          <?php foreach($displays as $d): ?>
            <div class="recados">
              <div class="prim">
                <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                  <a href="<?php echo $d->retriveUrl() ?>">
                    <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" />
                  </a>
                <?php endif; ?>
                <a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
              </div>
              <?php /* <a class="seg" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getDescription() ?></a> */ ?>
              <hr />
            </div>
            <span class="picote"></span>
          <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
