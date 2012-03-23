          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>
            <script>
            $(document).ready( function() {
              // comportamento inicial
              $('.destaque-revista ul li:first').addClass('ativo');
              $('.destaque-revista #conteudo-revista div:first').fadeIn('slow').addClass('ativo');
              var currentItem = '';
              // evento click
              $('.destaque-revista ul li a').click( function() {
                if($(this).attr('id') != currentItem){
                  currentItem = $(this).attr('id'); // pega o Id do item clicado
                  $(this).parent().parent().find('li.ativo').removeClass('ativo'); // remove a classe 'ativo' de todos os elementos
                  $(this).parent().addClass('ativo'); // adiciona classe 'ativo' somente no item clicado
                  // Aplica FadeOut na div de classe 'ativo' e FadeIn na div do item clicado
                  $(this).parent().parent().next().find('div.ativo').fadeOut('slow', function() {
                    $('div#conteudo-'+currentItem+'').fadeIn('normal').addClass('ativo');
                  }).removeClass('ativo');
                }
              });
            })
            </script>
            <!-- REVISTA -->
            <div id="revista" class="grid3">
              <div class="destaque-revista">
                <ul id="menu-revista">
                  <?php foreach($displays as $k=>$d): ?>
                  <li<?php if($k==0) echo ' class="ativo"';?>><a id="item<?php echo $k+1;?>" href="javascript:;"><?php echo $d->retriveLabel() ?></a></li>
                  <?php endforeach; ?>
                </ul>
                <div id="conteudo-revista">
                  <?php foreach($displays as $k=>$d): ?>
                    <?php if(($d->type == "")||($d->type == "Default")) $type = $d->Asset->AssetType->getSlug(); else $type = strtolower($d->type); ?>
                  <div class="capa-conteudo filho" id="conteudo-item<?php echo $k+1;?>">
                    <?php if($type == 'content'):?>
                    <!-- CONTENT -->
                    <div class="not">
                      <h3 class="titulo"><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h3>
                      <p><?php echo $d->Asset->getDescription() ?></p>
                      <p>
                      <?php $vid = $d->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
                      <?php if(count($vid) > 0): ?>
                        <a href="<?php echo $d->retriveUrl() ?>"><img alt="<?php echo $d->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $vid[0]->AssetVideo->getYoutubeId() ?>/0.jpg" style="width: 310px;" /></a>
                      <?php else: ?>
                        <?php if($d->retriveImageUrlByImageUsage("image-3-b") != ""): ?>
                          <a href="<?php echo $d->retriveUrl() ?>"><img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" /></a>
                        <?php endif; ?>
                      <?php endif; ?>
                      <?php if($d->Asset->AssetContent->getHeadlineLong() != ""): ?><?php echo $d->Asset->AssetContent->getHeadlineLong(); ?><?php else: ?><?php echo $d->Asset->AssetContent->getHeadline() ?><?php endif; ?></p>
                    </div>
                    <a class="leia" href="<?php echo $d->retriveUrl() ?>">leia mais</a>
                    <div class="linha"></div>
                    <?php elseif($type == 'video'):?>
                    <!-- VIDEO -->
                    <div class="media video">
                      <object style="height:390px; width: 640px">
                        <param name="movie" value="http://www.youtube.com/v/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?version=3&rel=0">
                        <param name="allowFullScreen" value="true">
                        <param name="allowScriptAccess" value="always">
                        <param name="wmode" value="opaque">
                        <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?version=3&rel=0" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                      </object>
                    </div>
                    <?php elseif($type == 'image'):?>
                    <!-- IMAGE -->
                    <?php if($d->retriveImageUrlByImageUsage("image-6-b")): ?>
                    <a class="media" href="<?php echo $d->retriveUrl() ?>"><img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>" /></a>
                    <?php endif; ?>
                    <div class="bg"></div>
                    <div class="descricao">
                      <h3 class="titulo"><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h3>
                      <p><?php echo $d->getDescription() ?></p>
                    </div>
                    <?php elseif($type == 'audio'):?>
                    <!-- AUDIO -->
                    <div class="not">
                      <h3 class="titulo"><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h3>
                      <p><?php echo $d->Asset->getDescription() ?></p>
                      <p><?php echo html_entity_decode($d->Asset->AssetAudio->render2()) ?></p>
                    </div>
                    <div class="linha"></div>
                    <?php endif; ?>
                    
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <!-- /Destaque Revista -->
              <!-- Menu Editorias -->
              <ul class="menu-editorias">
                <li class="arte"><a href="http://cmais.com.br/arte-e-cultura">Arte e Cultura</a></li>
                  <li class="inf"><a href="http://cmais.com.br/infantil">Infantil</a></li>
                  <li class="edu"><a href="http://cmais.com.br/educacao">Educacação</a></li>
                  <li class="jor"><a href="http://cmais.com.br/jornalismo">Jornalismo</a></li>
                  <li class="mus"><a href="http://cmais.com.br/musica">Música</a></li>
               </ul>
              <!-- /Menu Editorias -->
            </div>
            <!-- /REVISTA -->
            <?php endif; ?>
          <?php endif; ?>