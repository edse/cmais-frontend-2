<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<!--CONTAINER-->
<div class="container licitacoes">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span12">
    	
      <h1><?php echo $section->getTitle(); ?></h1>
			<p>Informe o número do CPF e o número do PIS para fazer o download do Informe de Rendimentos Pessoa Física</p>      
      
      <div class="msg_result" style="display: none;"></div>
      <div class="span6" style="margin:0">
        <ul>
		          <form id="form1" class="realizar-marcador">
		            <div class="control-group span6" style="margin:0;">
		              <label class="control-label" for="fpa_cpf">CPF</label>
		              <div class="controls">
		                <input type="text" id="fpa_cpf" name="fpa_cpf" value="" maxlength="11">
		                <p class="help-block">(999.999.999-99)</p>
		              </div>
		            </div>
		            <div class="control-group span6">
		              <label class="control-label" for="fpa_data">PIS</label>
		              <div class="controls">
		                <input type="text" id="fpa_data" name="fpa_data" value="" maxlength="10">
		                <p class="help-block"> (999.999.999.999)</p>
		              </div>
		            </div>
		            <div class="row-fluid">
		              <input type="submit" class="btn btn-primary pull-right" id="download-arquivo" value="VERIFICAR">
		            </div>  
		        	</form>
      	</ul> 
      </div>
    </div>
    <!-- /ESQUERDA-->
  </div>
  <!--colunas-->
</div>
<!--CONTAINER-->