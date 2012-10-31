        <?php
          $voce_sabia = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset s, Section s2')
            ->where('s.asset_id = a.id')
            ->andWhere('s.section_id = s2.id')
            ->andWhere('a.site_id = ?', 267)
            ->andWhere('a.asset_type_id = 1')
            ->andWhere('s2.id = 692')
            //->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
            ->orderBy('a.id desc')
            ->limit(1)
            ->fetchOne();
        ?>
        <?php if(isset($voce_sabia)): ?>
        <div class="span4">
          <!--div class="h2"><h2>Você Sabia?</h2></div-->
          <div class="h2"><h2><a href="/maiscrianca/vocesabia" title="Você Sabia?">Você Sabia?</a></h2></div>
          <?php if($voce_sabia->retriveImageUrlByImageUsage("image-3-b") != ""): ?>
          <a href="<?php echo $voce_sabia->retriveUrl() ?>" title="<?php echo $voce_sabia->getTitle() ?>"><img src="<?php echo $voce_sabia->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $voce_sabia->getTitle() ?>" /></a>
          <?php endif; ?>
          <a class="descricao" href="<?php echo $voce_sabia->retriveUrl() ?>" title="<?php echo $voce_sabia->getTitle() ?>"><?php echo $voce_sabia->getTitle() ?></a>
        </div>
        <?php endif; ?>
