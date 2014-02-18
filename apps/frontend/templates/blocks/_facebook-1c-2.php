              <!-- BOX FACEBOOK -->
              <div class="box-padrao facebook grid1" style="background-color: white; padding: 10px;">
                  <g:plusone></g:plusone>
                  <br /><br />
                  <a href="<?php if($site->twitter_url!=""): ?><?php echo $site->twitter_url ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" class="twitter-follow-button">Siga @<?php echo $site->title ?></a>
                  <br /><br />
                  <fb:activity site="http://cmais.com.br" width="290" height="400" header="true" font="" border_color="" recommendations="true"></fb:activity>
              </div>
              <!-- /BOX FACEBOOK -->
