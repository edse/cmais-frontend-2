<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<!--CONTAINER-->  
<div id="linha-do-tempo" class="container">
  <?php include_partial_from_folder('sites/fpa', 'global/menu_decadas', array('section'=>$section,'site'=>$site, 'uri'=>$uri)) ?>
  <?php foreach($section->Assets as $a):?>
    <h2><?php echo $a->getTitle();?></h2>
    <p><?php echo html_entity_decode($a->AssetContent->render()) ?></p>
  <?php endforeach;?>
</div>
<!--/CONTAINER-->
<?php include_partial_from_folder('blocks', 'global/footer') ?>
