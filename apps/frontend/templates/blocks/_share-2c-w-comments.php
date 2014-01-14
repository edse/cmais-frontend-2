              <!-- barra compartilhar -->
              <div class="box-compartilhar grid2">
                <a href="javascript:;" class="comentar" style="display:block"><span></span>Comentários</a>
                <div class="btn-compartilhar" style="width: auto;">
                  <p class="compartilhar">Compartilhar</p>
                  <div class="face" style="display:block; width: 380px;">
                    <div style="display:block; float: left; margin-right: 40px;">
                      <g:plusone size="medium" count="false"></g:plusone>
                    </div>
                    <div style="display:block; float: left; margin-right: 0px;">
                      <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
                    </div>
                    <div style="display:block; float: left; text-align: left;">
                      <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
                    </div>
                  </div>  
                </div>
                <!--
                <div class="btn-compartilhar">
                  <p class="compartilhar">Compartilhar</p>
                  <a href="javascript:;" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo urlencode($uri) ?>', 'sharer', 'toolbar=0,status=0,width=620,height=440');" class="fb"></a>
                  <a href="http://twitter.com/share?url=<?php echo $uri ?>" target="_blank" class="twt"></a>
                  <a href="http://www.facebook.com/sharer.php?s= 100&amp;p[title]=title&amp;p[url]=<?php echo $uri ?>&amp;p[images][0]=http://cmais.com.br/portal/images/logoCMAIS.png&amp;p[summary]=summary">s</a>
                </div>
                -->
              </div>
              <!-- /barra compartilhar -->
              <!-- comentario facebook -->
              <div class="comentario-fb grid2" style="display:block">
                <fb:comments href="<?php echo $uri ?>" numposts="3" width="610" publish_feed="true"></fb:comments>
                <hr />
              </div>
              <!-- /comentario facebook -->
