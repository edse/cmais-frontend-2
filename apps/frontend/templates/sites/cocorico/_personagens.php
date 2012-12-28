      <?php
        $displays = array();
            
        $blocks = Doctrine_Query::create()
          ->select('b.*')
          ->from('Block b, Section s')
          ->where('b.section_id = s.id')
          ->andWhere('s.slug = ?', 'home')
          ->andWhere('b.slug = ?', 'personagens')
          ->andWhere('s.site_id = ?', $site->id)
          ->execute();
          
        if(count($blocks) > 0){
          $displays["personagens"] = $blocks[0]->retriveDisplays();
        }
      ?>
      <?php if(isset($displays['personagens'])):?>
        <?php if(count($displays['personagens']) > 0): ?>
          <div class="lista-personagens">
            <h3>turma</h3>
            <ul>
              <?php foreach($displays['personagens'] as $k=>$d): ?>
                <?php $related = $d->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
                <?php if(count($related) > 0): ?>
              <li><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" /></a></li>
                <?php endif; ?>
             <?php endforeach; ?>
            </ul>
          </div>
        <?php endif;?>
      <?php endif; ?>