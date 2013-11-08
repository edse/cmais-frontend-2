      <!--nav filtro personagem-->
      <nav role="navigation" class="span2">
        <h3>escolha o personagem</h3>
        <h3 aria-live="polite" id="filtro-descricao">todas as atividades estão para selecionar</h3>
        <ul class="filtro-personagem">
          <?php if(isset($personagens)): ?>
            <?php if(count($personagens) > 0 ): ?>
              <?php foreach($personagens as $p): ?>
                <li>
                  <div class="inner <?php echo $p->getSlug() ?>">
                    <a href="javascript:;" class="btn-<?php echo $p->getSlug() ?> " data-filter=".<?php echo $p->getSlug() ?>">
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
      <script>  
      $('.inner a[class|="btn"]').click(function(){
        goTop();  
      });
      
      function goTop(){
        $('html, body').animate({
          scrollTop:parseInt($('.divisa').offset().top-126)
        }, "slow");
      }
      </script>