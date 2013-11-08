      <!--nav filtro personagem-->
      <nav role="navigation" class="span2">
        <h3>escolha o personagem</h3>
        <h3 aria-live="polite" id="filtro-descricao">todas as atividades estão para selecionar</h3>
        <?php echo $section-getSlug() . ">>>>>>>>" ?>
        <ul class="filtro-personagem">
          
          
          <li>
            <div class="inner bel">
              <a href="javascript:;" class="btn-bel " data-filter=".bel">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/bel_personagem.png" alt="filtro bel" />
              </a>
            </div>
          </li>
          
        </ul>
      </nav>
      <!--/nav filtro personagem-->
      
      <?php if($section->getSlug() != 'personagem'):?>
        <script>  
        //ancora para os filtros
        $('.inner a[class|="btn"]').click(function(){
          goTop();  
        });
        
        function goTop(){
          $('html, body').animate({
            scrollTop:parseInt($('.divisa').offset().top-126)
          }, "slow");
        }
        </script>
      <?php endif; ?>