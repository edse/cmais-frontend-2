        <?php if(isset($displays)): ?>
          <?php if(count($displays) > 0): ?>
          <!-- DESTAQUE 5C -->
          <div id="destaque">
            <div class="novoDestaque">
              <div class="enunciado">
                <h2><a href="http://tvcultura.cmais.com.br/grade">Esta semana na TV Cultura</a></h2>
                <span></span>
              </div>
              <div class="destaque-5">
                <table>
                  <?php foreach($displays as $k=>$d): ?>
                  <tr> 
                    <td class="logo">
                      <a href="<?php echo $d->retriveUrl() ?>">
                        <img title="<?php echo $d->Asset->Site->Program->getTitle() ?>" alt="<?php echo $d->Asset->Site->Program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $d->Asset->Site->Program->getImageThumb() ?>" />
                      </a>
                    </td>
                    <td class="foto">
                      <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                        <img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-9') ?>" />
                      </a>
                    </td>
                    <td class="texto">
                      <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                        <p class="nome"><?php echo $d->getTitle() ?></p>
                        <p class="horario"><?php echo $d->getLabel() ?></p>
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
          <!-- /DESTAQUE 5C -->
          <?php endif; ?>
        <?php endif; ?>
