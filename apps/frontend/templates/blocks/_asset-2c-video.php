            <?php if(isset($asset)): ?>
              <!-- DESTAQUE 2 COLUNAS -->
              <div class="duas-colunas destaque grid2">

                  <?php if($asset->AssetType->getSlug() == "image"): ?>
                  <a class="" href="<?php echo $asset->retriveUrl() ?>" title="<?php echo $asset->getTitle() ?>">
                  <img src="<?php echo $asset->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $asset->getTitle() ?>" name="<?php echo $asset->getTitle() ?>" />
                  
                  <?php elseif($asset->AssetType->getSlug() == "content" || $asset->AssetType->getSlug() == "image-gallery"): ?>
                    <?php $imgs = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                    <?php if(count($imgs) > 0): ?>
                      <img src="/uploads/assets/image/image-6/<?php echo $imgs[0]->AssetImage->getFile() ?>.jpg" alt="<?php echo $asset->getTitle() ?>" name="<?php echo $asset->getTitle() ?>" />
                    <?php endif; ?>
                  </a>

                  <?php elseif($asset->AssetType->getSlug() == "video"): ?>
                    <iframe width="640" height="390" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
                    <?php /*
                    <object style="height:390px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                    </object>
                    */ ?>

                  <?php elseif($asset->AssetType->getSlug() == "video-gallery" || $asset->AssetType->getSlug() == "episode"): ?>
                    <?php 
                    if($asset->AssetType->getSlug() == "video-gallery" && !$ipad)
                      $youtubeid = $asset->AssetVideoGallery->getYoutubeId();
                    else
                      $youtubeid = "";
                    ?>
                    <?php if($youtubeid != ""): ?>
                    <iframe width="640" height="390" src="http://www.youtube.com/embed/videoseries?list=PL<?php echo $youtubeid ?>&amp;hl=en_US&rel=0" frameborder="0" allowfullscreen></iframe>
                    <?php /*
                    <object height="390" width="640" style="height:390px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/p/<?php echo $youtubeid ?>?version=3&amp;hl=en_US&amp;fs=1" />
                      <param name="allowFullScreen" value="true" />
                      <param name="allowscriptaccess" value="always" />
                      <param name="wmode" value="opaque">
                      <embed allowfullscreen="true" allowscriptaccess="always" src="http://www.youtube.com/p/<?php echo $youtubeid ?>?version=3&amp;hl=en_US&amp;fs=1" wmode="opaque" type="application/x-shockwave-flash" width="640" height="390"></embed>
                    </object>
                    */?>
                    <?php else: ?>
                    <?php $videos = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
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
                  
                  <?php else: ?>
                  <div style="width:640px; height:390px;"><h2><?php echo $asset->getTitle() ?></h2><h4><?php echo $asset->getDescription() ?></h4></div>
                  <?php endif; ?>

                
                <a href="<?php echo $asset->retriveUrl() ?>" class="titulos"><?php echo $asset->getTitle() ?></a>
                <?php if(($asset->AssetVideo->getHeadline() != "")&&($asset->AssetVideo->getHeadline() != $asset->getTitle())): ?><p style="font-size: 10px;"><?php echo $asset->AssetVideo->getHeadline() ?></p><?php endif; ?>
                <p><?php echo $asset->getDescription() ?></p>
              </div>
              <!-- /DESTAQUE 2 COLUNAS -->
          <?php endif; ?>