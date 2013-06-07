          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>
          <!-- destaque home -->
          <div id="destaque" class="destaque grid2 chamada-home">
            <ul class="abas-conteudo conteudo">
              <?php foreach($displays as $k=>$d): ?>
              <li style="display: block;" id="bloco<?php echo $k; ?>" class="filho">
                <a class="media titulos" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <?php echo $d->getLabel() ?>
                  <img style="width: 310px;" src="<?php echo $d->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $d->getTitle() ?>">
                </a>
                <a href="<?php echo $d->retriveUrl() ?>" class="titulos" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a>
                <p><?php echo $d->getDescription() ?></p>
              </li>
              <?php endforeach; ?>
            </ul>
            <ul class="abas-menu pag-bola destaque1">
              <?php foreach($displays as $k=>$d): ?>
                
              <li><a href="#bloco<?php echo $k ?>" title="<?php echo $d->getTitle() ?>"></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <!-- /destaque home-->
            <?php endif; ?>
          <?php endif; ?>
            
