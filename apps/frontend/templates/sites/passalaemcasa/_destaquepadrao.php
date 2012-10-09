            <?php if(isset($displays['destaque-padrao-1'])):?>
            <?php if($displays['destaque-padrao-1'][0]->Asset->AssetType->getSlug() == "content"): ?>
              <h3><?php echo $displays['destaque-padrao-1'][0]->getTitle() ?></h3>
              <p><?php echo $displays['destaque-padrao-1'][0]->getDescription() ?><p>
              <p><?php echo html_entity_decode($displays['destaque-padrao-1'][0]->Asset->AssetContent->render()) ?></p>
            <?php endif; ?>  
          <?php endif; ?> 
          