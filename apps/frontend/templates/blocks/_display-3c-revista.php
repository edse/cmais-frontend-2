          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>
            
            <!-- REVISTA -->
            <div id="revista" class="grid3">
              <div class="destaque-revista">
                <ul id="menu-revista">
                  <?php foreach($displays as $k=>$d): ?>
                  <li<?php if($k==0) echo ' class="ativo"';?>><a data-order="<?php echo $k?>" id="item<?php echo $k+1;?>" href="javascript:;"><?php echo $d->retriveLabel() ?></a></li>
                  <?php endforeach; ?>
                </ul>
                <div id="conteudo-revista">
                  <?php foreach($displays as $k=>$d): ?>
                    <?php if(($d->type == "")||($d->type == "Default")) $type = $d->Asset->AssetType->getSlug(); else $type = strtolower($d->type); ?>
                  <div class="capa-conteudo filho" id="conteudo-item<?php echo $k+1;?>">
                    <?php if($type == 'content'):?>
                    <!-- CONTENT -->
                    <div class="not">
                      <h3 class="titulo"><a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>"><?php echo $d->getTitle() ?></a></h3>
                      <p><?php echo $d->Asset->getDescription() ?></p>
                      <p>
                      <?php $vid = $d->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
                      <?php if(count($vid) > 0): ?>
                        <a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>"><img alt="<?php echo $d->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $vid[0]->AssetVideo->getYoutubeId() ?>/0.jpg" style="width: 310px;" /></a>
                      <?php else: ?>
                        <?php if($d->retriveImageUrlByImageUsage("image-3-b") != ""): ?>
                          <a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>"><img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" /></a>
                        <?php endif; ?>
                      <?php endif; ?>
                      <?php if($d->Asset->AssetContent->getHeadlineLong() != ""): ?><?php echo $d->Asset->AssetContent->getHeadlineLong(); ?><?php else: ?><?php echo $d->Asset->AssetContent->getHeadline() ?><?php endif; ?></p>
                    </div>
                    <a class="leia" href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>">leia mais</a>
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
                    <a class="media" href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>"><img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>" /></a>
                    <?php endif; ?>
                    <div class="bg"></div>
                    <div class="descricao">
                      <h3 class="titulo"><a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>"><?php echo $d->getTitle() ?></a></h3>
                      <p><?php echo $d->getDescription() ?></p>
                    </div>
                    <?php elseif($type == 'audio'):?>
                    <!-- AUDIO -->
                    <div class="not">
                      <h3 class="titulo"><a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>"><?php echo $d->getTitle() ?></a></h3>
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
            <script>
            $(document).ready( function() {
              // comportamento inicial
              $('.destaque-revista ul li:first').addClass('ativo');
              $('.destaque-revista #conteudo-revista div:first').fadeIn('slow').addClass('ativo');
              var currentItem = '';
              
              
              
              /* evento click antigo
              $('.destaque-revista ul li a').click( function() {
                if($(this).attr('id') != currentItem){
                  cont = $(this).attr('data-order');
                  console.log(cont)
                  clearTimeout(roda);
                  var roda = setInterval(function(){rodadestaque(cont)}, 1000);
                  currentItem = $(this).attr('id'); // pega o Id do item clicado
                  $(this).parent().parent().find('li.ativo').removeClass('ativo'); // remove a classe 'ativo' de todos os elementos
                  $(this).parent().addClass('ativo'); // adiciona classe 'ativo' somente no item clicado
                  // Aplica FadeOut na div de classe 'ativo' e FadeIn na div do item clicado
                  $(this).parent().parent().next().find('div.ativo').fadeOut('slow', function() {
                    $('div#conteudo-'+currentItem+'').fadeIn('normal').addClass('ativo');
                  }).removeClass('ativo');
                }
                
              });
              */
             
             var roda;
             var roda2;
             roda = setInterval(function(){rodadestaque(1)}, 10000);
             
             $('.destaque-revista ul li a').click( function(){
                var posicao = $(this).attr('data-order');
                
                $('#menu-revista').find('li.ativo').removeClass('ativo');
                //$(this).parent().addClass('ativo');
                $('#conteudo-revista').find('.ativo').removeClass('ativo').css('display','none');
                //$('#conteudo-revista').find('#conteudo-item'+posicao).fadeIn('fast').addClass('ativo');
                rodadestaque(posicao, true);
                
              });
              var i = 0; 
              $('#menu-revista').find('li').each(function(index){
                i = index; 
              });
              var cont = 1; 
              var item;
              var miolo;
              
              function rodadestaque(pos, clique){
                //console.log(pos + "pos")
                
                
                cont = parseInt(pos);
                
                
                item = $('#item'+ cont);
                miolo =$('#conteudo-item'+cont);
                
                
                //removendo ativo do botao e passando para o proximo
                
                if(cont > i){
                  cont = 1;
                  var currentItem = $('#menu-revista').find('li #item1');
                  $(item.selector).parent().removeClass('ativo');
                  $(currentItem).parent().addClass('ativo');
                  $(miolo.selector).removeClass('ativo').css('display','none');
                  miolo = $('#conteudo-revista').find('#conteudo-item1')
                  $(miolo).fadeIn('slow').addClass('ativo');
                }else{
                  if(clique && cont==0){
                    var currentItem = $('#menu-revista').find('li #item1');
                    $(item.selector).parent().removeClass('ativo');
                    $(currentItem).parent().addClass('ativo');
                    $(miolo.selector).removeClass('ativo').css('display','none');
                    miolo = $('#conteudo-revista').find('#conteudo-item1')
                    $(miolo).fadeIn('slow').addClass('ativo'); 
                  }else{
                    $(item.selector).parent().removeClass('ativo');
                    $(item.selector).parent().next().addClass('ativo');
                    $(miolo.selector).removeClass('ativo').css('display','none');
                    $(miolo.selector).next().fadeIn('slow').addClass('ativo');
                  }
                  if(!clique){
                  
                    cont = cont + 1;
                  }
                }
                //console.log(item.selector)
                //console.log(miolo.selector)
                stoproda(roda);
                if(!clique){
                  roda = setInterval(function(){rodadestaque(cont)}, 10000);
                }
              }
              
              function stoproda(roda){
                clearInterval(roda);
              } 
            });
            </script>
            <?php endif; ?>
          <?php endif; ?>