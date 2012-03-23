                <!-- QUINTAL DA CULTURA -->
              <?php if(isset($displays)): ?>
                <?php if(count($displays) > 0): ?>
                <div class="quintal-cultura grid1">
                  <div class="box-padrao">
                    <div class="topo claro">
                      <span></span>
                      <div class="capa-titulo">
                        <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                      </div>
                    </div>
                    <?php if($displays[0]->retriveImageUrlByImageUsage("")): ?>
                      <a href="<?php echo $displays[0]->retriveUrl() ?>" class="titulos"><?php echo $displays[0]->getTitle() ?></a>
                    <?php endif; ?>
                    <div id="box-infantil">
                      <div class="tudo">
                        <?php if($displays[0]->retriveImageUrlByImageUsage("")): ?>
                          <a href="<?php echo $displays[0]->retriveUrl() ?>"><img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $displays[0]->getTitle() ?>" /></a>
                          <?php /*
                          <div class="btn-barra">
                            <span class="pontaBarra"></span>
                            <a href="<?php echo $displays[0]->retriveUrl() ?>">Jogar agora</a>
                            <span class="caudaBarra"></span>
                          </div>
                          */ ?>
                        <?php endif; ?>
                        <?php if(count($displays) > 1): ?>
                        <div class="box-carrossel">
                          <span class="picote"></span>
                          <div class="carrossel">
                            <ul>
                              <?php foreach($displays as $k=>$d): ?>
                                <?php if($k > 0): ?>
                                <li>
                                  <a href="<?php echo $d->retriveUrl() ?>">
                                    <img src="<?php echo $d->retriveImageUrlByImageUsage('image-1') ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" />
                                  </a>
                                </li>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </ul>
                          </div>
                          <hr />
                          <span class="picote"></span>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>

                  </div>
                </div>
                <?php endif; ?>
              <?php endif; ?>
                <!-- QUINTAL DA CULTURA -->
