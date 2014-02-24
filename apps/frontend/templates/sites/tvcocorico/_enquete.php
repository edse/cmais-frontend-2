<!--BOOTSTRAP-->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.min.js"></script>
<!--BOOTSTRAP-->

<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/style.css">
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
      <p>"<?php echo $q ?>"</p>
      <!--/PERGUNTA-->
      
    <?php
    for($i=0; $i<count($respostas); $i++){
      ?>
      <!--RESPOSTA -->
      <input type="radio" name="opcao" id="resposta<?php echo $i?>" class="resposta required" value="<?php echo $respostas[$i]->Asset->AssetAnswer->id ?>"  />
      <label for="resposta<?php echo $i?>" class="preto"><?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?></label><br />
      <!--/RESPOSTA -->
      <?php
    }
    ?>
      
      <!--ENVIAR-->
      <div id="btn-nav" align="center">
        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
        <input type="submit" name="votar" id="votar" class="btn-votar" value=""/>
      </div>
      <!--/ENVIAR-->
   
   </form>  
   <!--/FORMULARIO--> 
   
   <!--RESULTADO PARCIAL-->
   <div id="resultadoParcial" style="display:none;">
     <!--PERGUNTA-->
      <p>"<?php echo $q ?>"</p>
      <!--/PERGUNTA-->
     <span>Seu voto foi realizado com sucesso! Confira abaixo o resultado parcial da enquete:</span>
     <br/><br/>


    <?php
    for($i=0; $i<count($respostas); $i++){
      ?>
      <!--PORCENTAGEM --> 
      <div class="resposta-<?php echo $i?>">
         <p>50% - <span><?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?></span></p>
         <div class="porcentagem">
           <div class="progress progress-warning" style="margin-bottom: 9px;">
              <div class="bar" style="width: 50%"></div>
           </div>
         </div>
       </div>
     <!--/PORCENTAGEM -->
      <?php
    }
    ?>

   </div>  
   <!--RESULTADO PARCIAL-->
     
</div>
<!--ENQUETE RAPIDA-->

<!--SCRIPT-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
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
      }
    });
    
  
});

//enviar voto
function sendAnswer(){
  $.ajax({
    type: "POST",
    dataType: "jsonp",
    data: $("#e<?php echo $respostas[0]->Asset->getId()?>").serialize(),
    url: "http://app.cmais.com.br/ajax/enquetes",
    beforeSend: function(){
      $('#votar').hide();
      $('#ajax-loader').show();
    },
    success: function(data){
      $(".form-contato").hide();
      $("#resultadoParcial").fadeIn("fast");
      var i=0;
      $.each(data, function(key, val) {
        $('.resposta-'+i).html("<p>"+val.votes+" - <span>"+val.answer+"</span></p><div class='porcentagem'><div class='progress progress-warning' style='margin-bottom: 9px;'><div class='bar' style='width:"+val.votes+" '></div></div></div>");
        i++;
      });
     
    }
  });
  
}
</script>
<!--/SCRIPT-->