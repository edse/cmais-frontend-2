              <!-- BOX FACEBOOK -->
              <div class="box-padrao facebook" style="background-color: white; width:300px; margin:0 0 20px 0; float:left;">
                  <g:plusone></g:plusone>
                  <br /><br />
                  <a href="<?php if($site->twitter_url!=""): ?><?php echo $site->twitter_url ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" class="twitter-follow-button">Siga @<?php echo $site->title ?></a>
                  <br /><br />
                  <fb:like-box href="<?php if($site->facebook_url!=""): ?><?php echo $site->facebook_url ?><?php else: ?>http://facebook.com/tvcultura<?php endif; ?>" width="290" show_faces="true" stream="false" header="true"></fb:like-box>
                  <!--fb:activity site="<?php echo $url?>" width="290" height="200" header="false" font="" border_color="" recommendations="true"></fb:activity-->
              </div>
              <!-- /BOX FACEBOOK -->
