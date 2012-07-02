<?php if(isset($assets)): ?>
  <?php if(count($assets) > 0): ?>
<!--VIDEOS-->
<div id="videos-especial">

  <!--TOPO VIDEOS ESPECIAL-->
    <div class="topo-esq"></div>
    <div class="topo">
      <p><a href="/videos" title="Vídeos">vídeos</a></p>
    </div>
    <!--/TOPO VIDEOS ESPECIAL-->
  <!--CARROSSEL-->
  <div class="carrossel">
      <!--LISTA-CARROSSEL-->
      <div id="seta-esquerda"></div>
      <span class="sombra sombra-esquerda"></span>
      <div id="seta-direita"></div>
      <span class="sombra sombra-direita"></span>
      <ul>
        <?php foreach($assets as $k=>$d): ?>
          <?php if ($d->getAssetType() == 'Vídeo'): ?>
            <?php if ($d->AssetVideo->getYoutubeId() != ''): ?>
        <!--ITEM CARROSSEL--> 
        <li>
          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>"  />
            <span class="bottom"><?php echo $d->getTitle() ?></span>
            <p><?php echo $d->getDescription() ?></p>
          </a>
         </li>
         <!--/ITEM CARROSSEL-->
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <!--/LISTA-CARROSSEL-->
      
      <span class="picote baixo"></span>
      
    </div>
    <!--/CARROSSEL-->
    
    
</div>
<!--/VIDEOS-->
  <?php endif; ?>
<?php endif; ?>