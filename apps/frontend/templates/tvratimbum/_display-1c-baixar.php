    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <?php $d = $displays[0]; ?>
        <div id="box-baixar">
          <div class="topo-esq"></div>
          <div class="topo">
            <a class="enunciado" href="/baixar">Baixar</a>
            <a class="veja" href="/baixar"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="tudo">
            <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" /></a>
            <div class="box-ba">
              <a href="<?php echo $d->retriveUrl() ?>"><span><?php echo $d->getTitle() ?></span> <?php echo $d->getDescription() ?></a>
            </div>
            <span class="picote"></span>
            <div class="box-btn">
              <div class="btn-cinza"> <!-- exemplo com duas linhas -->
                <a class="cellular" href="/baixar/toques"><span>Toques para celular</span></a>
              </div>
              <div class="btn-cinza"> <!-- exemplo com uma linha -->
                <a class="papeis" href="/baixar/papeis-de-parede"><span>Pap&eacute;is de parede</span></a>
              </div>
              <div class="btn-cinza"> <!-- exemplo com uma linha -->
                <a class="carinhas" href="/baixar/carinhas"><span>Carinhas</span></a>
              </div>
              <div class="btn-cinza"> <!-- exemplo com uma linha -->
                <a class="cartoes" href="/baixar/cartoes"><span>Cart&otilde;es virtuais</span></a>
              </div>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
