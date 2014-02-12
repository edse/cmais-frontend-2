<script type="text/javascript" src="http://cmais.com.br/portal/quintal/js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
        
        $('#respFilomena .btn-enviar').click(function(){
          $('#respFilomena').hide();
          $('#pFilomena').show();
        });
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              url:"http://app.cmais.com.br/ajax/mensagem",
              data: $("#form-contato").serialize(),
              beforeSend: function(){
                $('input#enviar').hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
                $('input#enviar').show()
                $('#pFilomena').hide();
                $('#respFilomena').show();
                
                //if(data == "1"){
                  $("#form-contato").clearForm();
                  $('img#ajax-loader').hide();
                //}
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
            mensagem:{
              required: true,
              minlength: 5
            }
          },
          messages:{
            nome: "*os campos em vermelho apresentam erro de preenchimento!",
            email: "*os campos em vermelho apresentam erro de preenchimento!",
            mensagem: "*os campos em vermelho apresentam erro de preenchimento!" 
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
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
<div id="pFilomena">
  <h2>Pergunte a Filomena:</h2>
 
  <!--FORMULARIO-->
  <form id="form-contato" action="" method="post">
    <?php 
    $form = new BaseForm();
    echo $form->renderHiddenFields();
    ?>
    
    <!--NOME-->
    <div class="t1input">
      <label>NOME:</label>
      <input type="text" id="nome" name="nome" class="nome"  placeholder="Seu Nome Amiguinho"/>
    </div>
    <!--/NOME-->
    
    <!--E-MAIL-->
    <div class="t2input">
      <label>E-MAIL:</label>
      <input type="text" name="email" class="email"  placeholder="amiguinho@seuemail.com.br"/>
    </div>
    <!--/E-MAIL-->
    
    <!--PERGUNTA-->
    <div class="t2message">
      <label>
        PERGUNTA:</br>
        [<span id="textCounter">140</span>]
      </label>
      
      <textarea name="mensagem" id="mensagem" class="mensagem" placeholder="Sua pergunta" onKeyDown="limitText(this,140,'#textCounter');"></textarea>
    </div>
    <!--PERGUNTA-->

    <!--ENVIAR-->
    <div id="btn-nav" align="center">
      <img src="http://cmais.com.br/portal/quintal/images/ludovicoshow/ajax-loader.gif" alt="enviando..." style="display:none;" width="16px" height="16px" id="ajax-loader" />
      <input type="submit" name="enviar" id="enviar" class="btn-enviar" value="Enviar"/>
    </div>
    <!--/ENVIAR-->
    
  </form>
  <!--/FORMULARIO-->
  
</div>
<!--/Pergunte a Filomena-->

<div id="respFilomena" style="display:none;">
  <p class="recebeu">A Filomena já recebeu a sua pergunta. Fique ligado no programa ao vivo, quem sabe é a sua dúvida que ela irá solucionar.</p>
  <p>AGUARDE!</p>
  <a class="btn-enviar" href="javascript:;">
    ENVIAR OUTRA PERGUNTA
  </a>
</div>