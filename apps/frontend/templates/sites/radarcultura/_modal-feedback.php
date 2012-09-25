<!--FEEDBACK-->
<div class="btn-feedback">
  <a href="#modal-feedback" class="" data-toggle="modal">Feedback</a>
</div>  
<!--/FEEDBACK-->
<!-- Modal Feedback-->
<div id="modal-feedback" class="modal playlist hide fade">
    <div class="modal-header">
      <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2>Mande sua opinião</h2>
    </div>
    <div class="modal-body playlist">
      <form action="" method="post" id="form-feedback" class="span5">
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
        <a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>
        <img src="/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader2"/>
        <input type="submit" class="btn btn-primary btn-enviar" value="Enviar"></a>
      </div>
    </form> 
    </div>              
  </div>
  <!--/ Modal Feedback-->