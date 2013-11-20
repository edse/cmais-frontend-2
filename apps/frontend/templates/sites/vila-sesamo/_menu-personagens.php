      <!--nav filtro personagem-->
      <nav role="navigation" class="span2">
        <h3>escolha o personagem</h3>
        <h3 aria-live="polite" id="filtro-descricao">todas as atividades estão para selecionar</h3>
        <a id="filtrar-tudo" class="btn">Selecionar todos</a> 
        <ul class="filtro-personagem">
          <?php if(isset($personagens)): ?>
            <?php if(count($personagens) > 0 ): ?>
              <?php foreach($personagens as $p): ?>
                <li>
                  <?php
                  if($section->Parent->getSlug() == "personagens"):
                    $href = $site->retriveUrl() ."/". $section->Parent->getSlug()."/".$p->getSlug(); 
                  else:  
                    $href = "javascript:;";
                  endif;
                  ?>
                  
                  <div class="inner <?php echo $p->getSlug() ?>">
                    <a href="<?php echo $href; ?>" title="<?php echo $p->getTitle() ?>" target="_self" class="btn-<?php echo $p->getSlug() ?> <?php if($section->getSlug() == $p->getSlug()) echo "active"?>" data-filter=".<?php echo $p->getSlug() ?>">
                      <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/<?php echo $p->getSlug() ?>_personagem.png" alt="filtro <?php echo $p->getTitle() ?>" />
                    </a>
                  </div>
                </li>
              <?php endforeach;?>
            <?php endif; ?>
          <?php endif; ?>
        </ul>
      </nav>
      <!--/nav filtro personagem-->
      
        <?php if($section->Parent->getSlug() == "personagens"): ?>
          <script>
            $('.inner').addClass('personagem');
          </script>
        <?php endif; ?>
      
        <script>
          $('.inner.personagem a').click(function(){
            var who = $(this).attr('href');
            window.location.assign(who)
          });

          $('.inner a[class|="btn"]').not('.inner a.active').not('.inner.personagem a').click(function(){
            goTop();  
          });
          
          function goTop(){
            $('html, body').animate({
              scrollTop:parseInt($('.divisa').offset().top-126)
            }, "slow");
          }
          
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
        </script>
      
        