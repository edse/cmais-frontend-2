
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<!--CONTAINER-->
<div class="container licitacoes">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span12">
    	
      <h1><?php echo $section->getTitle(); ?></h1>
			<p>Informe o número do CPF e o número do PIS para fazer o download do Informe de Rendimentos Pessoa Física:</p>      
      <div id="msg_result" style="border-radius: 5px; padding-top: 5px; padding-bottom: 10px;font-size: 14px; text-indent: 20px;margin-bottom:20px; display: none;height:15px"></div>
      <div class="span9" style="margin:0">
        <ul>
		          <form id="form-consulta" class="realizar-marcador" method="POST">
		            <div class="control-group span4" style="margin:0;">
		              <label class="control-label" for="fpa_cpf">CPF</label>
		              <div class="controls">
		                <input type="text" id="fpa_cpf" name="fpa_cpf" value="" maxlength="11">
		                <p class="help-block">(Digite somente os números)</p>
		              </div>
		            </div>


		            <div class="control-group span4">
		              <label class="control-label" for="fpa_data">PIS</label>
		              <div class="controls">
		                <input type="text" id="fpa_pis" name="fpa_pis" value="" maxlength="15">
		                <p class="help-block"> (Digite somente os números)</p>
		              </div>
		            </div>

		            <div class="control-group span2">
		            	<label class="control-label" for="fpa_consulta"> <br></label>
		              <div class="controls">
										<input type="submit" class="btn btn-primary pull-right" id="download-arquivo" value="CONSULTAR">
		              </div>
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

<script src="http://cmais.com.br/portal/js/jquery.maskedinput-1.3.min.js"></script>  
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>

<script>

$(document).ready(function() {
  
  function Valida_Informe_FPA(){
    var cpf = $("#fpa_cpf").val();
    var pis = $("#fpa_pis").val();
		
    $.ajax({
	    type: "POST",
	    dataType: "jsonp",
	    data: $("#form-consulta").serialize(),
	    url: "http://app.cmais.com.br/actions/informe-de-rendimentos/consulta_informe.php",
	    error: function(retorno){
	        alert("Erro na consulta do informe. Por favor, tente mais tarde!");
	    }, 
	    success: function(json) {
				if(json.data != "0"){
					//self.location = json.data;
					//$("#link_download").attr("href", json.data);
					$("#msg_result").removeClass("btn-danger");
					$("#msg_result").addClass("btn-success");			
					$("#msg_result").html('<a href="'+json.data+'" id="link_download" download style="background:none; color: white; margin: 0px; padding: 0px">CLIQUE AQUI para baixar o Informe de Rendimentos</a>');
					$("#msg_result").show();
				}else{
					$("#msg_result").removeClass("btn-success");
					$("#msg_result").addClass("btn-danger");
					$("#msg_result").html('<p style="color: white; margin: 0px; padding: 0px">Informe de Rendimentos não encontrado para os dados informados. Por favor, verifique se o número do CPF e PIS estão corretos!</p>');
					$("#msg_result").show();
				}
	    }
	  });
	}
	
	//MÁSCARAS DOS CAMPOS
	$("#fpa_cpf").mask("999.999.999-99");
	
	$('#form-consulta').validate({
    rules: {
      fpa_cpf: {
        required: true
      },
      fpa_pis: {
        required: true,
        minlength: 6
      }
    },
    messages:{
      fpa_cpf:"Digite um CPF válido!",
      fpa_data:"Digite o número do PIS!"
    },
    
    highlight: function(label) {
      $(label).closest('.control-group').addClass('error');
      $(label).closest('.control-group').removeClass('success');
    },
    success: function(label) {
    	$(label).closest('.control-group').removeClass('error');
      $(label).closest('.control-group').addClass('success');
      //label.addClass('valid').closest('.control-group').addClass('success');
    },
    
    submitHandler: function(form){
			Valida_Informe_FPA();
    }
  });

});
	
</script>

