<!--BOOTSTRAP-->
<script src="/portal/js/bootstrap/bootstrap.min.js"></script>
<!--BOOTSTRAP-->

<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="/portal/js/bootstrap/css/style.css">
<!-- /CSS BOOTSTRAP -->

<!--ENQUETE RAPIDA-->
<div id="enqueteRapida" >
        
    <h2>ENQUETE COCÓRICO</h2>
    
    <!--FORMULARIO-->
    <form method="post" id="e<?php echo $respostas[0]->Asset->getId()?>" class="form-contato">
    <?php 
    $form = new BaseForm();
    echo $form->renderHiddenFields();
    ?>
      <!--PERGUNTA-->
      <p><?php echo $q ?></p>
      <!--/PERGUNTA-->
      

      <!--RESPOSTA 1-->
      <input type="radio" name="opcao" id="opcao1" class="resposta required" value="<?php echo $respostas[1]->Asset->AssetAnswer->id ?>"  />
      <label for="resposta1" class="preto"><?php echo $respostas[0]->Asset->AssetAnswer->getAnswer() ?></label><br />
      <!--/RESPOSTA 1-->
      
      <!--RESPOSTA 2-->
      <input type="radio" name="opcao" id="opcao2" class="resposta required" value="<?php echo $respostas[2]->Asset->AssetAnswer->id ?>"/>
      <label for="resposta1" class="preto"><?php echo $respostas[1]->Asset->AssetAnswer->getAnswer() ?></label><br />
      <!--/RESPOSTA 2-->
      
      <!--RESPOSTA 3-->
      <input type="radio" name="opcao" id="opcao3" class="resposta required" value="<?php echo $respostas[3]->Asset->AssetAnswer->id ?>" />
      <label for="resposta1" class="preto"><?php echo $respostas[2]->Asset->AssetAnswer->getAnswer() ?></label><br />
      <!--/RESPOSTA 3-->


      
      <!--ENVIAR-->
      <div id="btn-nav" align="center">
        <img src="/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
        <input type="submit" name="votar" id="votar" class="btn-votar" value=""/>
      </div>
      <!--/ENVIAR-->
   
   </form>  
   <!--/FORMULARIO--> 
   
   <!--RESULTADO PARCIAL-->
   <div id="resultadoParcial" style="display:none;">
     <!--PERGUNTA-->
      <p>"Texto da pergunta da enquete do dia lorem ipsum sit dolor?"</p>
      <!--/PERGUNTA-->
     <span>Seu voto foi realizado com sucesso! Confira abaixo o resultado parcial da enquete:</span>
     <br/><br/>
     
      <!--PORCENTAGEM 1--> 
      <div class="resposta-1">
         <p>50% - <span><?php echo $respostas[0]->Asset->AssetAnswer->getAnswer() ?></span></p>
         <div class="porcentagem">
           <div class="progress progress-warning" style="margin-bottom: 9px;">
              <div class="bar" style="width: 50%"></div>
           </div>
         </div>
       </div>
     <!--/PORCENTAGEM 1-->
     
      <!--PORCENTAGEM 2--> 
      <div class="resposta-2">
         <p>50% - <span><?php echo $respostas[1]->Asset->AssetAnswer->getAnswer() ?></span></p>
         <div class="porcentagem">
           <div class="progress progress-warning" style="margin-bottom: 9px;">
              <div class="bar" style="width: 50%"></div>
           </div>
         </div>
       </div>
     <!--/PORCENTAGEM 2-->
      <!--PORCENTAGEM 3--> 
      <div class="resposta-3">
         <p>50% - <span><?php echo $respostas[2]->Asset->AssetAnswer->getAnswer() ?></span></p>
         <div class="porcentagem">
           <div class="progress progress-warning" style="margin-bottom: 9px;">
              <div class="bar" style="width: 50%"></div>
           </div>
         </div>
       </div>
     <!--/PORCENTAGEM 3-->
     

   </div>  
   <!--RESULTADO PARCIAL-->
     
</div>
<!--ENQUETE RAPIDA-->

<!--SCRIPT-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script>
$(document).ready(function(){
  
  //deixa resposta selecionada em negrito
  $('.resposta').click(function() {
    $("label").removeClass("selected");
    $(this).next("label").addClass("selected");
    $(this).next().next().addClass("selected");
  });
  
  //valida form
  var validator = $('.form-contato').validate({
    submitHandler: function(form){
      sendAnswer()
    },
    rules:{
        opcao:{
          required: true
        }
      },
      messages:{
        opcao: "Escolha uma opção."
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
    
  
});

//enviar voto
function sendAnswer(){
  $.ajax({
    type: "POST",
    dataType: "json",
    data: $("#e<?php echo $respostas[0]->Asset->getId()?>").serialize(),
    url: "<?php //echo url_for('homepage')?>ajax/enquetes",
    beforeSend: function(){
      $('#votar').hide();
      $('#ajax-loader').show();
    },
    success: function(data){
      var i=1;
      $.each(data, function(key, val) {
        $(".form-contato").hide();
        $("#resultadoParcial").fadeIn("fast"); 
        $('.resposta-'+i).html("<p>"+val.votes+"</p>");
        i++;
      });
     
    }
  });
  
}
</script>
<!--/SCRIPT-->

















