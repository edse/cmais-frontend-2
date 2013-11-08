      <!--nav filtro personagem-->
      <nav role="navigation" class="span2">
        <h3>escolha o personagem</h3>
        <h3 aria-live="polite" id="filtro-descricao">todas as atividades estão para selecionar</h3>
        <ul class="filtro-personagem">
          <?php $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"personagens"); ?>
          <?php echo $particularSection->subsections()?>
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