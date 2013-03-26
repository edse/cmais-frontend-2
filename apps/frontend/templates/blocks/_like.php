          <!-- curtir -->
          <div class="redes">
            <div class="curtir">
              <div style="display:block; float: left; margin-right:10px;">
              <g:plusone size="medium" count="false"></g:plusone>
              </div>
              <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
            </div>
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
            <ul>                         
              <li><a class="fb" href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?>http://facebook.com/tvcultura<?php endif; ?>" title="Facebook" target="_blank">Facebook</a></li>
              <li><a class="twt" href="<?php if($site->getTwitterUrl()): ?><?php echo $site->getTwitterUrl() ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" title="Twitter" target="_blank">Twitter</a></li>
              <li><a class="ytb" href="http://youtube.com/<?php if($site->getYoutubeChannel()): ?><?php echo $site->getYoutubeChannel() ?><?php else: ?>cultura<?php endif; ?>" title="YouTube" target="_blank">YouTube</a></li>
              <li><a class="rss" href="/<?php echo $site->getSlug() ?>/feed" title="RSS" target="_blank">RSS</a></li>
            </ul>
          </div>
          <!-- /curtir -->
