 
<?php if(isset($displays["conteudos"][0])): ?>
  <?php $related_video = $displays['conteudos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
  <?php if(count($related_video) > 0): ?> 
      <?php echo $related_video[0]->AssetVideo->getYoutubeId()?>
  <?php endif; ?>
<?php endif; ?>
        
