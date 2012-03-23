              <?php if(isset($displays)): ?>
                <?php if(count($displays) > 0): ?>
                <div class="conteudo para-ouvir">
                  <ul class="bg-branco">
                    <?php foreach($displays as $d): ?>
                    <li><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            <?php endif; ?>
