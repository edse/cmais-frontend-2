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
        <?php foreach($section->subsections() as $k=>$s):
                if(count($s->getAssets())<=0 && $s->id!=2287 && $s->id!=2296): ?>
                <div class="accordion-group">
                <?php echo $s->getTitle(); ?>
                </div>
        <?php   endif;
            endforeach;?>
      </div>
      <!--descricao vagas-->    
    </div>
    <!--/ESQUERDA-->
  </div>
  <!--/colunas-->
</div>  
<!--/CONTAINER-->