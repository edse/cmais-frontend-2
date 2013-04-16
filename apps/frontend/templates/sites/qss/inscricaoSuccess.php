<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<!-- CAPA SITE -->
<div id="capa-site">
  <img src="/portal/images/capaPrograma/qss/background-qss.jpg" alt="Quem Sabe Sabe">    
  <!-- curtir -->
    <div class="redes">
      <div class="curtir">
        <div style="display:block; float: left; margin-right:10px;">
        <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
      </div>
      <!--<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>-->
    </div>
    <!-- /curtir -->
    <form id="form-contato" method="post" action="">
      <p>Faça um vídeo de no máximo 1 minuto, contando um pouco de você.</p>
      
      <p>Nome completo:</p>
      <input type="text" name="nome" id="nome" class="required" />

      <p>Idade:</p>
      <input type="text" name="idade" id="idade" class="required" />

      <p>Endereço:</p>
      <input type="text" name="endereco" id="endereco" class="required" />

      <p>Bairro:</p>
      <input type="text" name="bairro" id="bairro" class="required" />
      
      <p>CEP:</p>
      <input type="text" name="cep" id="cep" class="required" />
      
      <p>Cidade:</p>
      <input type="text" name="cidade" id="cidade" class="required" />
      
      <p>RG:</p>
      <input type="text" name="rg" id="rg" class="required" />
      
      <p>CPF:</p>
      <input type="text" name="cpf" id="cpf" class="required" />
      
      <p>Data de nascimento:</p>
      <input type="text" name="nascimento" id="nascimento" class="required" />

      <p>Telefone para contato:</p>
      <input type="text" name="telefone" id="telefone" class="required" />

      <p>Nome da mãe:</p>
      <input type="text" name="nomemae" id="nomemae" class="required" />

      <p>Profissão:</p>
      <input type="text" name="profissao" id="profissao" class="required" />

      <p>Grau de escolaridade:</p>
      <input type="text" name="escolaridade" id="escolaridade" class="required" /> 
      
            
      <input class="enviar" type="submit" name="enviar" id="enviar" value="ENVIAR" style="cursor:pointer" />
      <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
      
    </form>  
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
 
