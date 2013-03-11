            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <div class="box-padrao grid1">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                    </div>
                  </div>
                  <?php if($displays[0]->Asset->AssetType->getSlug() == "content" || $displays[0]->Asset->AssetType->getSlug() == "image-gallery"): ?>
                    <?php $imgs = $displays[0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                  <?php endif; ?>
                  <div class="conteudo galeria" style="text-align:center;">
                    <a class="img-310x186" href="<?php echo $displays[0]->retriveUrl() ?>"><img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays[0]->getTitle() ?>" name="<?php echo $displays[0]->getTitle() ?>" /></a>
                    <?php /* <a href="<?php echo $displays[0]->retriveUrl() ?>"><span><?php echo $displays[0]->getTitle() ?>:</span> <?php echo $displays[0]->getDescription() ?></a> */?>
                    <ul class="destaques">
                    <?php if(count($imgs) > 0): ?>
                      <?php for($i=0; $i<3; $i++): ?>
                      <li><a href="<?php echo $displays[0]->retriveUrl() ?>"><img alt="<?php echo $imgs[$i]->getTitle() ?>" src="http://midia.cmais.com.br/assets/image/image-3-b/<?php echo $imgs[$i]->AssetImage->getFile() ?>.jpg" /></a>
                        <div class="tooltip">
                          <span></span>
                          <a href="<?php echo $displays[0]->retriveUrl() ?>"><?php echo $imgs[$i]->getTitle() ?></a>
                        </div>
                      </li>
                      <?php endfor; ?>
                    <?php endif; ?>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
            <?php endif; ?>
