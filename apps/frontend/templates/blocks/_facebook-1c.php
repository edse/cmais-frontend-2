              <!-- BOX FACEBOOK -->
              <div class="box-padrao facebook" style="background-color: white; width:300px; margin:0 0 20px 0; float:left;">
                  <?php if($site->getSlug()!="culturalivre"):?>
                    <g:plusone></g:plusone>
                    
                    <a href="<?php if($site->twitter_url!=""): ?><?php echo $site->twitter_url ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" class="twitter-follow-button">Siga @<?php echo $site->title ?></a>                  
                  <?php else: ?>
                    <br /><br />
                    <a href="<?php if($site->twitter_url!=""): ?><?php echo $site->twitter_url ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" class="twitter-follow-button">Siga @<?php echo $site->title ?></a>
                    
                    <!-- Place this tag where you want the widget to render. -->
                    <div class="g-page" data-href="https://plus.google.com/109467063583927278542" data-rel="publisher"></div>
                    
                    <!-- Place this tag after the last widget tag. -->
                    <script type="text/javascript">
                     window.___gcfg = {lang: 'pt-BR'};
                    
                     (function() {
                       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                       po.src = 'https://apis.google.com/js/plusone.js';
                       var s = document.getElementsByTagName('script')[0]; 
                       s.parentNode.insertBefore(po, s);
                     })();
                    </script>
                  <?php endif; ?>    
                  
                  <br /><br />
                  <?php if($site->getSlug() =="joao-carlos-martins" || $site->getSlug() =="na-vertigem-do-dia" || $site->getSlug() =="passeios-da-memoria" || $site->getSlug() =="cinema-falado" || $site->getSlug() =="um-pouquinho-de-brasil") :?>
                  	<fb:like-box href="http://www.facebook.com/culturafmoficial" width="300" show_faces="true" stream="false" header="true"></fb:like-box>
                  <?php endif; ?>    
                  <fb:like-box href="<?php if($site->facebook_url!=""): ?><?php echo $site->facebook_url ?><?php else: ?>http://facebook.com/tvcultura<?php endif; ?>" width="300" show_faces="true" stream="false" header="true"></fb:like-box>
                  <!--fb:activity site="<?php echo $url?>" width="290" height="200" header="false" font="" border_color="" recommendations="true"></fb:activity-->
              </div>
              <!-- /BOX FACEBOOK -->
