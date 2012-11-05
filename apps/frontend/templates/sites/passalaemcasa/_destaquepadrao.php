            <?php if(isset($displays['destaque-principal'])):?>
            <?php if($displays['destaque-principal'][0]->Asset->AssetType->getSlug() == "content"): ?>
              <a class="titulos"><?php echo $displays['destaque-principal'][0]->getTitle() ?></a>
             
              <p><?php echo html_entity_decode($displays['destaque-principal'][0]->Asset->AssetContent->render()) ?></p>
            <?php endif; ?>  
          <?php endif; ?> 
          <a href="<?php echo $displays['destaque-principal'][0]->Asset->retriveUrl()?>">+ Leia mais</a>