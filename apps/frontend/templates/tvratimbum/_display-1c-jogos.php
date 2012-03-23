    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <div id="box-jogos">
          <div class="topo-esq"></div>
          <div class="topo">
            <a class="enunciado" href="/jogos">Jogos</a>
            <a class="veja" href="/jogos"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="tudo">
            <a href="<?php echo $displays[0]->retriveUrl() ?>"><img src="<?php echo $displays[0]->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $displays[0]->getTitle() ?>" /></a>
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="<?php echo $displays[0]->retriveUrl() ?>">Jogar agora</a>
              <span class="caudaBarra"></span>
            </div>
            <div class="box-carrocel">
              <span class="picote"></span>
              <div class="carrossel">
                <ul>
                <?php foreach($displays as $k=>$d): ?>
                  <li>
                    <div class="boxPersonagens-tip">
                      <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" />
                        <span><?php echo $d->getTitle() ?></span>
                      </a>
                    </div>
                  </li>
                <?php endforeach; ?>
                </ul>
              </div>
              <hr />
              <span class="picote"></span>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>