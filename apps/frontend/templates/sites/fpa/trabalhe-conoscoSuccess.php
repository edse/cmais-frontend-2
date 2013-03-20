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
        <?php 
        foreach($section->subsections() as $k=>$s):
          if(count($s->getAssets())<=0 && $s->id!=2287 && $s->id!=2296): 
        ?>
          <!-- Sem Vagas -->
          <div class="accordion-group">
            <span class="tipo-de-emprego" <?php if($k>0) echo "style=display:none;"?>>
              Não há vagas no momento.
            </span>
          </div>
          <!-- /Sem Vagas -->
        <?php
          elseif($s->id!=2287 && $s->id!=2296):
        ?>  
          <!-- Vagas de emprego -->
          <div class="accordion-group">
          <?php echo $s->getTitle(); ?>
          </div>
          <!-- /Vagas de emprego -->
        <?php 
          elseif($s->id==2287): 
        ?>
          <!-- Estagio -->
          <div class="accordion-group">  
            <div class="linha"></div>
            <div class="accordion-heading trabalhe-conosco">
              <a class="btn-cat" title=""><i class="icon-chevron-down"></i><?php echo $s->getTitle(); ?></a>
            </div>
            <?php
            $related = $s->getAssets();
            foreach($related as $k=>$d):;
              if($d->asset_type_id==8):
            ?>
              <a class="btn-estagio" href="http://midia.cmais.com.br/assets/file/original/<?php echo $related[$k]->AssetFile->getFile(); ?>" title="<?php echo $related[$k]->AssetFile->getAsset();?>" target="_blank">
                <i class="icon-file icon-blue"></i> <?php echo $related[$k]->AssetFile->getAsset(); ?>
              </a>
            <?php     
              endif;
            endforeach;
            ?>
            <div>
              <a href="/cadastrodeestagiario" class="btn btn-primary large-button pull-right realizar" title="Cadastro para estágio">Cadastro para estágio</a>
            </div>
          </div>
          <!-- /Estagio -->
        <?php 
          elseif($s->id==2296):
        ?>
          <div class="accordion-group">
          <?php echo $s->getTitle(); ?>
          </div> 
        <?php   
          endif;
         endforeach;
        ?>
      </div>
      <!--descricao vagas-->    
    </div>
    <!--/ESQUERDA-->
  </div>
  <!--/colunas-->
</div>  
<!--/CONTAINER-->