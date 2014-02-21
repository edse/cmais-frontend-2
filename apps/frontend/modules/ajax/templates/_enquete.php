<?php if(isset($asset)): ?>
  <!-- ENQUETE -->
  <div class="conteudo enquete">
    <div class="txt-padrao">
      <p><?php echo $asset->getTitle() ?> - <?php echo $asset->AssetQuestion->getQuestion() ?></p>
      <div id="form">
        <form id="e<?php echo $asset->getId()?>" method="post">
          <?php
           $form = new BaseForm();
           echo $form->renderHiddenFields() ?>
          <?php foreach($asset->AssetQuestion->Answers as $a): ?>
          <label class="radio">
            <input type="radio" id="opcao<?php echo $a->getId() ?>" name="opcao" class="required" value="<?php echo $a->getId() ?>" />
            <?php echo $a->getAnswer() ?>
          </label>
          <?php endforeach; ?>
          <input class="votar escuro" type="submit" value="votar" id="votar" />
          <img src="/images/spinner_bar.gif" style="display: none" id="v_load" />
        </form>
      </div>
      <div style="display:none" class="resultado" id="r<?php echo $asset->getId()?>"></div>
    </div>
  </div>
  <div class="detalhe-borda grid1"></div>
  <!-- Script Enquetes -->
  <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
  <script>
    $(document).ready(function(){
      var validator = $('#e<?php echo $asset->getId()?>').validate({
        submitHandler: function(form){
          $.ajax({
            type: "POST",
            dataType: "jsonp",
            data: $("#e<?php echo $asset->getId()?>").serialize(),
            url: "http://app.cmais.com.br/ajax/enquetes",
            beforeSend: function(){
              $('#votar').hide();
              $('#v_load').show();
            },
            success: function(data){
              $.each(data, function(key, val) {
                $('#r<?php echo $asset->getId()?>').append('<p>'+val.answer+'</p>');
                $('#r<?php echo $asset->getId()?>').append('<div class="progress progress-danger"><div class="bar" style="width: '+val.votes+'">'+val.votes+'</div></div>');
              });
              //alert(data)
              $('#r<?php echo $asset->getId()?>').show();
              $('#form').hide(); 
              $('#v_load').hide();
            }
          });
        }
      });
    });
  </script>
  <!-- /ENQUETE -->
<?php endif; ?>
