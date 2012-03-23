    <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
        <?php $d = $displays[0]; ?>
        <div id="box-video">
          <div class="topo-esq"></div>
          <div class="topo">
            <a class="enunciado" href="">V&iacute;deos</a>
            <a class="veja" href="/videos"><span>veja</span><span class="icoCross"></span></a>
          </div>
          <div class="tudo">
            <div id="video">
              <iframe title="<?php echo $d->getTitle() ?>" width="310" height="240" src="http://www.youtube.com/embed/<?php echo $d->Asset->AssetVideo->getYoutubeId(); ?>?wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
            </div>
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
