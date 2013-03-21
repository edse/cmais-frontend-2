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
          <div class="accordion-heading">
            <div class="accordion-heading trabalhe-conosco">
              <a class="btn-cat accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#emprego<?php echo $k; ?>"><i class="icon-chevron-right"></i><?php echo $s->getTitle(); ?></a>
            </div>
            <hr class="tipo"/>
          </div>
          
            <!--vagas relacionadas-->
            <div id="emprego<?php echo $k; ?>" class="accordion-body collapse in">
              <div class="accordion" id="vagas-relacionadas">
              <?php foreach($s->getAssets() as $aj):?> 
              
              
              <!--emprego aberto-->
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a id="vaga-aberta<?php echo $k; ?>" class="accordion-toggle vaga-aberta" data-toggle="collapse" data-parent="#vagas-relacionadas" href="#vaga<?php echo $k; ?>">
                    <i class="ico-trabalho"></i><?php echo $aj->getTitle(); ?><span class="badge vaga"><?php $aj->getHeadline(); ?></span>
                  </a>
                </div>
                <hr class="vaga"/>
                <div id="vaga<?php echo $k; ?>" class="accordion-body collapse vagas-exi">
                  <div class="accordion-inner">
                    <!--descriçao vaga-->
                    <?php echo html_entity_decode($aj->AssetContent->render()); ?>
                    <!--/descriçao vaga-->
                    <hr class="vaga desc"/>  
                  </div>
                </div>
              </div>
              <!--/emprego aberto-->
              <?php endforeach;?> 
            </div>
          </div>
          <!--vagas relacionadas-->
        </div>
           <!-- /Vagas de emprego -->     
        <?php 
          elseif($s->id==2287): 
        ?>
          <!-- Estagio -->
          <div class="accordion-group span12">  
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
            <div class="span12">
              <a href="/cadastrodeestagiario" class="btn btn-primary large-button pull-right realizar" title="Cadastro para estágio">Cadastro para estágio</a>
            </div>
          </div>
          <!-- /Estagio -->
        <?php 
          elseif($s->id==2296):
        ?>
          <!-- Resultado -->
          <div class="accordion-group span12">
            <div class="linha"></div>
            <div class="accordion-heading trabalhe-conosco">
              <a class="btn-cat" title=""><i class="icon-chevron-down"></i><?php echo $s->getTitle(); ?></a>
            </div>
            <div class="span12" style="margin-top:15px;">
            <?php
            $related = $s->getAssets();
            foreach($related as $k=>$d):;
              if($d->asset_type_id==8):
            ?>
              <a class="btn-resultado" href="http://midia.cmais.com.br/assets/file/original/<?php echo $related[$k]->AssetFile->getFile(); ?>" title="<?php echo $related[$k]->AssetFile->getAsset();?>" target="_blank">
                <i class="icon-align-left icon-white"></i> <?php echo $related[$k]->AssetFile->getAsset(); ?>
              </a>
            <?php     
              endif;
            endforeach;  
            ?>
            </div> 
          </div>
          <!-- /Resultado --> 
        <?php   
          endif;
         endforeach;
        ?>
      </div>
      <!--descricao vagas-->    
    </div>
    <!--/ESQUERDA-->
    <!--DIREITA-->
    <div class="col-direita span4">
      <!--CONFIRA-->  
      <a href="http://www2.tvcultura.com.br/selecao/vagas/FPAREPRSE001.pdf" class="trabalhe btn btn-primary" target="_blank" title="Confira aqui nossas vagas e prazos.">
        <p>Regulamento Interno de Processo Seletivo</p>
        <p>Leia antes da Inscrição</p>
      </a>
      <!--/CONFIRA-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--/colunas-->
</div>  
<!--/CONTAINER-->