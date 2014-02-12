<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<!--a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião" style="display: none;">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a-->

<div id="bg-site">
</div>
<!-- CAPA SITE -->
<div id="capa-site">
  <?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>
  <!-- MIOLO -->
  <div id="miolo">
    <!-- BOX LATERAL -->
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>
    <!-- BOX LATERAL -->
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <div class="contato grid2">
            <h3 class="tit-pagina grid3">
            <?php echo $section->getTitle() ?>
            </h3>
            <p>
              Preencha e envie o formulário abaixo com até seis músicas adequadas à programação da rádio.
            </p>
                  <div class="msgErro" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Sua mensagem não pode ser enviada.</p>
                      <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgAcerto" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                    </div>
                    <hr />
                  </div>
            
            <form id="form-contato" method="post" action="" class="selecao">
              <div class="linha t3">
                <label>
                  nome
                </label>
                <input type="text" name="nome" id="nome" />
              </div>
              <div class="linha t6">
                <label>
                  Bairro
                </label>
                <input type="text" name="bairro" id="bairro" />
              </div>
              <div class="linha t4">
                <label>
                  Cidade
                </label>
                <input type="text" name="cidade" id="cidade" />
              </div>
              <div class="linha t2">
                <label>
                  estado
                </label>
                <br />
                <select class="estado required" id="estado">
                  <option value="" selected="selected">--</option>
                  <option value="Acre">AC</option>
                  <option value="Alagoas">AL</option>
                  <option value="Amazonas">AM</option>
                  <option value="Amap&aacute;">AP</option>
                  <option value="Bahia">BA</option>
                  <option value="Cear&aacute;">CE</option>
                  <option value="Distrito Federal">DF</option>
                  <option value="Espirito Santo">ES</option>
                  <option value="Goi&aacute;s">GO</option>
                  <option value="Maranh&atilde;o">MA</option>
                  <option value="Minas Gerais">MG</option>
                  <option value="Mato Grosso do Sul">MS</option>
                  <option value="Mato Grosso">MT</option>
                  <option value="Par&aacute;">PA</option>
                  <option value="Para&iacute;ba">PB</option>
                  <option value="Pernambuco">PE</option>
                  <option value="Piau&iacute;">PI</option>
                  <option value="Paran&aacute;">PR</option>
                  <option value="Rio de Janeiro">RJ</option>
                  <option value="Rio Grande do Norte">RN</option>
                  <option value="Rond&ocirc;nia">RO</option>
                  <option value="Roraima">RR</option>
                  <option value="Rio Grande do Sul">RS</option>
                  <option value="Santa Catarina">SC</option>
                  <option value="Sergipe">SE</option>
                  <option value="S&atilde;o Paulo">SP</option>
                  <option value="Tocantins">TO</option>
                </select>
              </div>
              <div class="linha t4">
                <label>
                  País
                </label>
                <input type="text" name="pais" id="pais" />
              </div>
              <div class="linha t4">
                <label>
                  Telefone
                </label>
                <input type="text" name="tel" id="tel" />
              </div>
              <div class="linha t3">
                <label>
                  Email
                </label>
                <input type="text" name="email" id="email" />
              </div>
              <div class="divisa">
                <p class="item" id="item_1">
                  Música 1
                </p>
                <div class="linha t3">
                  <label>
                    Música
                  </label>
                  <input type="text" id="musica_1" name="musica_1" maxlength="100" />
                </div>
                <div class="linha t3">
                  <label>
                    Intérprete
                  </label>
                  <input type="text" id="interprete_1" name="interprete_1" maxlength="100" />
                </div>
                <div class="linha t3 compositor">
                  <label>
                    Compositor
                  </label>
                  <input type="text" name="compositor_1" id="compositor_1" maxlength="100" />
                </div>
              </div>               
              <div class="linha add" id="adicionar_holder" style="width:auto; margin-right:20px;">
              	<a href="javascript:;" id="adicionar" class="enviar" style="width:auto; padding:2px 8px 2px 8px">Sugira mais músicas</a>
              </div>
              <div class="linha add" id="remover_holder" style="display:none;" style="width:auto; margin-right:20px;">
              	<a href="javascript:;" id="remover" class="enviar" style="width:auto; padding:2px 8px 2px 8px">Remover</a>
              </div>
              <div class="linha t3 codigo" id="captchaimage">
              <label for="captcha">
              Confirma&ccedil;&atilde;o
              </label>
              <br />
              <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
              <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?1324490004" width="132" height="46" alt="Captcha image" id="captcha_image" />
              </a>
              <label class="msg" for="captcha">
              Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:
              </label>
              <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
              </div>
              <div class="linha t3 btn-enviar" >
                <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar" />
              </div>
            </form>
          </div>
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- culturafm-300x250 -->
            <script type='text/javascript'>GA_googleFillSlot("culturafm-300x250");</script>
          </div>
          <!-- / BOX PUBLICIDADE -->
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- / CAPA SITE -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>

<script type="text/javascript">

  $(document).ready(function() {
  
  	$("#tel").mask("(99) 99999999?9");
  	
      	$('input#enviar').click(function(){
      	  $(".msgAcerto, .msgErro").hide();
      	});
      	
      	var validator = $('#form-contato').validate({
      	  submitHandler: function(form){
      	  	$.ajax({
      	  	  type: "POST",
      	  	  dataType: "text",
      	  	  data: $("#form-contato").serialize(),
      	  	  beforeSend: function(){
      	  	    $('input#enviar').attr('disabled','disabled');
      	  	    $(".msgAcerto").hide();
      	  	    $(".msgErro").hide();
      	  	    $('img#ajax-loader').show();
      	  	  },
      	  	  success: function(data){
     	  	    $('input#enviar').removeAttr('disabled');
      	  	    window.location.href="#";
      	  	    if(data == "1"){
      	  	      $("#form-contato").clearForm();
      	  	      $(".msgAcerto").show();
      	  	      $('img#ajax-loader').hide();
      	  	    }
      	  	    else {
      	  	      $(".msgErro").show();
      	  	      $('img#ajax-loader').hide();
      	  	    }
      	  	  }
      	  	});					
      	  },
  	  rules: {
  	  	nome: {
  	  	  required: true,
  	  	  minlength: 2
  	  	},
  	  	email: {
  	      required: true,
  	      email: true
  	    },
  	    cidade: {
  	      required: true,
  	      minlength: 3
  	    },
  	    estado: {
		  required: true
		}
	  },
	  messages: {
	  	nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
	  	email: "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
	  	cidade: "Este campo &eacute; Obrigat&oacute;rio.",
	  	estado: "Este campo &eacute; Obrigat&oacute;rio."
	  },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
	
	
    
    //create a new field then append it before the add field button
    
    var i = 1; // start index
    var min = 1; // configure minimum number of elements
    var max = 6; // configure maximum number of items
    
	$("#adicionar").click(function() {
	  $('#remover_holder').show();
	  if (i < max) {
	    i++;
	    var new_field = '<div class="divisa" id="item_'+i+'"><p class="item">Música '+i+'</p>';
	    new_field += '<div class="linha t3"><label>música</label><input type="text" id="musica_'+i+'" maxlength="100" name="musica_'+i+'"></div>';
	    new_field += '<div class="linha t3 interprete"><label>intérprete</label><input type="text" id="interprete_'+i+'" maxlength="100" name="interprete_'+i+'"></div>';
	    new_field += '<div class="linha t3 compositor"><label>compositor</label><input type="text" id="compositor_'+i+'" maxlength="100" name="compositor_'+i+'"></div></div>';
	    $("#adicionar_holder").before(new_field);
	  }
	  else {
	    alert('Você pode inserir no máximo '+max+' músicas!')
	  }
	});
	
	//remove last fields
	$("#remover").click( function() {
	  if (i > min) {
	  	$("#item_"+i).remove();
	  	$("#numero").val();
	  	if (i == (min+1)){
	  	  $("#remover_holder").hide();
	  	}
	  	i--;
	  }
	});	
  });
  
  // Contador de Caracters
  function limitText (limitField, limitNum, textCounter) {
    if (limitField.value.length > limitNum)
      limitField.value = limitField.value.substring(0, limitNum);
    else
      $(textCounter).html(limitNum - limitField.value.length);
  }
</script>