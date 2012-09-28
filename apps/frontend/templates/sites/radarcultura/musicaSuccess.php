<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
      
      <!--topo menu/alert/logo-->
      <div class="row-fluid">
        <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
      </div>
      <div class="row-fluid">  
        <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
      </div>
      <!--topo menu/alert/logo-->
      <div class="row-fluid descricao">
        <!--titulo musica-->
        <div class="page-header">
          <h1>Colagem <small>por Elis Regina</small>
          <a href="javascript:;" class="btn btn-large btn-danger pull-right" id="socialBtn" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="javascript:postTwitter();">Twitter</a><a class="btn" href="javascript:postToFeed();">Facebook</a><a class="btn" href="javascript:postGoogle();">Google+</a></div><div class="btn-group"><a class="btn btn-email" data-toggle="modal" data-target="#modal">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Indique essa música para tocar no RadarCultura</a>
          </h1>
        </div>
        <!--/titulo musica-->
        <!--modal-->
        <div id="modal" class="modal hide fade">
          <!--modal-header-->  
          <div class="modal-header">
            <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2>indique esta música</h2>
          </div>
          <!--/modal-header-->
          <!--modal-body-->
          <div class="modal-body">
            <form action="" method="post" id="form-indicacao" class="span5">
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
              <legend>Minha Indicação</legend>
              <div class="control-group">
                <label>Título</label>
                <input type="text" class="input-large" disabled="disabled">
                <span class="help-block"></span>
              </div>  
              <div class="control-group">  
                <label>Intérprete</label>
                <input type="text" placeholder="email@dominio.com.br" class="input-large" disabled="disabled">
              </div>  
              <div class="control-group">
                <label>URL</label>
                <input type="text" placeholder="Cidade" class="input-large" disabled="disabled">
              </div>
              <div class="control-group">
                <label>Imagem</label>
                <img src="" alt="Imagem"/>
              </div>  
              <div class="modal-footer">
                <a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>
                <img src="/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader2"/>
                <input type="submit" class="btn btn-primary btn-enviar"></a>
              </div>
            </form> 
             
          </div>
          <!--/modal-body-->
        </div>
        <!--/modal-->
        <!--scripts-->
        <script type="text/javascript" src="/portal/js/validate/jquery.validate.min.js"></script>
        <script src="/portal/js/messages_ptbr.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          
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
            },
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
      <!--script-->
    </div>  
    <!--/descricao-->
  </div>  
  <!--container-->       
     