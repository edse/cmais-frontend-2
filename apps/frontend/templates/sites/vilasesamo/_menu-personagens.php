      <?php
      $noscript = "<noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>"
      ?> 
      <!--nav filtro personagem-->
      <nav role="navigation" class="span2" accesskey="P">
        <h3 <?php if($section->Parent->getSlug() == "personagens") echo "class='marginTopBottom10'"?> >escolha por personagem</h3>
        <h3 aria-live="polite" id="filtro-descricao" tabindex="0">Caso queira, selecione <?php echo $section->getSlug() ?>s pelo personagem da VilaSésamo</h3>
        
        <ul class="filtro-personagem">
          <?php if(isset($personagens)): ?>
            <?php if(count($personagens) > 0 ): ?>
              <?php foreach($personagens as $p): ?>
                <li>
                  <?php
                  if($section->Parent->getSlug() == "personagens"):
                    $href = $site->retriveUrl() ."/". $section->Parent->getSlug()."/".$p->getSlug();
                  ?>  
                    <div class="inner <?php echo $p->getSlug() ?>">
                      <a href="<?php echo $href; ?>" title="<?php echo $p->getTitle() ?>" target="_self" class="btn-<?php echo $p->getSlug() ?> <?php if($section->getSlug() == $p->getSlug()) echo "active"?>" data-filter=".<?php echo $p->getSlug() ?>">
                        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/<?php echo $p->getSlug() ?>_personagem.png" alt="personagem <?php echo $p->getTitle() ?>" />
                      </a>
                    </div>
                  <?php   
                  else:
                    $href = "#";
                  ?> 
                    <div class="inner <?php echo $p->getSlug() ?>">
                      <a href="<?php echo $href; ?>" title="<?php echo $p->getTitle() ?>" target="_self" class="btn-<?php echo $p->getSlug() ?> <?php if($section->getSlug() == $p->getSlug()) echo "active"?>" data-filter=".<?php echo $p->getSlug() ?>">
                        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/<?php echo $p->getSlug() ?>_personagem.png" alt="filtro <?php echo $p->getTitle() ?>" />
                      </a>
                    </div>
                  <?php
                  endif;
                  ?>
                  
                  
                </li>
              <?php endforeach;?>
            <?php endif; ?>
          <?php endif; ?>
        </ul>
        <?php if($section->getSlug() == "atividades" || $section->getSlug() == "videos" || $section->getSlug() == "jogos"):?>
          <a id="filtrar-tudo" class="btn" tabindex="0" aria-label="botão para selecionar todos os personagens filtro">Selecionar todos</a> 
        <?php endif; ?>
      </nav>
      <!--/nav filtro personagem-->
      
        <?php if($section->Parent->getSlug() == "personagens"): ?>
          <script>
            $('.inner').addClass('personagem');
          </script>
          <?php echo $noscript; ?>
        <?php endif; ?>
        
        <script>
          
          $('.inner a[class|="btn"]').not('.inner a.active').not('.inner.personagem a').click(function(){
            goTop();  
          });
          
          $('.inner a').not('.inner a.active').mouseenter(function(){
           if($(this).parent().hasClass('jogos')){ 
            $(this).find('img').animate({top:-33, easing:"swing"},'fast');
           }else{
            $(this).find('img').animate({top:-25, easing:"swing"},'fast');  
           }
          });
          
          $('.inner a').not('.inner a.active').mouseleave(function(){
            if(!$(this).parent().parent().hasClass('ativo')){
              $(this).find('img').stop();
              $(this).find('img').animate({top:0, easing:"swing"},'fast'); 
            } 
          });
          
          function goTop(){
            $('html, body').animate({
              scrollTop:parseInt($('.divisa').offset().top-126)
            }, "slow");
          }
        </script>
        <?php echo $noscript; ?>
        