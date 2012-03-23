    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <?php $d = $displays[0]; ?>
        <div id="box-atividades">
          <div class="topo-esq"></div>
          <div class="topo">
            <a class="enunciado" href="/atividades">Atividades</a>
            <a class="veja" href="/atividades"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="tudo">
            <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>" /></a>
            <div class="box-ba">
              <a href="<?php echo $d->retriveUrl() ?>"><span><?php echo $d->getTitle() ?></span> <?php echo $d->getDescription() ?></a>
            </div>
            <span class="picote"></span>
            <div class="box-btn">
              <div class="btn-cinza"> <!-- exemplo com duas linhas -->
                <a class="experiencias" href="/atividades/experiencias"><span>Experi&ecirc;ncias para todos</span></a>
              </div>
              <div class="btn-cinza"> <!-- exemplo com uma linha -->
                <a class="receitas" href="/atividades/receitas"><span>Receitinhas</span></a>
              </div>
              <div class="btn-cinza"> <!-- exemplo com uma linha -->
                <a class="para-colorir" href="/atividades/para-colorir"><span>Para colorir</span></a>
              </div>
              <div class="btn-cinza"> <!-- exemplo com uma linha -->
                <a class="artes" href="/atividades/artes"><span>Artes</span></a>
              </div>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>