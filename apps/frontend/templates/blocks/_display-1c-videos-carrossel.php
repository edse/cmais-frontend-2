          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>                
              <!-- BOX NOTICIA VIDEO -->              
              <div id="destaque" class="uma-coluna carrossel-videos grid1">
                <ul class="abas-conteudo conteudo">
                  <?php foreach($displays as $k => $d): ?>
                  <li id="bloco<?php echo $k ?>" class="filho <?php if($k==0): ?>ativo<?php endif; ?>">
                    <div class="media video">
                    <?php if($d->Asset->AssetType->getSlug() == "image"): ?>
                      <img src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" />
                    <?php elseif($d->Asset->AssetType->getSlug() == "content"): ?>
                      <?php $vids = $d->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
                      <?php if(count($vids) > 0): ?>
                        <?php if($vids[0]->AssetVideo->getYoutubeId() != ""): ?>
                        <iframe title="<?php echo $vids[0]->getTitle() ?>" width="310" height="206" src="http://www.youtube.com/embed/<?php echo $vids[0]->AssetVideo->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                        <?php elseif($vids[0]->AssetVideoGallery->getYoutubeId() != ""): ?>
                        <iframe title="<?php echo $vids[0]->getTitle() ?>" width="310" height="206" src="http://www.youtube.com/embed/p/<?php echo $vids[0]->AssetVideoGallery->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                        <?php endif; ?>
                        <div class="capa-video" onclick="play()" style="left: auto"></div>
                      <?php endif; ?>
                    <?php else: ?>
                      <?php if($d->Asset->AssetVideo->getYoutubeId() != ""): ?>
                      <iframe title="<?php echo $d->getTitle() ?>" width="310" height="206" src="http://www.youtube.com/embed/<?php echo $d->Asset->AssetVideo->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                      <?php elseif($d->Asset->AssetVideoGallery->getYoutubeId() != ""): ?>
                      <iframe title="<?php echo $d->getTitle() ?>" width="310" height="206" src="http://www.youtube.com/embed/p/<?php echo $d->Asset->AssetVideoGallery->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                      <?php endif; ?>
                      <div class="capa-video" onclick="play()" style="left: auto"></div>
                    <?php endif; ?>
                    </div>
                    <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                    <p><?php echo $d->getDescription() ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <ul class="abas-menu pag-bola destaque1">
                  <?php foreach($displays as $k => $d): ?>
                    <?php if($k == 0): ?>
                      <li class="ativo"><a href="#bloco<?php echo $k ?>" title="<?php echo $d->getTitle() ?>"></a></li>
                    <?php else: ?>
                      <li><a href="#bloco<?php echo $k ?>" title="<?php echo $d->getTitle() ?>"></a></li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
                               
              </div>
              <!-- /BOX NOTICIA VIDEO --> 
            <?php endif; ?>
          <?php endif; ?>
