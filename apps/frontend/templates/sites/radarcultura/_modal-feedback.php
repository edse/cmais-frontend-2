
<!--FEEDBACK-->
<a class="position" href="#modal-feedback" class="" data-toggle="modal">
  <div class="btn-feedback" style="position: fixed;top:247px; left:0;"></div>
</a>  
<!--/FEEDBACK-->
<!-- Modal Feedback-->
<div id="modal-feedback" class="modal playlist hide fade">
    <div class="modal-header">
      <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2>Mande sua opinião</h2>
    </div>
    <div class="modal-body playlist">
      <form action="" method="post" id="form-feedback">
        <div class="control-group">
          <label>Nome</label>
          <input type="text" placeholder="Nome" name="nome" class="input-large required">
          <span class="help-block"></span>
        </div>  
        <div class="control-group">  
          <label>E-mail</label>
          <input type="text"  name="email" placeholder="email@dominio.com.br" class="input-large required">
          <span class="help-block"></span>
        </div> 
        
        <div class="control-group mensagem">  
          <label>Mensagem</label>
          <textarea name="mensagem" class="required" rows="4"></textarea>
          <span class="help-block"></span>
        </div>  
    
      <div class="modal-footer">
        <!-- <a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a> -->
        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader2"/>
        <input type="submit" class="btn btn-info btn-enviar" value="Enviar"/>
      </div>
    </form> 
    </div>              
  </div>
  <!--/ Modal Feedback-->
  <!-- Modal Feedback resposta-->
  <div id="modal-ok" class="modal playlist hide fade">
    <div id="ok" class="alert alert-block alert-in">
      <span class="badge"><strong>Obrigado pela sua participação!</strong></span><br/>
      <span> Sua opinião é muito importante pra nós!</span><br/><br/>
      <a href="#" class="close-modal">Fechar</a>
      <!--<span> Caso a janela não feche em 10 segundos <a href="#" class="close-modal">Clique aqui</a></span>-->
      
    </div>
  </div>
  <!-- /Modal Feedback resposta-->
  <!-- Modal Feedback resposta-->
  <div id="modal-error" class="modal playlist hide fade">
    <div id="error" class="alert alert-error alert-in">
      <span class="badge"><strong>Erro!</strong></span><br/>
      <span> Sua mensagem não foi enviada, tente novamente mais tarde</span><br/>
      <a href="#" class="close-modal">Fechar</a>
      <!--<span> Caso a janela não feche em 10 segundos <a href="#" class="close-modal">Clique aqui</a></span>-->
    </div>
  </div>
  <!-- /Modal Feedback resposta-->
  <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
  <script src="http://cmais.com.br/portal/js/messages_ptbr.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(document).scroll(function() {
      $('.btn-feedback').css({'position':'fixed','top':$('.position').offset().top + 157});     
      if($('.btn-feedback').offset().top > (parseInt($('.container').height()-$('.btn-feedback').height())))
      {
        $('.btn-feedback').css({'position':'absolute','top':parseInt($('.container').height()-$('.btn-feedback').height())});
      }
      else
      { 
        $('.btn-feedback').css({'position':'fixed','top':$('.position').offset().top +157});
      }
    });
    $('.btn-feedback').click(function(){ 
      $('html, body').animate({
        scrollTop: $("#guia-topo").offset().top
      }, "slow");
    });
    $('.close-modal').click(function(){
      $(".modal:visible").modal('hide');
    });
    var validator = $('#form-feedback').validate({
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
          minlength: 3
        }
      },
      highlight: function(label) {
        $(label).closest('.control-group').addClass('error');
      },
      success: function(label){
        label.text('OK!').addClass('valid').closest('.control-group').addClass('success');
      },
      submitHandler: function(form){
        $.ajax({
          type: "POST",
          dataType: "jsonp",
          url: "http://app.cmais.com.br/actions/radarcultura/feedback.php",
          data: $("#form-feedback").serialize(),
          beforeSend: function(){
            $('#loader2').show(); 
            $('.btn-enviar').hide();
          },
          success: function(data){
            $('#loader2').hide();
            $('.btn-enviar').show();
            if(data == "1"){
              $("#modal-feedback").modal('hide');
              $("#modal-ok").modal('show');
              setTimeout('$("#modal-ok").modal("hide");', 10000);
            }
            else{
              $("#modal-feedback").modal('hide');
              $("#modal-error").modal('show');
              setTimeout('$("#modal-error").modal("hide");', 10000);
            }
          }
        });
      }
    });
  });
</script>