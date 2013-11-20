<section class="bgtotal">
  <span class="divisa tipo2"></span>
  <div id="carrossel-personagem">
    <span class="divisa1"></span>
    <div class="carrossel-p" id="carrossel-p">
      <div class="slider">
        <div class="header-carrossel-personagens">
          <span class="topo-p"></span>
          <i class="icones-sprite-interna icone-personagem-pequeno"></i>
          <h3>Personagens</h3>
         
          <div class="slider-mask-wrap">
            <div class="slider-mask">
              <ul class="slider-target">
                <?php if(isset($personagens)): ?>
                  <?php if(count($personagens) > 0 ): ?>
                    <?php foreach($personagens as $p): ?>
                      <li>
                        <div class="inner personagens <?php echo $p->getSlug()?>">
                          <a href="/<?php echo $site->getSlug(); ?>/personagens/<?php echo $p->getSlug() ?>" title="<?php echo $p->getTitle() ?>" class="btn-<?php echo $p->getSlug() ?>">
                            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/<?php echo $p->getSlug() ?>_personagem.png" alt="" />
                          </a>
                        </div>
                        <a class="nome" href="/<?php echo $site->getSlug(); ?>/personagens/<?php echo $p->getSlug() ?>" title="Bel"><?php echo $p->getTitle() ?></a>
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
            <span title="Back" class="personagens icones-setas icone-car-set-br-esquerda"></span>
          </div>
          <div class="arrow-right arrow personagem">
            <span title="Next" class="personagens icones-setas icone-car-set-br-direita"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
