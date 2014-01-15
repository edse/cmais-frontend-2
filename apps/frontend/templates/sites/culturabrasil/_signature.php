 <div class="row-fluid signature">
    <small><?php echo $asset->AssetContent->getAuthor() ?></small>
    <small class="pull-right"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></small>  
    <div class="borda-pontilhada"></div>
  </div>
  <div class="row-fluid cabecalho">
    <div class="share content">
        <div class="google">
          <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <div class="twt conteudo">
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="false" data-via="tvcultura" data-related="tvcultura">Tweet</a>
        </div>
        <div class="fb" style="width: 100px;">
          <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false" width="160"></fb:like>
        </div>
      </div>
  </div>