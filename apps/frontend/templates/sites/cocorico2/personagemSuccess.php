 
<?php if(isset($displays["conteudos"][0])): ?>
  <?php $related_video = $displays['conteudos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
  <?php echo var_dump($displays['conteudos'][0]->Asset->getId());?>
  <?php echo "videos: ".count($related_video);?>
  <?php if(count($related_video) > 0): ?>   
    <?php echo $related_video[0]->AssetVideo->getYoutubeId()?>
  <?php endif; ?>
<?php endif; ?>
        
