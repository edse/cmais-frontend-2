<?php include_partial_from_folder('blocks', 'global/topo-cmais-mini', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>    

<script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>

<div class="container" id="geral">
  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="conteudo">
    <ul class="menu">
      <li class="cedoc"><h3><a href="<?php echo $site->retriveUrl() ?>" title="Cedoc">Cedoc</a></h3></li>
      <li><span></span><a href="<?php echo $site->retriveUrl() ?>/quem-somos" title="Quem Somos">quem somos</a></li>
      <li><span></span><a href="<?php echo $site->retriveUrl() ?>/acervo" title="Acervo">acervo</a></li>
      <li class="ativo"><span></span><a href="<?php echo $site->retriveUrl() ?>/contato" title="Contato">contato</a></li>
      <li>
        <?php include_partial_from_folder('sites/cedoc', 'global/formBusca') ?>
      </li>
    </ul>
    <div class="span8 row-fluid contato">
      <h2>Contato</h2>
      <div class="txt">
        <p>Utilize o formulário abaixo para entrar em contato conosco. </p>
        <p>Rua Cenno Sbrighi, 378 - Caixa Postal 11.544</br>
        CEP 05036-900</br>
        São Paulo/SP</br>
        Tel: (11) 2182.3227 </p>
      </div>
      <div class="msgErro" style="display:none">
        <span class="alerta"></span>
        <div class="boxMsg">
          <p class="aviso">Sua mensagem não pode ser enviada.</p>
          <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
        </div>
       
      </div>
      <div class="msgAcerto" style="display:none">
        <span class="alerta"></span>
        <div class="boxMsg"> 
          <p class="aviso">Mensagem enviada com sucesso!</p>
          <p>Obrigado por entrar em conosco. Em breve retornaremos sua mensagem.</p>
        </div>
      
      </div>
      <form id="form-contato" method="post" action="">
        <div class="linha t3">
          <label>nome</label>
          <input type="text" name="nome" id="nome" />
        </div>
        
        <div class="linha t3">
          <label>email</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="linha t1">
          <label>cidade</label>
          <input type="text" name="cidade" id="cidade" />
        </div>
        <div class="linha t2">
          <label>estado</label>
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
            <option valvar error = getParameterByName('error');ue="Espirito Santo">ES</option>
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
        <div class="linha t4 assunto">
          <label>assunto</label> 
          <br />
          <select style="width:322px;" id="assunto" name="assunto" class="required">
            <option value="">- Selecione -</option>
            <option value="Elogio">Elogio</option>
            <option value="Crítica">Crítica</option>
            <option value="Comentário">Comentário</option>
            <option value="Sugestão">Sugestão</option>
            <option value="Pedido de Informação">Pedido de Informação</option>
            <?php if(in_array($site->getSlug(), array('jornaldacultura','jornaldacultura','reportereco'))):           ?>
            <option value="Compra de DVD">Compra de DVD</option>
            <?php endif;?> 
          </select>
        </div>
        <div class="linha t4" id="t4ref"> 
          <label>referência de imagem</label>
          <input type="text" name="referencia" id="referencia" value="" />
        </div>
        <div class="linha t3">
          <label>mensagem</label>
          <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
          <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
        </div>
        <div class="linha t3 codigo" id="captchaimage">
          <label for="captcha">Confirma&ccedil;&atilde;o</label>
          <br />
          <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código"> <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time();?>" width="132" height="46" alt="Captcha image" id="captcha_image" /> </a>
          <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
          <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
          <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar" style="cursor:pointer" />
          <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
        </div>
      </form>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span5 apoio">
      <h2>Realização:</h2>
      <ul>
        <li class="cultura"><a href="http://www.cmais.com.br">Cultura</a></li>
        <li class="ministerio"><a href="http://www.cultura.gov.br" target="_blank">Ministério da Cultura</a></li>
        <li class="governo"><a href="http://www.brasil.gov.br" target="_blank">Governo Federal</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- /container -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('input#enviar').click(function() {
      $(".msgAcerto, .msgErro").hide();
    });
    var validator = $('#form-contato').validate({
      submitHandler : function(form) {
        $.ajax({
          type : "POST",
          dataType : "text",
          data : $("#form-contato").serialize(),
          beforeSend : function() {
            $('input#enviar').attr('disabled', 'disabled');
            $(".msgAcerto").hide();
            $(".msgErro").hide();
            $('img#ajax-loader').show();
          },
          success : function(data) {
            $('input#enviar').removeAttr('disabled');
            window.location.href = "#";
            if(data == "1") {
              $("#form-contato").clearForm();
              $(".msgAcerto").show();
              $('img#ajax-loader').hide();
            } else {
              $(".msgErro").show();
              $('img#ajax-loader').hide();
            }
          }
        });
      },
      rules : {
        nome : {
          required : true,
          minlength : 2
        },
        email : {
          required : true,
          email : true
        },
        cidade : {
          required : true,
          minlength : 3
        },
        estado : {
          required : true,
          minlength : 2
        },
        assunto : {
          required : true,
        },
        referencia : {
          required : false,
          minlength : 2
        },
        mensagem : {
          required : true,
        },
        captcha : {
          required : true,
          remote : "/portal/js/validate/demo/captcha/process.php"
        }
      },
      messages : {
        nome : "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        email : "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        cidade : "Este campo &eacute; Obrigat&oacute;rio.",
        estado : "Este campo &eacute; Obrigat&oacute;rio.",
        assunto : "Este campo &eacute; Obrigat&oacute;rio.",
        referencia : "Este campo &eacute; Obrigat&oacute;rio.",
        mensagem : "Este campo &eacute; Obrigat&oacute;rio.",
        captcha : "Digite corretamente o código que está ao lado."
      },
      success : function(label) {
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  }); 
  
  $('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date);
  
  // Contador de Caracters
  function limitText(limitField, limitNum, textCounter) {
    if(limitField.value.length > limitNum)
      limitField.value = limitField.value.substring(0, limitNum);
    else
      $(textCounter).html(limitNum - limitField.value.length);
  }
</script>

<script language="javascript">
  
   var ref1 = "";
   ref1 = getParameterByName('ref');
   //alert(ref.charAt(0))
   if(ref1 == ""){
    $("#t4ref").css("display","none");
   }
   else{
    $("#referencia").attr("value",ref1);
   }


</script>