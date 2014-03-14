  <?php if($campaign): ?>
  <script src="http://cmais.com.br/portal/js/dropkick-master/jquery.dropkick-min.js"></script>
  
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
      
      <?php if(isset($_GET["success"])):?>
        <?php if($_GET["success"] == 2): ?>
          <div class="msgAcerto" id="statusMsg_0">
            <p>
              Sua brincadeira foi enviada com sucesso<br/>
              e em breve estará em nossa galeria de brincadeiras!
            </p>
            <!--a class="btn" href="/<?php echo $site->getSlug(); ?>/campanhas/brincar-e-um-direito-da-crianca" title="visitar a galeria de brincadeiras">visitar a galeria de brincadeiras</a-->
          </div>
        <?php endif; ?>
      <?php endif;?> 
       
      <?php if(isset($_GET["error"])) :?>
        <?php if($_GET["error"] == 1) :?>  
          <div class="msgErro" id="statusMsg_3">
            <p>
              Erro inesperado<br/>
              Por favor, tente mais tarde!
            </p>
          </div>
        <?php elseif($_GET["error"] == 2): ?>  
          <div class="msgErro" id="statusMsg_1">
            <p>
              Formato de imagem inválido<br/>
              Por favor, tente com JPG, PNG ou GIF!
            </p>
          </div>
        <?php elseif($_GET["error"] == 3): ?>
          <div class="msgErro" id="statusMsg_2">
            <p>
              Arquivo muito grande<br/>
              Por favor, tente com um arquivo de até 15 MB!
            </p>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <!--form-->  
       
      <form class="form-horizontal" id="form-contato" action="http://app.cmais.com.br/actions/vilasesamo/campanhas/brincar-e-um-direito-da-crianca.php" method="post" enctype="multipart/form-data" <?php if(isset($_GET["success"]))echo 'style="display:none;"' ?> >
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
        
        <!--Nome Responsável-->
        <div class="control-group span8">
          <label class="control-label icones-form icone-form-nome-resp" for="resp"></label>
          <input type="text" id="resp" value="Nome do Responsável" name="resp" data-default="Nome do Responsável"  placeholder="Nome do Responsável">
        </div>
        <!--/Nome Responsável-->
        
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
          <input type="text" id="email"  value="Email" name="email" placeholder="E-mail de contato">
        </div>
        <!--/Email-->

        <!--Anexo-->
         <div class="control-group span2 idade anexo file-wrapper">
          <label class="control-label icones-form icone-form-datafile" for="datafile"></label>
          <input id="datafile" class="required" accept="png|jpe?g|gif" type="file" name="datafile">
          <span class="button">Anexar</span>
        </div>
        <!--/Anexo-->
        
        <!--Msg-->
        <!--div class="control-group span12 msg">
          <label class="control-label icones-form icone-form-msg" for="mensagem"></label>
          <textarea id="mensagem" name="mensagem" data-default="Mensagem"  placeholder="Mensagem">Mensagem</textarea>
        </div-->
        <!--/Msg-->
        
        <!--concorda-->
        <div class="control-group span11">
          <label class="radio">
            <input type="radio" name="concordo" id="concordo" value="concordo">
            Declaro que li e estou de acordo com os Termos e Condições abaixo .
          </label>
        </div>
        <!--/concorda-->
        
        <!--asset que a pessoa esta -->
        <input type="hidden" id="urlElement" name="urlElement" value="">
        <!--/asset que a pessoa esta -->
        
        <!--Termos e condições-->
        <div class="span12 termo">
          <?php include_partial_from_folder('sites/vilasesamo', 'global/termos') ?>
        </div>
        <!--/Termos e condições-->
        
        <!--enviar-->
        <div class="control-group span11">
          <input type="submit" class="btn" id="enviar" value="ENVIE O SEU DESENHO"></input>
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
  
<script src="http://cmais.com.br/portal/js/ajaxFileUpload/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    if($('#form-contato').is(':visible')){
      $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
      
      $('#estado').dropkick({
        change: function (value, label) {
             if(value == ""){
               $('.dk_toggle').addClass('error');
             }else{
               $('.dk_toggle').removeClass('error'); 
             }
          }
      });
      
  	  $('#nome').focus(function(){ 		if($(this).val() == "Nome") {  $(this).val(''); }; 	});
  	  $('#nome').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome'); 	};	});
  	  $('#resp').focus(function(){ 		if($(this).val() == "Nome do Responsável") {  $(this).val(''); }; 	});
  	  $('#resp').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome do Responsável'); 	};	});
  	  $('#idade').focus(function(){ 	if($(this).val() == "Idade") {  $(this).val(''); }; });
  	  $('#idade').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Idade'); 	 };	});	  
  	  $('#cidade').focus(function(){ 	if($(this).val() == "Cidade") {  $(this).val(''); }; });
  	  $('#cidade').focusout(function(){ if($(this).val() == ''){ $(this).val('Cidade');   }; });
  	  $('#email').focus(function(){ 	if($(this).val() == "Email") {  $(this).val(''); }; });
  	  $('#email').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Email'); 	 };	});
  	  $('#mensagem').focus(function(){ 	if($(this).val() == "Mensagem") {  $(this).val(''); };	});
  	  $('#mensagem').focusout(function(){ if($(this).val() == ''){ $(this).val('Mensagem'); };	});
    	
      var validator = $('#form-contato').validate({
        
        submitHandler: function(form){
          //resgatando a página que a pessoa
          url = window.location;
          $('#urlElement').attr('value',url.href);
        	form.submit();
        },
        rules:{
          nome:{
            required: function(){ validate("#nome"); return true},
            minlength: 2
          },
          resp:{
            required: function(){ validate("#resp"); return true},
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
  
          concordo:{
            required: true
          }
          
        },
        onkeyup:function(e){
          verifyKey();
        },
        messages:{
          nome:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          resp:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          idade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          email:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          cidade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          estado:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          mensagem:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          concordo:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!'
        }, 
        
        success: function(label){
        }
      });
      
      $('#enviar').click(function(){
        verifyKey();
      });
    }
  });
  var SITE = SITE || {};

  SITE.fileInputs = function() {
    var $this = $(this),
        $val = $this.val(),
        valArray = $val.split('\\'),
        newVal = valArray[valArray.length-1],
        $button = $this.siblings('.button'),
        $fakeFile = $this.siblings('.file-holder');
    if(newVal !== '') {
      $button.text('Anexar');
      if($fakeFile.length === 0) {
        $button.after('<span class="file-holder">' + newVal + '</span>');
      } else {
        $fakeFile.text('Anexo: '+ newVal);
      }
    }
  }


  function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
      //$(obj).addClass("error");
  } 
  function verifyKey(){
    setTimeout(function() {
      $('input, textarea').not('#concordo').each(function(){
        var campo = $(this).attr('id');
        if($(this).hasClass('error')){
          $(this).prev().addClass('icone-form-'+campo+'-erro');
        }else{
          $(this).prev().removeClass('icone-form-'+campo+'-erro');
        }
      });
      $('#concordo').delay(100, function(){
        if($(this).hasClass('error')){
          $(this).parent().css('color', 'yellow');
        }else{
          $(this).parent().css('color', 'white');
        }
      });
      if($('#estado').hasClass('error')){
        $('.dk_toggle').addClass('error');
      }else{
        $('.dk_toggle').removeClass('error');
      }
    }, 100);
      
  }
</script>  
