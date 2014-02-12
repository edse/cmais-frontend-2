
<section class="bgtotal">
  <span class="divisa tipo2"></span>
  <div id="carrossel-personagem">
    <span class="divisa1"></span>
    <div class="carrossel-p" id="carrossel-p">
      <div class="slider">
        <div class="header-carrossel-personagens">
          <span class="topo-p"></span>
          <i class="icones-sprite-interna icone-personagem-pequeno"></i>
          <h1>Personagens</h1>
         
          <div class="slider-mask-wrap">
            <div class="slider-mask">
              <ul class="slider-target" accesskey="p" aria-label=" dos personagens Vila Sésamo">
                <?php if(isset($personagens)): ?>
                  <?php if(count($personagens) > 0 ): ?>
                    <?php foreach($personagens as $p): ?>
                      <li>
                        <div class="inner personagens <?php echo $p->getSlug()?>" aria-hidden="true" tabindex="-1">
                          <a href="/<?php echo $site->getSlug(); ?>/personagens/<?php echo $p->getSlug() ?>" title="" class="btn-<?php echo $p->getSlug() ?>" aria-hidden="true" tabindex="-1">
                            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/<?php echo $p->getSlug() ?>_personagem.png" alt="<?php echo $p->getSlug() ?>" />
                          </a>
                        </div>
                        <a class="nome" href="/<?php echo $site->getSlug(); ?>/personagens/<?php echo $p->getSlug() ?>"><?php echo $p->getTitle() ?></a>
                      </li>
                    <?php endforeach;?>
                  <?php endif; ?>
                <?php endif; ?>
                
              </ul>
              <div class="clearit"></div>
            </div>
          </div>
        </div>  
        <div class="slider-nav">
          <div class="arrow-left arrow personagem">
            <span title="Anterior" class="personagens icones-setas icone-car-set-br-esquerda"></span>
          </div>
          <div class="arrow-right arrow personagem">
            <span title="Próximo" class="personagens icones-setas icone-car-set-br-direita"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
