            <?php if(isset($displays['destaque-principal'])):?>
            <?php if($displays['destaque-principal'][0]->Asset->AssetType->getSlug() == "content"): ?>
              <h3><?php echo $displays['destaque-principal'][0]->getTitle() ?></h3>
              <p><?php echo $displays['destaque-principal'][0]->getDescription() ?><p>
              <p><?php echo html_entity_decode($displays['destaque-principal'][0]->Asset->AssetContent->render()) ?></p>
            <?php endif; ?>  
          <?php endif; ?> 
          