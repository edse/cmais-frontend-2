<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>
<!-- /HEADER -->


<h1><?php echo $section->getTitle() ?></h1>

<!--destaque-principal-->
<?php if(isset($displays['destaque-principal'])): ?>
  <?php if(count($displays['destaque-principal']) > 0): ?>
    <?php echo $displays['destaque-principal'][0]->getDescription() ?>
    <?php echo $displays['destaque-principal'][0]->getDescription() ?>
  <?php endif; ?>
<?php endif; ?>
<!--/destaque-principal-->