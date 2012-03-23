    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <?php $d = $displays[0]; ?>
        <div id="box-especial">
          <div class="topo-esq"></div>
          <div class="topo">
            <a class="enunciado" href="/especial">Especial</a>
            <a class="veja" href="/especial"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="tudo">
            <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>" /></a>
            <div class="box-chamada">
              <a class="tit" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
              <a class="txt" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getDescription() ?></a>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>