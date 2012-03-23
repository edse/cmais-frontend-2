                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays)): ?>
                  
                  <?php if($displays[0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                  <a href="<?php echo $displays[0]->retriveUrl() ?>" title="<?php echo $displays[0]->getTitle() ?>">
                    <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays[0]->getTitle() ?>" name="<?php echo $displays[0]->getTitle() ?>" style="width: 308px;" />
                  </a>
                  <?php endif; ?>

                  <a class="titulos" href="<?php echo $displays[0]->retriveUrl() ?>"><?php echo $displays[0]->getTitle() ?></a>
                  <p><?php echo $displays[0]->getDescription() ?></p>

                <?php endif; ?>
                <!-- BOX PADRAO Noticia -->
