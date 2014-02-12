<?php

$q = $assets[0]->AssetQuestion->getQuestion()."<br/>";
 
 //imagens respectivas das respostas
$imgs = $respostas[0]->Asset->retriveRelatedAssetsByAssetTypeId(2);
$img_0 = "http://midia.cmais.com.br/assets/image/image-4-b/".$imgs[0]->AssetImage->file.".jpg";
$imgs = $respostas[1]->Asset->retriveRelatedAssetsByAssetTypeId(2);
$img_1 = "http://midia.cmais.com.br/assets/image/image-4-b/".$imgs[0]->AssetImage->file.".jpg"; 
?>
<div class="enquete span12">

  <h3>enquete da semana</h3>
  <p><?php echo $q;?></p>
  <!--Pergunta-->
  <form method="post" id="e<?php echo $respostas[0]->Asset->getId()?>" class="form-voto navbar-form pull-left span12" <!--style="min-width:296px;--> ">
    <?php 
    $form = new BaseForm();
    echo $form->renderHiddenFields();
    ?>
    <div class="versus"></div>
    <?php for($i=0; $i<count($respostas); $i++): ?>
    <div class="span6 <?php if($i>0)echo "last"?>">
      <label class="radio" for="resposta<?php echo $i?>">
        <input type="radio" name="opcao" id="resposta<?php echo $i?>" class="resposta required" value="<?php echo $respostas[$i]->Asset->AssetAnswer->id ?>"  />
        <?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?>
        <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
        <div class="capa-img"><img class="" src="<?php echo $img; ?>" alt="" /></div>
      </label>
    </div>
    <?php endfor; ?>
    <div class="votar span12">
      <div class="ajax-loader">
       <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
      </div>
      <span></span>
      <input id="votar-input" class="span11" type="submit" value="votar" />
      <span class="last"></span>
    </div>
  </form>

  <!--/Pergunta-->
  <!--Resposta FORM INATIVA-->
  <form class="navbar-form pull-left inativo span12" style="display:none;">

    <div class="versus"></div>
    <?php for($i=0; $i<count($respostas); $i++): ?>
    <div class="span6 <?php if($i>0)echo "last"?>">
      <label class="radio"><?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?></label>
      <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
      <div class="capa-img"><img class="span12" src="<?php echo $img; ?>" alt="" /></div>
      <p class="resposta-<?php echo $i?>">50%</p>
    </div>
    <?php endfor;?>
     
    <a href="<?php echo $site->retriveUrl();?>/enquetes" title="Ver enquetes anteriores">Ver enquetes anteriores</a>
  </form>
  <!--/Resposta-->
</div>
<!-- /container-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script>
/* form tv cocorico */
$('.btn-form').click(function(){
 $('.destaque-home-tv').hide();
 $('.interatividade').fadeIn("fast"); 
})
$('#votar-input').click(function(){
  $('label.error').css('display','none');
});
//valida form
var validator = $('.form-voto').validate({
  submitHandler: function(form){
    sendAnswer()
  },
  rules:{
      opcao:{
        required: true
      }
    },
  messages:{
    opcao: ""
  }
});

//enviar voto
function sendAnswer(){
  $.ajax({
    type: "POST",
    dataType: "json", 
    data: $("#e<?php echo $respostas[0]->Asset->getId()?>").serialize(),
    url: "http://app.cmais.com.br/ajax/enquetes",
    beforeSend: function(){
      $('#votar-input, .votar span').hide();
      $('#ajax-loader').show();
    },
    success: function(data){
      $(".form-voto").hide();
      $("form.inativo").fadeIn("fast");
      var i=0;
      $.each(data, function(key, val) {
        
        $('.resposta-'+i).html(parseInt(parseFloat(val.votes))+"%");
        i++;
      });
    }
  });
  
}
</script>