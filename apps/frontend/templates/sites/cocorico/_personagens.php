      <?php
        $ss = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'personagens');
        $sections = $ss->subsections();
      ?>

      <?php if(isset($sections)):?>
        <?php if(count($sections) > 0): ?>
          <div class="lista-personagens">
            <h3>turma</h3>
            <ul>
              <?php foreach($sections as $s): ?>
                <?php
                  $block = $s->retriveBlockBySlug('icone');
                  if($block){
                    $icone = $block->retriveDisplays();
                    if(count($icone) > 0): ?>
                      <li>
                        <a href="<?php echo $s->retriveUrl() ?>" title="<?php echo $s->getTitle() ?>" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="<?php echo $s->getTitle() ?>">
                          <img src="<?php echo $icone[0]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $s->getTitle() ?>" />
                        </a>
                      </li>
                    <?php endif;
                  }
              ?>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif;?>
      <?php endif; ?>
      
      <style type="text/css">
      /* tooltip*/
      .tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; }
      .tooltip.in,
      .tooltip { opacity: 1; filter: alpha(opacity=100);}
      .tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;}
      /* tooltip*/
      </style>
