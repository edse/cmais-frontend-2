<?php
if(isset($asset))
  $uri = $asset->retriveUrl();
?>
              <div class="rodape-cmais">
                <p>
                  O <a href="http://cmais.com.br?origem=<?php echo $uri ?>" title="cmais+ O portal de conteúdo da Cultura">cmais+</a> é o portal de conteúdo da Cultura e reúne os canais <a href="http://tvcultura.cmais.com.br?origem=<?php echo $uri ?>" title="TV Cultura">TV Cultura</a>, <a href="http://univesptv.cmais.com.br?origem=<?php echo $uri ?>" title="UnivespTV">UnivespTV</a>, <a href="http://multicultura.cmais.com.br?origem=<?php echo $uri ?>" title="MultiCultura">MultiCultura</a>,
                  <a href="http://tvratimbum.cmais.com.br?origem=<?php echo $uri ?>" title="TV Rá-Tim-Bum!">TV Rá-Tim-Bum!</a> e as rádios <a href="http://www.culturabrasil.com.br?origem=<?php echo $uri ?>" title="Cultura Brasil">Cultura Brasil</a> e <a href="http://culturafm.cmais.com.br?origem=<?php echo $uri ?>" title="Cultura FM">Cultura FM</a>.<br/><br/>
                  Visite o <a href="http://cmais.com.br?origem=<?php echo $uri ?>" title="cmais+ O portal de conteúdo da Cultura">cmais+</a> e navegue por nossos conteúdos.
                </p>  
              </div>
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
                      <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="fase" width="120"></fb:like>
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
