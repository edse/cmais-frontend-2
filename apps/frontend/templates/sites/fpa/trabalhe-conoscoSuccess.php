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
      if(count($section->subsections()) > 0):
        foreach($section->subsections() as $sub):
          
          $sub_assets = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset sa')
            ->where('sa.asset_id = a.id')
            ->andWhere('sa.section_id = ?', (int)$sub->id)
            ->andWhere('a.is_active = ?', 1) 
            ->andWhere('a.site_id = ?', (int)$site->id)
            ->execute();
          if($sub->getSlug() == "vagas-de-estagio"):
            ?>
            <!-- Estagio -->
            <div class="accordion-group">  
              <div class="linha"></div>
              <div class="accordion-heading trabalhe-conosco">
                <a class="btn-cat accordion-toggle"  data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $sub->id ?>" title="<?php  if(count($sub_assets) < 2){ echo count($sub_assets) . " vaga";}else{ echo count($sub_assets) . " vagas";} ?>">
                  <i class="icon-chevron-right"></i><?php echo " ".$sub->getTitle(); ?></a>
              </div>
              <div id="<?php echo $sub->id ?>" class="accordion-body collapse" style="clear:both;">
                <?php echo html_entity_decode($displays['destaque-estagio'][0]->Asset->AssetContent->render());?>
                <?php
                foreach($sub_assets as $sa):;
                  if($sa->asset_type_id==8):
                ?>
                  <a class="btn-estagio" href="http://midia.cmais.com.br/assets/file/original/<?php echo $sa->AssetFile->getFile(); ?>" title="<?php echo $sa->AssetFile->getAsset();?>" target="_blank">
                    <i class="icon-file icon-blue"></i> <?php echo $sa->AssetFile->getAsset(); ?>
                  </a>
                <?php
                  endif;
                endforeach;
                ?>
                <div class="span12" style="margin:0 0 10px 0">
                  <a href="/cadastrodeestagiario" class="btn btn-primary large-button pull-right realizar" title="Cadastro para estágio">Cadastro para estágio</a>
                </div>
              </div>
            </div>
            <!-- /Estagio -->
           <?php
          endif; 
          if(count($sub_assets) > 0): 
            if($sub->getSlug() == "resultados-processos"):
            ?>
            <!-- Resultado -->
            <div class="accordion-group">
              <div class="linha"></div>
              <div class="accordion-heading trabalhe-conosco">
                <a class="btn-cat accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $sub->id ?>"  title="<?php  if(count($sub_assets) < 2){ echo count($sub_assets) . " arquivo";}else{ echo count($sub_assets) . " arquivos";} ?>">
                  <i class="icon-chevron-right"></i><?php echo " ".$sub->getTitle(); ?></a>
              </div>
                <div id="<?php echo $sub->id ?>" class="accordion-body collapse" style="clear:both;">
                <?php
                foreach($sub_assets as $sa):
                  if($sa->asset_type_id==8):
                ?>
                  <a class="btn-resultado" href="http://midia.cmais.com.br/assets/file/original/<?php echo $sa->AssetFile->getFile(); ?>" title="<?php echo $sa->AssetFile->getAsset();?>" target="_blank">
                    <i class="icon-align-left icon-white"></i> <?php echo $sa->AssetFile->getAsset(); ?>
                  </a>
                <?php  
                  endif;
                endforeach;  
                ?>
                </div>
              </div> 
            </div>
            <!-- /Resultado -->
            <?php
            elseif($sub->getSlug() != "vagas-de-estagio"):
            ?>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="btn-cat accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $sub->id ?>" title="<?php  if(count($sub_assets) < 2){ echo count($sub_assets) . " processo";}else{ echo count($sub_assets) . " processos";} ?>">
                  <i class="icon-chevron-right"></i><?php echo " ".$sub->getTitle(); ?>
                </a>
                <hr class="tipo"/>
              </div>
            <!--vagas relacionadas-->
            <div id="<?php echo $sub->id ?>" class="accordion-body collapse on">
              <div class="accordion" id="vagas-relacionadas">
                <?php foreach($sub_assets as $sa):?>
                <!--emprego aberto-->
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a id="<?php echo $sa->getSlug() ?>" class="accordion-toggle vaga-aberta" data-toggle="collapse" data-parent="#vagas-relacionadas" href="#<?php echo $sa->id ?>">
                      <i class="ico-trabalho"></i><?php echo $sa->getTitle()." "; ?><span class="badge vaga"><?php echo $sa->AssetContent->getHeadline(); ?></span>
                    </a>
                  </div>
                  <div id="<?php echo $sa->id ?>" class="accordion-body collapse vagas-exi">
                    <div class="linha-dashed"></div>
                    <div class="accordion-inner">
                    <!--descriçao vaga-->
                    <?php echo utf8_encode(html_entity_decode($sa->AssetContent->render())) ?>
                    <!--/descriçao vaga-->
                    </div>
                    <div class="linha-dashed"></div>
                  </div>
                </div>
                <!--/emprego aberto-->
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- /Vagas de emprego -->      
          <?php
            endif;
          else:
            if($sub->getSlug() == "processo-seletivo"):
            ?>
            <!-- Sem Vagas -->
            <div class="accordion-group">
              <span class="tipo-de-emprego" style="margin: 0 auto;width: 191px;display: block;">
                Não há vagas no momento.
              </span>
            </div>
            <!-- /Sem Vagas -->
              <?php
            endif;    
          endif;
        endforeach;  
      endif;
      ?>
      </div>   
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