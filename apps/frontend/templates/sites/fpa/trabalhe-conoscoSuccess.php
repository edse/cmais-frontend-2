<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container quem-somos">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span7">
      <h1><?php echo $section->getTitle();?></h1>
      <?php echo html_entity_decode($displays['destaque-principal'][0]->Asset->AssetContent->render()) ?>
      <!--descricao vagas-->
      <div class="accordion trabalhe-conosco" id="accordion2">
        <?php foreach($section->subsections() as $k=>$s):?>
          <?php echo $s->getAssets(); ?>
        <?php endforeach;?>
      </div>
      <!--descricao vagas-->    
    </div>
    <!--/ESQUERDA-->
  </div>
  <!--/colunas-->
</div>  
<!--/CONTAINER-->