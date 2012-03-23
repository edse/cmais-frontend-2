            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <!-- BOX PADRAO -->
                <div class="box-padrao grid1 rede">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                    </div>
                  </div>
                  <?php if($displays[0]->retriveImageUrlByImageUsage('image-3')): ?>
                  <a href="<?php echo $displays[0]->retriveUrl() ?>" class="img-310x186" style="text-align: center">
                    <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays[0]->getTitle() ?>" />
                  </a>
                  <?php endif; ?>
                  <?php if($displays[0]->Asset->AssetPerson->website_url != "" || $displays[0]->Asset->AssetPerson->facebook_url != "" || $displays[0]->Asset->AssetPerson->twitter_url != "" || $displays[0]->Asset->AssetPerson->youtube_url != ""): ?>
                  <ul class="rede-artista">
                    <?php if($displays[0]->Asset->AssetPerson->website_url != ""): ?>
                    <li><a href="<?php echo $displays[0]->Asset->AssetPerson->website_url ?>" class="site" title="website"></a></li>
                    <?php endif; ?>
                    <?php if($displays[0]->Asset->AssetPerson->facebook_url != ""): ?>
                    <li><a href="<?php echo $displays[0]->Asset->AssetPerson->facebook_url ?>" class="fb" title="facebook"></a></li>
                    <?php endif; ?>
                    <?php if($displays[0]->Asset->AssetPerson->twitter_url != ""): ?>
                    <li><a href="<?php echo $displays[0]->Asset->AssetPerson->twitter_url ?>" class="twt" title="twitter"></a></li>
                    <?php endif; ?>
                    <?php if($displays[0]->Asset->AssetPerson->youtube_url != ""): ?>
                    <li><a href="<?php echo $displays[0]->Asset->AssetPerson->youtube_url ?>" class="ytb" title="youtube"></a></li>
                    <?php endif; ?>
                  </ul>
                  <?php endif; ?>
                  <a class="titulos" href="<?php echo $displays[0]->retriveUrl() ?>"><?php echo $displays[0]->getTitle() ?></a>
                  <p><?php echo html_entity_decode($displays[0]->getDescription()) ?></p>
                </div>
                <!-- /BOX PADRAO -->
              <?php endif; ?>
            <?php endif; ?>
