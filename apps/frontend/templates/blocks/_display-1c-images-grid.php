            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                  <div class="conteudo galeria ">
                    <ul class="destaques">
                    <?php foreach($displays as $d): ?>
                      <?php if($d->retriveImageUrlByImageUsage("image-1")!=""): ?>
                        <li><a href="<?php echo $d->retriveUrl() ?>" style="text-align: center;"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" /></a>
                          <div class="tooltip">
                            <span></span>
                            <a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                          </div>
                        </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                    </ul>
                  </div>
              <?php endif; ?>
            <?php endif; ?>
