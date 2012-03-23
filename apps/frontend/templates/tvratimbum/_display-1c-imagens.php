    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <?php $d = $displays[0]; ?>
        <div id="box-imagens">
          <div class="topo-esq"></div>
          <div class="topo">
            <a class="enunciado" href="/imagens">Imagens</a>
            <a class="veja" href="/imagens"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="tudo">
            <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" /></a>
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="<?php echo $d->retriveUrl() ?>">Navegar pela galeria</a>
              <span class="caudaBarra"></span>
            </div>
            <div class="box-carrocel">    
              <span class="picote"></span>
              <div class="carrossel">
                <ul>
                <?php foreach($displays as $k=>$d): ?>
                  <li>
                    <div class="boxPersonagens-tip">
                      <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" /><span><?php echo $d->getTitle() ?></span></a>
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
