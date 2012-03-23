        <?php if(isset($displays)): ?>
          <?php if(count($displays) > 0): ?>
          <!-- DESTAQUE 3C -->
          <div id="destaque" class="grid3 destaque-3c">
            <ul class="abas-conteudo conteudo">
              
              <?php foreach($displays as $k=>$d): ?>
              <li id="bloco<?php echo $d->getId() ?>" class="filho" style="display:<?php if($k == 0): ?>block<?php else: ?>none<?php endif; ?>;">
                  
                  <?php if($d->Asset->AssetType->getSlug() == "image"): ?>
                    <a href="<?php echo $d->retriveUrl() ?>" class="media grid2<?php if($d->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                    <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" />
                  
                  <?php elseif($d->Asset->AssetType->getSlug() == "content"): ?>
                    <?php $imgs = $d->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                    <?php if(count($imgs) > 0): ?>
                      <a href="<?php echo $d->retriveUrl() ?>" class="media grid2<?php if($d->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" />
                    <?php endif; ?>
                  
                  <?php elseif($d->Asset->AssetType->getSlug() == "video"): ?>
                    <div class="media grid2 video">
                      <object style="height:390px; width: 640px">
                        <param name="movie" value="http://www.youtube.com/v/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?rel=0&version=3&enablejsapi=1&playerapiid=<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>">
                        <param name="allowFullScreen" value="true">
                        <param name="allowScriptAccess" value="always">
                        <param name="wmode" value="opaque">
                        <embed id="<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>" src="http://www.youtube.com/v/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?rel=0&version=3&enablejsapi=1&playerapiid=<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                      </object>
                      <div class="capa-video" onclick="play()"></div>
                    </div>
                  
                  <?php else: ?>
                  <div style="width:640px; height:390px;"><h2><?php echo $d->getTitle() ?></h2><h4><?php echo $d->getDescription() ?></h4></div>
                  <?php endif; ?>
                </a>
                
                <div class="legenda">
                  <?php if($d->Asset->Site->Program->image_thumb != ""): ?>
                  <img src="http://midia.cmais.com.br/programs/<?php echo $d->Asset->Site->Program->getImageThumb() ?>" alt="<?php echo $d->Asset->Site->Program->getTitle() ?>" title="<?php echo $d->Asset->Site->Program->getTitle() ?>" />
                  <?php endif; ?>
                  <h3><?php echo $d->getTitle() ?></h3>
                  <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getDescription() ?></a></p>
                  <p class="data"><?php echo $d->getLabel() ?></p>
                </div>
                
              </li>
              
              <?php endforeach; ?>
            </ul>
            
            <div class="capa-paginacao">
              <ul class="abas-menu pag-bola destaque1">
                <?php foreach($displays as $k=>$d): ?>
                  <li<?php if($k==0): ?> class="ativo"<?php endif; ?>><a href="#bloco<?php echo $d->getId() ?>" title="<?php echo $d->getTitle() ?>"></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <!-- /DESTAQUE 3C -->
          <?php endif; ?>
        <?php endif; ?>
