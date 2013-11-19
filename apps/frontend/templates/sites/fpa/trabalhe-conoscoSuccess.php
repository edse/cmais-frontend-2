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
      	<div id="verificando_vagas"><p align="center">Carregando Vagas...</p></div>
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
						
          if($sub->getSlug() == "vagas-de-estagio"):?>
            <!-- Estagio -->
            <div class="accordion-group">  
              <div class="linha"></div>
              <div class="accordion-heading trabalhe-conosco">
                <a class="btn-cat accordion-toggle  tipo-de-emprego"  data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $sub->id ?>" title="<?php  if(count($sub_assets) < 2){ echo count($sub_assets) . " vaga";}else{ echo count($sub_assets) . " vagas";} ?>">
                  <i class="icon-chevron-right"></i><?php echo " ".$sub->getTitle(); ?></a>
              </div>
              <div id="<?php echo $sub->id ?>" class="accordion-body collapse" style="overflow: hidden; clear: both;">
                <br>
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
          <?php endif; ?> 
          
          <?php
          if(count($sub_assets) > 0):
            if($sub->getSlug() == "resultados-processos"):?>
            <!-- Resultado -->
            <div class="accordion-group">
              <div class="linha"></div>
              <div class="accordion-heading trabalhe-conosco">
                <a class="btn-cat accordion-toggle  tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $sub->id ?>"  title="<?php  if(count($sub_assets) < 2){ echo count($sub_assets) . " arquivo";}else{ echo count($sub_assets) . " arquivos";} ?>">
                  <i class="icon-chevron-right"></i><?php echo " ".$sub->getTitle(); ?></a>
              </div>
              <div id="<?php echo $sub->id ?>" class="accordion-body collapse" style="overflow: hidden; clear: both;">
              <br>
				     	
				     	<?php foreach($sub_assets as $sa):?>
				      	<?php	if($sa->asset_type_id==8): ?>
				                <a class="btn-resultado" href="http://midia.cmais.com.br/assets/file/original/<?php echo $sa->AssetFile->getFile(); ?>" title="<?php echo $sa->AssetFile->getAsset();?>" target="_blank">
				                  <i class="icon-align-left icon-white"></i> <?php echo $sa->AssetFile->getAsset(); ?>
				                </a>
				        <?php endif; ?>
							<?php endforeach;?>
					
              </div>
            </div>
            <!-- /Resultado -->
         	
          
          <?php
            endif;
          else:
            if($sub->getSlug() == "processo-seletivo"):
            ?>
            <!-- Sem Vagas >
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
      
      <script type="text/javascript">
				$.ajax({
	        type: "GET",
	     	  dataType: "jsonp",
	        url: "http://app.cmais.com.br/actions/trabalhe-conosco/consulta_vagas.php",
	        error: function(retorno){
	          //alert("Erro na seleção das vagas");
	        }, 
	        success: function(json) {
	        	var conteudo = "";
	              //conteudo = '<option value="' + dados.vaga.codigo + '" data-departamento="' + dados.vaga.departamento + '">' + dados.vaga.descricao + '</option>';
		 					if(json.data != "" && json.data != null){
		             conteudo =  ' <div class="accordion-group"> <div class="accordion-heading"> <a class="btn-cat accordion-toggle tipo-de-emprego" data-toggle="collapse" data-parent="#accordion2" href="#processos_seletivos" title="Processos Abertos">';
		             conteudo += ' <i class="icon-chevron-right"></i>PROCESSO SELETIVO</a><hr class="tipo"/></div><!--vagas relacionadas-->';
		             conteudo += ' <div id="processos_seletivos" class="accordion-body collapse on" style="overflow: hidden; clear: both;">';
		             conteudo += ' <div class="accordion" id="vagas-relacionadas">';
		             																								    
								 $(json.data).each(function(index, dados){
		                conteudo += ' <!--emprego aberto--> <div class="accordion-group"> <div class="accordion-heading"> <a id="codigo_'	+ dados.vaga.codigo + '" class="accordion-toggle vaga-aberta" data-toggle="collapse" data-parent="#vagas-relacionadas" href="#'	+ dados.vaga.codigo + '"> ';
		                conteudo += ' <i class="ico-trabalho"></i>'	+ dados.vaga.descricao + '<!--span class="badge vaga"></span--> </a> </div> <div id="'	+ dados.vaga.codigo + '" class="accordion-body collapse vagas-exi" style="overflow: hidden; clear: both;">';
		                conteudo += ' <div class="linha-dashed"></div> <div class="accordion-inner"> <!--descriçao vaga-->'	+ dados.vaga.descricao_processo + '<!--/descriçao vaga--> <a href="/fpa/realizar-cadastro?vg='+dados.vaga.codigo+'" class="btn btn-primary large-button pull-right realizar"'; 
		                conteudo += ' title="Realizar Inscrição">Realizar Inscrição</a></div><div class="linha-dashed"></div></div> </div> <!--/emprego aberto-->';
		       			 });      
		       			    
		             conteudo += ' </div></div></div> <!-- /Vagas de emprego -->';
		             
		         	}else{
		         		 conteudo  = ' <!-- Sem Vagas --> <div class="accordion-group"> <span class="tipo-de-emprego" style="margin: 0 auto;width: 191px;display: block;"> Não há vagas no momento. </span> </div> <!-- /Sem Vagas -->';
		         	}
		         $('#verificando_vagas').hide();
        		 $('#accordion2').prepend(conteudo);
	       	}
	   		});
	   		
       </script>
      
      </div>   
    </div>
    <!--/ESQUERDA-->
    <!--DIREITA-->
    <div class="col-direita span4">
      <!--CONFIRA-->
       <?php  if(isset($displays['destaque-regulamento-interno'])): ?>
       	<?php foreach ($displays['destaque-regulamento-interno'] as $d):?>
      	<a href="http://midia.cmais.com.br/assets/file/original/<?php echo $d->Asset->AssetFile->getFile();?>" class="trabalhe btn btn-primary" target="_blank" title="Confira aqui nossas vagas e prazos.">
	        <p>Regulamento Interno de Processo Seletivo</p>
	        <p>Leia antes da Inscrição</p>
	      </a>
	      <?php endforeach; ?>
	      <?php endif; ?>
      <!--/CONFIRA-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--/colunas-->
</div>  
<!--/CONTAINER-->