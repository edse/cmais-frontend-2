            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
              <div id="destaque" class="uma-coluna carrossel-videos grid1">
                <ul class="abas-conteudo conteudo">
                <?php foreach($displays as $k=>$d): ?>
                  <li id="bloco<?php echo $k+1 ?>" class="filho">
                    <div class="media video">
                      <?php if($d->AssetVideo->getYoutubeId() != ""): ?>
                      <iframe title="<?php echo $d->getTitle() ?>" width="310" height="216" src="http://www.youtube.com/embed/<?php echo $d->AssetVideo->getYoutubeId(); ?>?wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                      <?php elseif($d->AssetVideoGallery->getYoutubeId() != ""): ?>
                      <iframe title="<?php echo $d->getTitle() ?>" width="310" height="216" src="http://www.youtube.com/embed/p/<?php echo $d->AssetVideoGallery->getYoutubeId(); ?>?wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                      <?php endif; ?>
                      <?php /*
                      <object style="height:216px; width: 310px">
                        <param name="movie" value="http://www.youtube.com/v/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                        <param name="allowFullScreen" value="true">
                        <param name="allowScriptAccess" value="always">
                        <param name="wmode" value="opaque">
                        <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="310" height="216"></embed>
                      </object> */?>
                    </div>
                    <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                    <p><?php echo $d->getDescription() ?></p>
                  </li>
                  <?php endforeach; ?>
              <?php endif; ?>
            <?php endif; ?>
