<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){

        //form filomena
        $('#respFilomena .btn-enviar').click(function(){
          $('#respFilomena').hide();
          $('#pFilomena').show();
        });
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              beforeSend: function(){
                $('#form-contato input#enviar').hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
      	  	    if(data == "1"){
	                $('#respPromocao').show();
                  $('#promocao').hide();
                  $("#form-contato").clearForm();
                  $('img#ajax-loader').hide();
              	}
              	else {
              		window.alert("Não foi possível enviar a mensagem.\nPor favor, tente novamente mais tarde!")
              	}
              }
            });         
          },
          rules:{
            nome:{
              required: true,
              minlength: 2
            },
            email:{
              required: true,
              email: true
            },
            cidade:{
              required: true,
              minlength: 2
            },
            idade:{
              required: true,
              minlength: 2
            },
            estado:{
              required: true
            },
            resposta:{
              required: true,
              minlength: 2
            },
            mensagem:{
              required: true,
              minlength: 5
            }
          },
          messages:{
            nome: "*os campos em vermelho apresentam erro de preenchimento!",
            email: "*os campos em vermelho apresentam erro de preenchimento!",
            cidade: "*os campos em vermelho apresentam erro de preenchimento!",
            idade: "*os campos em vermelho apresentam erro de preenchimento!",
            estado: "*os campos em vermelho apresentam erro de preenchimento!",
            resposta: "*os campos em vermelho apresentam erro de preenchimento!",
            mensagem: "*os campos em vermelho apresentam erro de preenchimento!" 
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
        //form filomena
      });  
          
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
      
      
    </script>
<!--Pergunte a Filomena-->
<div id="promocao">
  <p>
    na Vinheta de abertura do cocoricó qual<br/> instrumento musical o júlio toca?
  </p>  
  <!--FORMULARIO-->
  <form id="form-contato" action="" method="post">
    <!--NOME-->
    <div class="t1input">
      <label>NOME:</label>
      <input type="text" id="nome" name="nome" class="nome"  placeholder="Seu Nome Amiguinho"/>
    </div>
    <!--/NOME-->

    <!--CIDADE-->
    <div class="t2input">
      <label>CIDADE:</label>
      <input type="text" name="cidade" id="cidade" class="cidade"   placeholder="A Cidade Onde Você Mora">
    </div>
    <!--/CIDADE-->
    
    <!--ESTADO-->
    <div class="t3input">
      <label>ESTADO:</label>
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
    <!--/ESTADO-->
    
    <!--E-MAIL-->
    <div class="t2input">
      <label>E-MAIL:</label>
      <input type="text" name="email" class="email"  placeholder="amiguinho@seuemail.com.br"/>
    </div>
    <!--/E-MAIL-->
    
    <!--IDADE -->
    <div class="t3input">
      <label>IDADE:</label>
      <input type="text" name="idade" class="idade required" maxlength="2"  placeholder="00"/>
    </div>
    <!--/E-MAIL-->
    
    <!--PERGUNTA-->
    <?php 
    $form = new BaseForm();
    echo $form->renderHiddenFields();
    ?>
    <input type="hidden" name="pergunta" id="pergunta" value="Na vinheta de abertura do Cocoricó qual instrumento musical o Júlio toca?">
    <!--/PERGUNTA-->
    
    <!--RESPOSTA-->
    <div class="t1input">
      <label>
        RESPOSTA:</br>
      </label>
      <input type="text" name="resposta" class="resposta"  placeholder="Resposta da pergunta."/>
    </div>
    <!--RESPOSTA-->

    <!--ENVIAR-->
    <div id="btn-nav" align="center">
      <img src="http://cmais.com.br/portal/quintal/images/ludovicoshow/ajax-loader.gif" alt="enviando..." style="display:none;" width="16px" height="16px" id="ajax-loader" />
      <input type="submit" name="enviar" id="enviar" class="btn-enviar" value="Enviar"/>
    </div>
    <!--/ENVIAR-->
    
  </form>
  <!--/FORMULARIO-->
  
  <div id="guitarra"></div>
</div>
<!--/Pergunte a Filomena-->

<!--RESPOSTA FORM FILOMENA-->
<div id="respPromocao" style="display:none;">
  <a href="javascript:;" class="troca tCha"></a>
  <p class="recebeu">Agradecemos sua participação!
  <br/>O resultado será divulgado aqui no site ainda hoje!</p>
  <p>AGUARDE!</p>
  <div id="guitarra"></div>
</div>
<!--RESPOSTA FORM FILOMENA-->



