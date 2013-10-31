<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>
<!-- /HEADER -->

<!-- barra do titulo da seção -->
<div>
  <span><?php echo $section->getTitle() ?></span>
</div>
<!--/barra do titulo da seção -->
<?php
/*
 * programado

<!-- destaques -->
<div>
  <?php if(isset($displays['historia'])): ?>
    <?php if(count($displays['historia']) > 0): ?>
  <div>
      <?php echo html_entity_decode($displays['historia']->Asset->AssetContent->render()) ?>
  </div>

      <?php if(isset($displays['programacao-na-tv'])): ?>
        <?php if(count($displays['programacao-na-tv']) > 0): ?>
  <div>
    <a href="<?php echo $displays['programacao-na-tv'][0]->retriveUrl() ?>" title="<?php echo $displays['programacao-na-tv'][0]->getTitle() ?>">
      <img src="<?php echo $displays['programacao-na-tv'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['programacao-na-tv'][0]->getTitle() ?>" />
      <span><?php echo $displays['programacao-na-tv'][0]->getTitle() ?></span>
      <span><?php echo $displays['programacao-na-tv'][0]->getHtml() ?></span>
    </a>
  </div>
  
  <div>
    <a href="<?php echo $displays['programacao-na-tv'][1]->retriveUrl() ?>" title="<?php echo $displays['programacao-na-tv'][1]->getTitle() ?>">
      <img src="<?php echo $displays['programacao-na-tv'][1]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['programacao-na-tv'][1]->getTitle() ?>" />
      <span><?php echo $displays['programacao-na-tv'][1]->getTitle() ?></span>
      <span><?php echo $displays['programacao-na-tv'][1]->getHtml() ?></span>
    </a>
  </div>          
        <?php endif; ?>  
      <?php endif; ?>  

    <?php endif; ?>  
  <?php endif; ?>  
</div>
<!--/destaques-->

 */
?>



