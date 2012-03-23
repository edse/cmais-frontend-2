                <?php if(isset($displays)): ?>
                  <?php if(count($displays) > 0): ?>
                    <ul class="conteudo">
                      <?php foreach($displays as $d): ?>
                      <li><a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->title ?></a>
                        <div class="txt-padrao">
                          <?php $imgs = $d->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                          <?php if(count($imgs) > 0): ?>
                            <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->title ?>">
                              <img src="http://midia.cmais.com.br/assets/image/image-1/<?php echo $imgs[0]->AssetImage->getFile() ?>.jpg" alt="<?php echo $d->title ?>" name="<?php echo $d->title ?>" />
                            </a>
                          <?php endif; ?>
                          <a href="<?php echo $d->retriveUrl() ?>" class="txt"><?php echo $d->description ?></a>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
              <?php endif; ?>
