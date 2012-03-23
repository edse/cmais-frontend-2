                <?php if(isset($displays[0])): ?>
                <div class="box-publicidade grid1" style="width: 300px; height: 50px; overflow: hidden">
                  <div style="width: 300px; height: 50px; overflow: hidden">
                  <?php if($displays[0]->getHtml()!=""): ?>
                    <?php echo html_entity_decode($displays[0]->getHtml()) ?>
                  <?php else: ?>
                    <a href="<?php echo $displays[0]->getUrl() ?>" target="<?php echo $displays[0]->getTarget() ?>"><img alt="<?php echo $displays[0]->getTitle() ?>" src="http://midia.cmais.com.br/displays/<?php echo $displays[0]->getImage() ?>" /></a>
                  <?php endif; ?>
                  </div>
                </div>
                <?php endif; ?>