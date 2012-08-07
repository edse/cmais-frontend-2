<!--BOOTSTRAP-->
<script src="/portal/js/bootstrap/bootstrap.min.js"></script>
<!--BOOTSTRAP-->

<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="/portal/js/bootstrap/css/style.css">
<!-- /CSS BOOTSTRAP -->

<div id="enqueteRapida" >
        
    <h2>ENQUETE COCÓRICO</h2>
    
    <!--FORMULARIO-->
    <form id="form-contato" action="" method="post" >
      
      <!--PERGUNTA-->
      <p><?php echo $respostas[0]->Asset->AssetQuestion->question ?></p>
      <!--/PERGUNTA-->

      <!--RESPOSTA 1-->
      <input type="radio" name="resposta" id="resposta-<?php echo $respostas[1]->Asset->AssetAnswer->id ?>" class="resposta" value="<?php echo $respostas[1]->Asset->AssetAnswer->id ?>" checked="checked" />
      <label for="resposta1" class="preto selected"><?php echo $respostas[1]->Asset->AssetAnswer->getAnswer() ?></label><br />
      <!--/RESPOSTA 1-->
      
      <!--RESPOSTA 2-->
      <input type="radio" name="resposta" id="resposta-<?php echo $respostas[2]->Asset->AssetAnswer->id ?>" class="resposta" value="<?php echo $respostas[2]->Asset->AssetAnswer->id ?>"/>
      <label for="resposta1" class="preto selected"><?php echo $respostas[2]->Asset->AssetAnswer->getAnswer() ?></label><br />
      <!--/RESPOSTA 2-->
      
      <!--RESPOSTA 3-->
      <input type="radio" name="resposta" id="resposta-<?php echo $respostas[3]->Asset->AssetAnswer->id ?>" class="resposta" value="<?php echo $respostas[3]->Asset->AssetAnswer->id ?>" />
      <label for="resposta1" class="preto selected"><?php echo $respostas[3]->Asset->AssetAnswer->getAnswer() ?></label><br />
      <!--/RESPOSTA 3-->


      
      <!--ENVIAR-->
        <div id="btn-nav" align="center">
          <img src="/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
          <input type="submit" name="votar" id="votar" class="btn-votar" value=""/>
        </div>
        <!--/ENVIAR-->
   
   </form>  
   <!--/FORMULARIO--> 
   
   <div id="resultadoParcial" style="display:none;">
     <!--PERGUNTA-->
      <p>"Texto da pergunta da enquete do dia lorem ipsum sit dolor?"</p>
      <!--/PERGUNTA-->
     <span>Seu voto foi realizado com sucesso! Confira abaixo o resultado parcial da enquete:</span>
     <br/><br/>
     
      <!--PORCENTAGEM 1--> 
     <p>50% - <span>Resposta 1</span></p>
     <div class="porcentagem">
       <div class="progress progress-warning" style="margin-bottom: 9px;">
          <div class="bar" style="width: 50%"></div>
       </div>
     </div>
     <!--/PORCENTAGEM 1-->
     
     <!--PORCENTAGEM 2-->
     <p>30%- <span>Resposta 2</span></p>
     <div class="porcentagem">
       <div class="progress progress-warning" style="margin-bottom: 9px;">
          <div class="bar" style="width: 30%"></div>
       </div>  
     </div>
     <!--/PORCENTAGEM 2-->
     
     <!--PORCENTAGEM 3-->
     <p>20%- <span>Resposta 3</span></p>
     <div class="porcentagem">
       <div class="progress progress-warning" style="margin-bottom: 9px;">
          <div class="bar" style="width: 20%"></div>
       </div>
     </div>
     <!--/PORCENTAGEM 3-->
   </div>    
</div>

<!--SCRIPT-->
<script>
$(document).ready(function(){
  
  //deixa resposta selecionada em negrito
  $('.resposta').click(function() {
    $("label").removeClass("selected");
    $(this).next("label").addClass("selected");
  });
  
  $("#votar").click(function(){
    $("#form-contato").hide();
    $("#resultadoParcial").fadeIn("fast"); 
  });
  
});
</script>
<!--/SCRIPT-->

















