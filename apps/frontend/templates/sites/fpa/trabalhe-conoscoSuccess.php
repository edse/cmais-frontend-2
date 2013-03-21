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
          
          if(count($sub_assets) > 0): 
            if($sub->getSlug() == "vagas-de-estagio"):
              echo "vagas de estagio<br>";
            elseif($sub->getSlug() == "resultados-processos"):
              echo "resultados<br>";
            else:
              echo "processo seletivo<br>";
            endif;
          else:
            if($sub->getSlug() == "processo-seletivo"):
              echo "nao há vagas";
            endif;    
          endif;
        endforeach;  
      endif;
      ?>   
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