            <?php if(isset($displays)): ?>
              <!-- DESTAQUE 2 COLUNAS -->
              <div class="duas-colunas destaque grid2">

                  <?php if($displays[0]->Asset->AssetType->getSlug() == "image"): ?>
                  <a class="" href="<?php echo $displays[0]->retriveUrl() ?>" title="<?php echo $displays[0]->getTitle() ?>">
                  <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $displays[0]->Asset->getTitle() ?>" name="<?php echo $displays[0]->Asset->getTitle() ?>" />
                  
                  <?php elseif($displays[0]->Asset->AssetType->getSlug() == "content" || $displays[0]->Asset->AssetType->getSlug() == "image-gallery"): ?>
                    <?php $imgs = $displays[0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                    <?php if(count($imgs) > 0): ?>
                      <img src="http://midia.cmais.com.br/assets/image/image-6/<?php echo $imgs[0]->AssetImage->getFile() ?>.jpg" alt="<?php echo $displays[0]->Asset->getTitle() ?>" name="<?php echo $displays[0]->Asset->getTitle() ?>" />
                    <?php endif; ?>
                  </a>
                  <?php elseif($displays[0]->Asset->AssetType->getSlug() == "video"): ?>
                    <iframe title="<?php echo $displays[0]->getTitle() ?>" width="640" height="390" src="http://www.youtube.com/embed/<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s?version=3&amp;hl=en_US&amp;fs=1" frameborder="0" allowfullscreen></iframe>
                  
                  <?php elseif($displays[0]->Asset->AssetType->getSlug() == "video-gallery" || $displays[0]->Asset->AssetType->getSlug() == "episode"): ?>
                    <?php 
                    if($displays[0]->Asset->AssetType->getSlug() == "video-gallery")
                      $youtubeid = $displays[0]->Asset->AssetVideoGallery->getYoutubeId();
                    else
                      $youtubeid = "";
                    ?>
                    <?php if($youtubeid != ""): ?>
                    <iframe width="640" height="390" src="http://www.youtube.com/embed/videoseries?list=PL<?php echo $youtubeid ?>&amp;hl=en_US&rel=0" frameborder="0" allowfullscreen></iframe>
                    <?php else: ?>
                    <?php $videos = $displays[0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
                    <div id="player"><iframe title="<?php echo $videos[0]->getTitle() ?>" width="640" height="390" src="http://www.youtube.com/embed/<?php echo $videos[0]->AssetVideo->getYoutubeId(); ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe></div>
                    <script>
                    function changeVideo(id){
                      $('#player').html('<iframe width="640" height="390" src="http://www.youtube.com/embed/'+id+'?wmode=transparent" frameborder="0" allowfullscreen></iframe>');
                    }
                    </script>

                    <?php if(count($videos) > 0): ?>
                      <ul class="box-playlist grid2">
                        <?php foreach($videos as $k=>$dd): ?>
                          <li style="width: 155px">
                            <?php if($dd->retriveImageUrlByImageUsage("image-2") != ""): ?>
                            <a href="javascript:changeVideo('<?php echo $dd->AssetVideo->getYoutubeId(); ?>')" class="img">
                              <img class="img-150x90" src="<?php echo $dd->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $dd->getTitle() ?>" />
                            </a>
                            <?php endif; ?>
                            <?php if($dd->retriveLabel() != ""): ?>
                            <h3 class="chapeu"><?php echo $dd->retriveLabel() ?></h3>
                            <?php endif; ?>
                            <a href="<?php echo $dd->retriveUrl() ?>"><?php echo $dd->getDescription() ?></a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                    <?php endif; ?>


                  <?php elseif($displays[0]->Asset->AssetType->getSlug() == "video-gallery2"): ?>
                    <object height="390" width="640" style="height:390px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/p/<?php echo $displays[0]->Asset->AssetVideoGallery->getYoutubeId(); ?>?version=3&amp;hl=en_US&amp;fs=1" />
                      <param name="allowFullScreen" value="true" />
                      <param name="allowscriptaccess" value="always" />
                      <param name="wmode" value="opaque">
                      <embed allowfullscreen="true" allowscriptaccess="always" src="http://www.youtube.com/p/<?php echo $displays[0]->Asset->AssetVideoGallery->getYoutubeId(); ?>?version=3&amp;hl=en_US&amp;fs=1" wmode="opaque" type="application/x-shockwave-flash" width="640" height="390"></embed>
                    </object>
                  <?php elseif($displays[0]->Asset->AssetType->getSlug() == "episode2"): ?>
                    <?php echo $displays[0]->Asset->RelatedAssets[0]->Asset->AssetVideo->getYoutubeId(); ?>
                    <object height="390" width="640" style="height:390px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/p/<?php echo $displays[0]->Asset->RelatedAssets[0]->Asset->AssetVideo->getYoutubeId(); ?>?version=3&amp;hl=en_US&amp;fs=1" />
                      <param name="allowFullScreen" value="true" />
                      <param name="allowscriptaccess" value="always" />
                      <param name="wmode" value="opaque">
                      <embed allowfullscreen="true" allowscriptaccess="always" src="http://www.youtube.com/p/<?php echo $displays[0]->Asset->AssetVideoGallery->getYoutubeId(); ?>?version=3&amp;hl=en_US&amp;fs=1" wmode="opaque" type="application/x-shockwave-flash" width="640" height="390"></embed>
                    </object>
                  <?php elseif($displays[0]->getHtml() != ""): ?>
                    <?php echo html_entity_decode($displays[0]->getHtml()) ?>
                  <?php else: ?>
                  <a class="" href="<?php echo $displays[0]->retriveUrl() ?>" title="<?php echo $displays[0]->getTitle() ?>">
                  <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $displays[0]->getTitle() ?>" name="<?php echo $displays[0]->getTitle() ?>" />
                  <?php endif; ?>

                <a href="<?php echo $displays[0]->retriveUrl() ?>" class="titulos"><?php echo $displays[0]->getTitle() ?></a>
                <p><?php echo $displays[0]->getDescription() ?></p>
              </div>
              <!-- /DESTAQUE 2 COLUNAS -->
          <?php endif; ?>
