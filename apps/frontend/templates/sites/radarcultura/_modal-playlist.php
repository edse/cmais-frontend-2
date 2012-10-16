              <!-- Modal -->
            <div id="modal" class="modal playlist hide fade">
              <div class="row-fluid">
                <div class="page-header">
                  <h2>Sugira uma playlist</h2>
                </div>
              </div>
              <form action="" method="post" id="form-indicacao">
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
                      <input type="text" class="input-large required">
                      <span class="help-block"></span>
                    </div>
                    <div class="control-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="required"></textarea>
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
                        <input type="text" name="musica2" class="input-large required">
                        <span class="help-block"></span>
                      </div>
                      <div class="control-group lista">
                        <input type="text" name="musica3" class="input-large required">
                        <span class="help-block"></span>
                      </div>
                    </div>
                    <div class="span6">
                      <div class="control-group lista">
                        <input type="text" name="musica4" class="input-large required">
                        <span class="help-block"></span>
                      </div>
                      <div class="control-group lista last">
                        <input type="text" name="musica5" class="input-large required">
                        <span class="help-block"></span>
                      </div>
                    </div>
                   </div>
                   <div class="modal-footer">
                      <a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>
                      <img src="/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader2"/>
                      <input type="submit" class="btn btn-primary btn-enviar" value="Enviar"/>
                    </div>
                </form> 
              </div>   
            </div>
            <!-- Modal -->
        
      </div>
      <!--/topo Playlists/contagem-->
              <script type="text/javascript" src="/portal/js/validate/jquery.validate.min.js"></script>
              <script src="/portal/js/messages_ptbr.js" type="text/javascript"></script>
              <script type="text/javascript">
              $(document).ready(function(){

                $('#socialBtn').click(function(){ 
                  $('html, body').animate({
                    scrollTop: $("#guia-topo").offset().top
                  }, "slow");
                });
                
                var validator = $('#form-indicacao').validate({
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
                      dataType: "text",
                      data: $("#form-indicacao").serialize(),
                      beforeSend: function(){
                        $('#loader2').show();
                        $('.btn-enviar').hide();
                      },
                      success: function(data){
                        window.location.href="javascript:;";
                        if(data == "1"){
  
                        }
                        else {
  
                        }
                      }
                    });         
                  }
                });
              });
          </script>
          <script>
            $(document).ready(function() {
              //$('#popover').popover('show');
              $('#socialBtn').popover({
                placement:"left"
              });
              
              $('.btn-fechar').click(function(){
                $('#socialBtn').popover('hide');
              });
  
              var params = getUrlParams();
              if(params.shared == "true"){
                $('#socialBtn').hide();
                $('#socialAlert').fadeIn();
              }
              
              (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=222430124549926";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
              
              FB.init({appId: "222430124549926", status: true, cookie: true});
              
            });
        
            function postTwitter() {
              $('#socialBtn').popover('hide');
              popup('https://twitter.com/intent/tweet?hashtags=RadarCultura%2C&original_referer=http%3A%2F%2Fintense-shore-1681.herokuapp.com%2Fhtml%2Fmusica.html&source=tweetbutton&text=Minha%20indica%C3%A7%C3%A3o%20para%20o%20%23RadarCultura&url=http%3A%2F%2Fintense-shore-1681.herokuapp.com%2Fhtml%2Fmusica.html', '', 600, 600);
            }
        
            function postGoogle() {
              $('#socialBtn').popover('hide');
              popup('https://plus.google.com/share?url=http%3A%2F%2Fintense-shore-1681.herokuapp.com%2Fhtml%2Fmusica.html','',600,600);
            }
  
        
            /*
            function postFacebook() {
              $('#socialBtn').popover('hide');
              $('#socialBtn').hide();
              $('#socialLoading').fadeIn();
              self.location.href='postToFacebook.php';
            }
            */
        
            function postToFeed() {
              // calling the API ...
              var obj = {
                method: 'feed',
                link: 'http://intense-shore-1681.herokuapp.com/html/musica.html',
                picture: 'http://www.allaboutjazz.com/media/large/d/2/5/5d9e4ace2742c66cf7c23f623db19.jpg',
                name: 'Colagem',
                caption: 'por Elis Regina',
                description: 'Minha indicação para o RadarCultura'
              };
              function callback(response) {
                console.log(response);
                document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
                //obj
                opts= "post_id="+response['post_id'];
                //loading
                $('#socialBtn').popover('hide');
                $('#socialBtn').hide();
                $('#socialLoading').fadeIn();
                
                $.ajax({
                  url: 'http://cmais.com.br/actions/radarcultura/facebookPost.php',
                  data: opts,
                  dataType: "html",
                  success: function(data) {
                    $('#socialLoading').fadeOut();
                    if(data == "1"){
                      $('#socialAlert').fadeIn();
                    }else{
                      alert('erro');
                    }
                  }
                });
              }
              FB.ui(obj, callback);
            }
        
            function popup(url,name,windowWidth,windowHeight){
              myleft=(screen.width)?(screen.width-windowWidth)/2:100;
              mytop=(screen.height)?(screen.height-windowHeight)/2:100;
              properties = "width="+windowWidth+",height="+windowHeight;
              properties +=",scrollbars=yes, top="+mytop+",left="+myleft;
              window.open(url,name,properties);
            }
            
            function getUrlParams() {
              var params = {};
              window.location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str,key,value) {
                params[key] = value;
              });
              return params;
            }
            </script>