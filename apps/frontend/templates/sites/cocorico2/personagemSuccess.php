 
<?php if(isset($displays["conteudos"][0])): ?>
  <?php $related_video = $displays['conteudos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
  <?php echo var_dump($displays['conteudos'][0]->Asset->getId());?>
  <?php echo "videos: ".count($related_video);?>
  <?php if(count($related_video) > 0): ?>   
    <?php echo $related_video[0]->AssetVideo->getYoutubeId()?>
  <?php endif; ?>
<?php endif; ?>
        


      <hr />
      
      
      <div class="span12">
     
        <?php if(isset($displays["conteudos"][0])): ?>
          
          <?php $se = $displays["conteudos"][0]->Asset->Sections; ?>
          
          <?php $related_image = $displays['conteudos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
          <?php $related_video = $displays['conteudos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
          
          <?php echo "img: ".count($related_image)."<br>video: ".count($related_video);?>
          
          <?php /*
          <?php if(count($related_image) > 0): ?> 
            <a class="box destaques span6" href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["conteudos"][0]->getTitle() ?>">
              <p class="bold">
                <?php echo $se[0]->getTitle() ?>
              </p>
              <img src="<?php echo $displays["conteudos"][0]->retriveImageUrlByImageUsage("default") ?>" alt="<?php echo $displays["conteudos"][0]->getTitle() ?>" name="<?php echo $displays["conteudos"][0]->getTitle() ?>" />
              <?php echo $displays["conteudos"][0]->getTitle() ?>
              <a href="/cocorico2/<?php echo $se[0]->getTitle() ?>" class="btn-ico-mais" title="Papel de Parede"><span> </span></a>
            </a>                  
          <?php elseif(count($related_video) > 0): ?> 
            <a class="box destaques span6" href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["conteudos"][0]->getTitle() ?>">
              <p class="bold">
                <?php echo $se[0]->getTitle() ?>
              </p>
              <img src="http://img.youtube.com/vi/ZPP0FeoxHoM/0.jpg" alt="asdfg" name="asdf" />
              <img src="http://img2.youtube.com/vi/<?php echo $related_video[0]->AssetVideo->getYoutubeId()?>/0.jpg" />
              <?php echo $displays["conteudos"][0]->getTitle() ?>
              <a href="/cocorico2/papel-de-parede" class="btn-ico-mais" title="Papel de Parede"><span></span></a>
            </a>
          <?php endif; ?>
        
        <?php endif; ?>
        
        <?php if(isset($displays["conteudos"][1])): ?>
          <?php $se = $displays["conteudos"][1]->Asset->Sections; ?>
        <a class="box destaques span6" style="float: right;" href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>" title="<?php echo $displays["conteudos"][1]->getTitle() ?>">
          <p class="bold">
            <?php echo $se[0]->getTitle() ?>
          </p>
          <img src="<?php echo $displays["conteudos"][1]->retriveImageUrlByImageUsage("default") ?>" alt="<?php echo $displays["conteudos"][1]->getTitle() ?>" name="<?php echo $displays["conteudos"][1]->getTitle() ?>" />
          <?php echo $displays["conteudos"][1]->getTitle() ?>
          
          <a href="/cocorico2/<?php echo $se[0]->getSlug() ?>" class="btn-ico-mais" title="Papel de Parede">
          <span> </span>
          </a>
          
         </a>
        <?php endif; ?>
           * 
           */?>
      </div>