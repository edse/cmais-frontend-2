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
      <p>Cadastre o seu e-mail para ser informado sobre a data de início das inscrições:</p>
      <input type="text" name="email" id="email" class="required" />
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
        nome: " Este campo &eacute; Obrigat&oacute;rio.",
 
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  });
</script>
 
