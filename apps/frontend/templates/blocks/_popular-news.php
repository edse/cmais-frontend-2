              <?php if(isset($displays)): ?>
                <?php if(count($displays) > 0): ?>
                <ul class="conteudo link">
                  <?php foreach($displays as $d): ?>
                  <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            <?php endif; ?>
