<link rel="stylesheet" href="/portal/css/tvcultura/sites/qss.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>

<!-- CAPA SITE --> 
<div id="capa-site">

  <!-- curtir -->
    <div class="redes">
    </div>
    <!-- /curtir -->
    <div style="float:left;">
      <p>O ”QUEM SABE, SABE” é um jogo diário, destinado aos participantes a partir dos 18 anos de idade, com perguntas e respostas de múltiplas escolhas. Ele é baseado no conhecimento, estratégia e sorte dos competidores.</p>
      <p>Gravado nos estúdios da emissora e jogado a partir de uma arena tecnológica, 4 participantes, representados por avatares de cores diferente, se enfrentam em 3 fases distintas durante 1 hora de programa, sempre de segunda a sexta-feira.</p>
      <p>Na 1ª e 2ª fase os participantes respondem sobre 09 temas (Ciências, Cinema e Tv, Cultura Pop, Esportes, História, Literatura, Dicionário, Música e Mundo, que engloba perguntas de Geografia, Geologia e Geopolítica). Dois deles passam para a 3ª fase onde responderão sobre temas relacionados a programas da TV CULTURA.</p>
      <p>Ao final, o grande vencedor é aquele que acumular a maior quantidade de “EUREKAS” (sistema de pontuação do jogo).</p>

      <a id="enviar" class="btn-home" href="http://tvcultura.cmais.com.br/qss-fb/inscricao" >INSCREVA-SE JÁ</a>

    </div>  
</div> 
<!-- /capa site-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var validator = $('#form-contato').validate({
      submitHandler: function(form){
        $.ajax({
          type: "POST",
          dataType: "text",
          data: $("#form-contato").serialize(),
          beforeSend: function(){
            $('img#ajax-loader').show();
          },
          success: function(data){
          $('input#enviar').removeAttr('disabled');
            window.location.href="#";
            if(data == "1"){
              alert("Seu cadastro foi enviado com sucesso!");
               $('img#ajax-loader').hide();
               $('#form-contato').hide();
            }
            else {
              alert("Sua mensagem não pode ser enviada. Tente novamente.");
               $('img#ajax-loader').hide();
               $("#email").val(" ");
               
            }
          }
        });         
      },
      rules:{
        email:{
          required:true,
          email: true
        }
      },
      messages:{
        email: "Digite um e-mail válido.",
 
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  });
</script>
 
