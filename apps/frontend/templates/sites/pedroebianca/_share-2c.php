		                  <!-- barra compartilhar -->
		                  <div class="box-compartilhar grid2">
		                    <a href="javascript:;" class="comentar" style="display:block"><span></span>Compartilhe</a>
		                    <div class="btn-compartilhar" style="width: auto;">
		                      <p class="compartilhar"></p>
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
		                  </div>
                          <!-- /barra compartilhar -->
                            
		                  <div class="comentarios">
		                    <p class="btn-comentarios"><span>Coment&aacute;rios</span></p>
		                    <div style="display:block" class="comentario-fb grid2">
		                   	  <fb:comments href="<?php echo $uri ?>" numposts="3" width="610" publish_feed="true"></fb:comments>
		                    </div>
		                  </div>
