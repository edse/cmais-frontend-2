          <!-- curtir -->
          <div class="redes">
            <div class="curtir">
              <div style="display:block; float: left; margin-right:10px;">
              <?php if($site->getSlug()!="culturalivre"):?>  
                <g:plusone size="medium" count="false"></g:plusone>
              <?php endif; ?>
              </div>
              <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
            </div>
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
            <ul> 
              <li>
              <?php if($site->getSlug()=="culturalivre"):?>
                <!-- Place this code where you want the badge to render. -->
                <a href="https://plus.google.com/109467063583927278542?prsrc=3"
                  rel="publisher" target="_top" style="text-decoration:none;">
                  <img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="margin: 2px;border:0;width:20px;height:20px;"/>
                </a>
              <?php endif;?>
              </li>                        
              <li><a class="fb" href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?>http://facebook.com/tvcultura<?php endif; ?>" title="Facebook" target="_blank">Facebook</a></li>
              <li><a class="twt" href="<?php if($site->getTwitterUrl()): ?><?php echo $site->getTwitterUrl() ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" title="Twitter" target="_blank">Twitter</a></li>
              <li><a class="ytb" href="http://youtube.com/<?php if($site->getYoutubeChannel()): ?><?php echo $site->getYoutubeChannel() ?><?php else: ?>cultura<?php endif; ?>" title="YouTube" target="_blank">YouTube</a></li>
              <li><a class="rss" href="/<?php echo $site->getSlug() ?>/feed" title="RSS" target="_blank">RSS</a></li>
            </ul>
          </div>
          <!-- /curtir -->
