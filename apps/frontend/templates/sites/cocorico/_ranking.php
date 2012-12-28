      <?php
        $currentAsset_likes = @file_get_contents('cocorico/ranking/'.$section->getSlug().'/'.$asset->getId());
        $totalAssets_likes = @file_get_contents('cocorico/ranking/'.$section->getSlug().'/total');
        $currentAsset_stars = 0;
        
        if ($totalAssets_likes > 0)
          $like_fixed_value = $totalAssets_likes / 5;
        
        if ($currentAsset_likes > 0)
          $currentAsset_stars = round($currentAsset_likes / $like_fixed_value);
      ?>
      <?php if ($currentAsset_stars > 0): ?>
      <ul class="likes">
        <?php for($i=0; $i < 5; $i++): ?>
          <?php if ($i < $currentAsset_stars): ?>
        <li class="ativo"></li>
          <?php else: ?>
        <li></li>
          <?php endif; ?>
        <?php endfor; ?>
      </ul>
      <?php else: ?>
      <ul class="likes">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <?php endif; ?>
