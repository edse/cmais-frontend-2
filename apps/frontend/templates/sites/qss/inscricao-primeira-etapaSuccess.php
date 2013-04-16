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
      
      <div id="youtube">
        <a name="ytd">
        <script type="text/javascript" src="https://cmais-tvcultura.appspot.com/js/ytd-embed.js"></script>
        <script type="text/javascript">
        var ytdInitFunction = function() {
          var ytd = new Ytd();
          ytd.setAssignmentId("1001");
          ytd.setCallToAction("callToActionId-1001");
          var containerWidth = 350;
          var containerHeight = 550;
          ytd.setYtdContainer("ytdContainer-1001", containerWidth, containerHeight);
          ytd.ready();
        };
        if (window.addEventListener) {
          window.addEventListener("load", ytdInitFunction, false);
        } else if (window.attachEvent) {
          window.attachEvent("onload", ytdInitFunction);
        }
        </script>
        </a>
        <div class="youtube">
          <a name="ytd"></a>
          <a id="callToActionId-1001" href="javascript:void(0);" class="upload"></a>
          <div id="ytdContainer-1001"></div>
        </div> 
      </div>      
            
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
 
