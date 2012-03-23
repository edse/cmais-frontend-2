            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <!-- BOX PADRAO Carrossel -->
                <div class="box-padrao grid1 carrossel-menu rede  ">
                  <div class="nav-menu topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                      <?php if(count($displays) > 1): ?>
                      <a href="#" class="btn proximo"></a>
                      <a href="#" class="btn anterior"></a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <ul class="nav-conteudo conteudo">
                  <?php foreach($displays as $k=>$d): ?>
                    <li class="filho<?php if($k == 0): ?> ativo<?php endif; ?>">
                      <?php if($d->retriveImageUrlByImageUsage('image-3')): ?>
                      <a href="<?php echo $d->retriveUrl() ?>" class="img-310x186" style="text-align: center">
                        <img src="<?php echo $d->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" />
                      </a>
                      <?php endif; ?>
                      <?php if($d->Asset->AssetPerson->website_url != "" || $d->Asset->AssetPerson->facebook_url != "" || $d->Asset->AssetPerson->twitter_url != "" || $d->Asset->AssetPerson->youtube_url != ""): ?>
                      <ul class="rede-artista" style="width: auto;">
                        <?php if($d->Asset->AssetPerson->website_url != ""): ?>
                        <li><a href="<?php echo $d->Asset->AssetPerson->website_url ?>" class="site" title="website"></a></li>
                        <?php endif; ?>
                        <?php if($d->Asset->AssetPerson->facebook_url != ""): ?>
                        <li><a href="<?php echo $d->Asset->AssetPerson->facebook_url ?>" class="fb" title="facebook"></a></li>
                        <?php endif; ?>
                        <?php if($d->Asset->AssetPerson->twitter_url != ""): ?>
                        <li><a href="<?php echo $d->Asset->AssetPerson->twitter_url ?>" class="twt" title="twitter"></a></li>
                        <?php endif; ?>
                        <?php if($d->Asset->AssetPerson->youtube_url != ""): ?>
                        <li><a href="<?php echo $d->Asset->AssetPerson->youtube_url ?>" class="ytb" title="youtube"></a></li>
                        <?php endif; ?>
                      </ul>
                      <?php endif; ?>
                      <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                      <p><?php echo $d->getDescription() ?></p>
                    </li>
                  <?php endforeach; ?>
                  </ul>
                </div>
                <!-- /BOX PADRAO Carrossel -->
              <?php endif; ?>
            <?php endif; ?>
