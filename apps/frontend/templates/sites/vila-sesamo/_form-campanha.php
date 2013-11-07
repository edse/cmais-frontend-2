  <?php if($campaign): ?>
  <span class="divisa carregar"></span>
  <!--section-->
  <section class="form row-fluid">
    
    <!--span12-->
    <div class="span12">
      <h2><?php echo $campaign->getTitle(); ?></h2>
      <p><?php echo $campaign->getDescription(); ?></p>
    </div>
    <!--/span12-->
    
    <!--span8-->
    <div class="span8">
      
      <div class="msgAcerto" id="statusMsg_0" style="display:none">
        <p>
          Sua brincadeira foi enviada com sucesso<br/>
          e em breve estará em nossa galeria de brincadeiras!
        </p>
      </div>

      <div class="msgErro" id="statusMsg_1" style="display:none">
        <p>
          Formato de imagem inválido<br/>
          Por favor, tente com JPG, PNG ou GIF!
        </p>
      </div>

      <div class="msgErro" id="statusMsg_2" style="display:none">
        <p>
          Arquivo muito grande<br/>
          Por favor, tente com um arquivo de até 15 MB!
        </p>
      </div>
      
      <div class="msgErro" id="statusMsg_3" style="display:none">
        <p>
          Erro inesperado<br/>
          Por favor, tente mais tarde!
        </p>
      </div>
      
      <!--form-->    
      <!--form class="form-horizontal" id="form-contato" action="" method="post" enctype="multipart/form-data"-->
      <form class="form-horizontal" id="form-contato" action="http://cmais.com.br/actions/vilasesamo/campanhas/brincar-e-um-direito-da-crianca.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="campanha" name="campanha" value="<?php echo $campaign->getTitle() ?>" />
        <!--Nome-->
        <div class="control-group span8">
          <label class="control-label icones-form icone-form-nome" for="nome"></label>
          <input type="text" id="nome" value="Nome" name="nome" data-default="Nome"  placeholder="Nome">
        </div>
        <!--/Nome-->
        
        <!--Idade-->
        <div class="control-group idade span2">
          <label class="control-label icones-form icone-form-idade" for="idade"></label>
          <input type="text" id="idade" value="Idade" placeholder="Idade" name="idade" data-default="Idade"  placeholder="Idade">
        </div>
        <!--/Idade-->
        
        <!--Cidade-->
        <div class="control-group span8 cidade">
          <label class="control-label icones-form icone-form-cidade" for="cidade"></label>
          <input type="text" id="cidade" value="Cidade" name="cidade" data-default="Cidade" placeholder="Cidade">
        </div>
        <!--/Cidade-->
        
        <!--Estado-->
        <div class="control-group estado span2">
          <select id="estado" name="estado">
            <option selected="selected" value="">UF</option>
            <option value="Acre">AC</option>
            <option value="Alagoas">AL</option>
            <option value="Amazonas">AM</option>
            <option value="Amapá">AP</option>
            <option value="Bahia">BA</option>
            <option value="Ceará">CE</option>
            <option value="Distrito Federal">DF</option>
            <option value="Espirito Santo">ES</option>
            <option value="Goiás">GO</option>
            <option value="Maranhão">MA</option>
            <option value="Minas Gerais">MG</option>
            <option value="Mato Grosso do Sul">MS</option>
            <option value="Mato Grosso">MT</option>
            <option value="Pará">PA</option>
            <option value="Paraíba">PB</option>
            <option value="Pernambuco">PE</option>
            <option value="Piauí">PI</option>
            <option value="Paraná">PR</option>
            <option value="Rio de Janeiro">RJ</option>
            <option value="Rio Grande do Norte">RN</option>
            <option value="Rondônia">RO</option>
            <option value="Roraima">RR</option>
            <option value="Rio Grande do Sul">RS</option>
            <option value="Santa Catarina">SC</option>
            <option value="Sergipe">SE</option>
            <option value="São Paulo">SP</option>
            <option value="Tocantins">TO</option>
          </select>
        </div>
        <!--/Estado-->
        
        <!--Email-->
        <div class="control-group span8">
          <label class="control-label icones-form icone-form-email" for="email"></label>
          <input type="text" id="email"  value="Email" name="email" placeholder="Email">
        </div>
        <!--/Email-->
        
        <!--Anexo-->
         <div class="control-group span2 idade anexo">
          <label class="control-label icones-form icone-form-datafile" for="datafile"></label>
          <input id="datafile" type="file" name="datafile">
          <!--a href="#" title="Anexar">Anexar</a-->
        </div>
        <!--/Anexo-->
        
        <!--Msg-->
        <div class="control-group span12 msg">
          <label class="control-label icones-form icone-form-msg" for="mensagem"></label>
          <textarea id="mensagem" name="mensagem" data-default="Mensagem"  placeholder="Mensagem">Mensagem</textarea>
        </div>
        <!--/Msg-->
        
        <!--concorda-->
        <div class="control-group span11">
          <label class="radio">
            <input type="radio" name="concordo" id="concordo" value="concordo">
            Declaro que li e estou de acordo com os Termos e Condições acima .
          </label>
        </div>
        <!--/concorda-->
         
        <!--Termos e condições-->
        <div class="span12 termo">
          <?php include_partial_from_folder('sites/vila-sesamo', 'global/termos') ?>
        </div>
        <!--/Termos e condições-->
        
        <!--enviar-->
        <div class="control-group span11">
          <button type="submit" class="btn" id="enviar">enviar minha brincadeira</button>
        </div> 
        <!--/enviar-->
        
      </form>
      <!--/form-->
      
    </div>
    <!--/span8-->
    
    <!--span4-->
    <div class="span4">
      <!--iframe width="300" height="246" src="http://www.youtube.com/embed/qTFP8I3PHJc?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe-->
      <?php
        $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($campaign->getId(), "destaque-principal");
        if($block) $displays["destaque-principal"] = $block->retriveDisplays();
      ?>
      <?php if(isset($displays["destaque-principal"])): ?>
        <?php if(count($displays["destaque-principal"]) > 0): ?>
          <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
      <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
          <?php elseif($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "image"): ?>
      <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />           
          <?php else: ?>
      <?php echo $displays["destaque-principal"][0]->getDescription(); ?>            
          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <!--span4-->
    
  </section>
  <!--/section-->
  <?php endif; ?>
  
<script src="/portal/js/ajaxFileUpload/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    /*
	  $('#nome').focus(function(){ 		if($(this).val() == "Nome") {  $(this).val(''); }; 	});
	  $('#nome').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome'); 	};	});
	  $('#idade').focus(function(){ 	if($(this).val() == "Idade") {  $(this).val(''); }; });
	  $('#idade').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Idade'); 	 };	});	  
	  $('#cidade').focus(function(){ 	if($(this).val() == "Cidade") {  $(this).val(''); }; });
	  $('#cidade').focusout(function(){ if($(this).val() == ''){ $(this).val('Cidade');   }; });
	  $('#email').focus(function(){ 	if($(this).val() == "Email") {  $(this).val(''); }; });
	  $('#email').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Email'); 	 };	});
	  $('#mensagem').focus(function(){ 	if($(this).val() == "Mensagem") {  $(this).val(''); };	});
	  $('#mensagem').focusout(function(){ if($(this).val() == ''){ $(this).val('Mensagem'); };	});
  	*/
  	
    var validator = $('#form-contato').validate({
      
      submitHandler: function(form){
      	form.submit();
      },
      rules:{
        nome:{
          required: function(){ validate("#nome"); return true},
          minlength: 2
        },
        idade:{
          required: function(){ validate("#idade"); return true},
          number: true
        },
        email:{
          required: true,
          email: true
        },
        cidade:{
          required: function(){ validate("#cidade"); return true},
          minlength: 3
        },
        estado:{
          required: true
        },
        mensagem:{
          required: function(){ validate("#mensagem"); return true},
          minlength: 3
        },
        datafile:{
          required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
        },
        concordo:{
          required: true
        }
        
      },
      messages:{
        nome:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
        idade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
        email:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
        cidade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
        estado:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
        mensagem:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
        datafile:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
        concordo:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!'
      }, 
      onkeyup:function(e){
        var id = e.id;
        if($('#'+id).hasClass('valid')){
          $('#'+id).prev().removeClass('icone-form-'+campo+'-erro');
        }else if{
          $('#'+id).prev().addClass('icone-form-'+campo+'-erro');
        }
        
      },
      onfocusout:function(e){
        var id = e.id;
        if($('#'+id).hasClass('valid')){
          $('#'+id).prev().removeClass('icone-form-'+campo+'-erro');
        }else if{
          $('#'+id).prev().addClass('icone-form-'+campo+'-erro');
        }
      },
      success: function(label){
      }
    });
    
    $('#enviar').click(function(){
      setTimeout(function() {
        $('input, #mensagem').not('#concordo').each(function(){
          var campo = $(this).attr('id');
          if($(this).hasClass('error')){
            $(this).prev().addClass('icone-form-'+campo+'-erro');
          }else{
            $(this).prev().removeClass('icone-form-'+campo+'-erro');
          }
        });
      }, 100);
    });
    
  });
  
  function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
      //$(obj).addClass("error");
  }
  
</script>  
