        <?php if(isset($displays)): ?>
          <?php if(count($displays) > 0): ?>
    <!--DESTAQUE-->
    <div id="destaque-ferias">
            <?php if($displays[0]->Asset->AssetType->getSlug() == "image"): ?>
      <a href="<?php echo $displays[0]->retriveUrl() ?>" class="media grid2<?php if($displays[0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
        <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $displays[0]->getTitle() ?>" name="<?php echo $displays[0]->getTitle() ?>" />
      </a>
            <?php elseif($displays[0]->Asset->AssetType->getSlug() == "video"): ?>
      <div class="media grid2 video">
        <object style="height:390px; width: 640px">
          <param name="movie" value="http://www.youtube.com/v/<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId() ?>?rel=0&version=3&enablejsapi=1&playerapiid=<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId() ?>">
          <param name="allowFullScreen" value="true">
          <param name="allowScriptAccess" value="always">
          <param name="wmode" value="opaque">
          <embed id="<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId() ?>" src="http://www.youtube.com/v/<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId() ?>?rel=0&version=3&enablejsapi=1&playerapiid=<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId() ?>" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
        </object>
        <div class="capa-video" onclick="play()"></div>
      </div>
            <?php else: ?>
      <h2><?php echo $displays[0]->getTitle() ?></h2></div>
            <?php endif; ?>             
    </div>
    <!--/DESTAQUE-->
    
    <!--TEXTO-->
    <div id="destaque-texto-ferias">
      <p>
        <?php echo $displays[0]->Asset->getDescription() ?>
      </p>
    </div>
    <!--/TEXTO-->
          <?php endif; ?>
        <?php endif; ?>
