            <!-- Modal -->
            <div id="modal" class="modal playlist hide fade">
              <div class="modal-header">
                <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2>Crie sua playlist</h2>
              </div>
              <form action="" method="post" id="form-indicacao-playlist">
                <div class="row-fluid">
                  <div class="span6">
                    <legend>Dados Pessoais</legend>
                  
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
                    <div class="control-group">
                      <label>Cidade</label>
                      <input type="text"  name="cidade" placeholder="Cidade" class="input-large required">
                      <span class="help-block"></span>
                    </div>  
                    <div class="control-group">  
                      <label>Estado</label>
                      <span class="help-block"></span>
                      <select class="estado required input-large"  name="estado" id="estado">
                          <option value="" selected="selected">--</option>
                          <option value="Acre">AC</option>
                          <option value="Alagoas">AL</option>
                          <option value="Amazonas">AM</option>
                          <option value="Amap&aacute;">AP</option>
                          <option value="Bahia">BA</option>
                          <option value="Cear&aacute;">CE</option>
                          <option value="Distrito Federal">DF</option>
                          <option value="Espirito Santo">ES</option>
                          <option value="Goi&aacute;s">GO</option>
                          <option value="Maranh&atilde;o">MA</option>
                          <option value="Minas Gerais">MG</option>
                          <option value="Mato Grosso do Sul">MS</option>
                          <option value="Mato Grosso">MT</option>
                          <option value="Par&aacute;">PA</option>
                          <option value="Para&iacute;ba">PB</option>
                          <option value="Pernambuco">PE</option>
                          <option value="Piau&iacute;">PI</option>
                          <option value="Paran&aacute;">PR</option>
                          <option value="Rio de Janeiro">RJ</option>
                          <option value="Rio Grande do Norte">RN</option>
                          <option value="Rond&ocirc;nia">RO</option>
                          <option value="Roraima">RR</option>
                          <option value="Rio Grande do Sul">RS</option>
                          <option value="Santa Catarina">SC</option>
                          <option value="Sergipe">SE</option>
                          <option value="S&atilde;o Paulo">SP</option>
                          <option value="Tocantins">TO</option>
                      </select>
                    </div>
                  </div>
                  <div class="span6">
                    <legend>Playlist</legend>
                    <div class="control-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="input-large required">
                      <span class="help-block"></span>
                    </div>
                    <div class="control-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="required" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <legend>Sugira até 5 músicas</legend>
                  </div>
                  <div class="row-fluid">
                    <div class="span6" style="margin: 0 0 0 0;">
                      <div class="control-group lista">
                        <input type="text" name="musica1" class="input-large required">
                        <span class="help-block"></span>
                      </div>
                      <div class="control-group lista">
                        <input type="text" name="musica2" class="input-large">
                        <span class="help-block"></span>
                      </div>
                      <div class="control-group lista">
                        <input type="text" name="musica3" class="input-large">
                        <span class="help-block"></span>
                      </div>
                    </div>
                    <div class="span6">
                      <div class="control-group lista">
                        <input type="text" name="musica4" class="input-large">
                        <span class="help-block"></span>
                      </div>
                      <div class="control-group lista last">
                        <input type="text" name="musica5" class="input-large">
                        <span class="help-block"></span>
                      </div>
                    </div>
                   </div>
                   <div class="modal-footer">
                      <!--<a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>-->
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader3"/>
                      <input type="submit" class="btn btn-info btn-enviar" value="Enviar"/>
                    </div>
                </form> 
              </div>   
            </div>
            <!-- Modal -->
          
        </div>
        <!--/topo Playlists/contagem-->
        
        <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
        <script src="http://cmais.com.br/portal/js/messages_ptbr.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function(){

            var validator = $('#form-indicacao-playlist').validate({
              rules:{
                nome:{
                  required: true,
                  minlength: 2
                },
                email:{
                  required: true,
                  email: true
                },
                cidade:{
                  required: true,
                  minlength: 3
                },
                estado:{
                  required: true,
                  minlength: 1
                }
              },
              highlight: function(label) {
                $(label).closest('.control-group').addClass('error');
              },
              success: function(label){
                label
                  .text('OK!').addClass('valid')
                  .closest('.control-group').addClass('success');
              },
              submitHandler: function(form){
                $.ajax({
                  type: "POST",
                  dataType: "jsonp",
                  url: "http://app.cmais.com.br/actions/radarcultura/playlist.php",
                  data: $("#form-indicacao-playlist").serialize(),
                  beforeSend: function(){
                    $('#loader3').show();
                    $('.btn-enviar').hide();
                  },
                  success: function(data){
                    $('#loader3').hide();
                    $('.btn-enviar').show();
                    if(data == "1"){
                      $("#modal").modal('hide');
                      $('.alert.radarIndex').hide();
                      $("#socialAlertOk").fadeIn('fast');
                      setTimeout('$("#socialAlertOk").hide();', 10000);
                      setTimeout('$(".alert.radarIndex").fadeIn("fast");', 10000);
                    }
                    else{
                      $("#modal").modal('hide');
                      $("#socialAlertError").fadeIn('fast');
                      setTimeout('$("#socialAlertError").fadeOut("slow");', 10000);
                    }
                  }
                });
              }
            });
          });
      </script>
