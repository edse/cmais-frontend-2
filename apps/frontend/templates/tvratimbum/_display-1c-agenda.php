    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <?php $d = $displays[0]; ?>
        <div id="box-agenda">
          <div class="topo-esq"></div>
          <div class="topo">
            <a class="enunciado" href="/agenda">Agenda</a>
            <a class="veja" href="/agenda"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="tudo">
            <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" /></a>
            <div class="box-chamada">
              <a class="tit" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
              <a class="txt" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getDescription() ?></a>
            </div>
            <?php if($d->Asset->AssetEvent->getDirections() != ""): ?>
            <div class="box-info">
              <span class="ico-atencao"></span>
              <?php /* <p class="local"><?php echo $d->Asset->AssetContent->getDirections() ?></p> */ ?>
              <p class="endereco"><?php echo $d->Asset->AssetEvent->getDirections() ?></p>
            </div>
            <hr />
            <span class="picote"></span>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
