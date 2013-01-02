      <?php
      /*
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
       * 
       */?>
       
      <?php
      
        $s = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1149, 'joguinhos');
        $sections = $s->subsections();
      ?>
      <?php if(isset($sections)):?>
        <?php if(count($sections) > 0): ?>
          <div class="lista-personagens">
            <h3>turma</h3>
            <ul>
              <?php foreach($sections as $s): ?>
                <?php
                  $block = $s->retriveBlockBySlug('icone');
                  $icone = $block->retriveDisplays();
                  echo ">>>".count($icone);
                  if(count($icone) > 0): ?>
                    <li><a href="<?php echo $s->retriveUrl() ?>" title="<?php echo $s->getTitle() ?>"><img src="<?php echo $icone[0]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $s->getTitle() ?>" /></a></li>
                  <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif;?>
      <?php endif; ?>