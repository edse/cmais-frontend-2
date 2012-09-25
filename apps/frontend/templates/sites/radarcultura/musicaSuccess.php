<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback', array('site' => $site)) ?>
			       
			<?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
			       
      <!-- logo --->
      <div class=" row pull-right">
        <ul class="span2 direita row pull-right">
          <li class="span2 logo row pull-right">
            <img src="/radar2012/images/Logo-Radar.jpg" alt="Radar Cultura"  style="width:90%;"/>
          </li>
          <li class="span2 row">
            <a href="javascript: window.open('http://172.20.17.129/radar2012/player.html?start=am','controle','width=450,height=150,left=50,top=50,scrollbars=no'); return false;" class="btn btn-inverse btn-mini"><i class="icon-music icon-white"></i> Ouvir a Rádio Cultura Brasil</a>
          </li>
        </ul>  
      </div>
      <!-- logo --->
      
			<?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section' => $section)) ?>
                
     <div class="span12 row">
   
        <section id="row descricao">
          <div class="page-header">
            
            <h1>Colagem <small>por Elis Regina</small>
              <a href="javascript:;" class="btn btn-large btn-danger pull-right" id="socialBtn" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="javascript:postTwitter();">Twitter</a><a class="btn" href="javascript:postToFeed();">Facebook</a><a class="btn" href="javascript:postGoogle();">Google+</a></div><div class="btn-group"><a class="btn btn-email" data-toggle="modal" data-target="#modal">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Indique essa música para tocar no RadarCultura</a>
            </h1>
            <div id="modal" class="modal hide fade">
              <div class="modal-header">
                <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2>indique esta música</h2>
              </div>
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
                    
            </div>
            
            <script>
            $(document).ready(function() {
              //$('#popover').popover('show');
              $('#socialBtn').popover({
                placement:"left",
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
  
          </div>
        </section>
      </div>  
      <!-- informações -->
      <div class="span12 row-fluid">
        <div class="span8 row-fluid">
          <table class="table table-striped span6">
            <tr>
              <td>
                <h4>Informações</h4>
              </td> 
            </tr> 
            <tr>
              <td><strong>Música</strong></td> 
            </tr>
            <tr>
              <td><p>Colagem</p></td> 
            </tr>
            <tr>
              <td><strong>Intérprete</strong></td> 
            </tr> 
            <tr>
              <td><p>Colagem</p></td> 
            </tr> 
            <tr>
              <td><strong>Compositor</strong></td> 
            </tr> 
            <tr>
              <td><p>Colagem</p></td> 
            </tr> 
            <tr>
              <td><strong>Sobre a canção</strong></td> 
            </tr>
            <tr>
              <td>
                <p>
                   cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. 
                   cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                   cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                </p>
              </td> 
            </tr> 
          </table>
          <table class="table table-striped span6">
            <tr>
              <td>
                <h4>Letra</h4>
              </td> 
            </tr>
            <tr>
              <td>
                <p>
                  Se você com muita calma usar sua raça<br> 
                  Vai surpreender<br> 
                  A surpresa para muitos é uma arma<br> 
                  Pra se esconder</p>
                  <p>Se esconder não é tão bom<br> 
                  Pra viver, pra morrer<br> 
                  Se você lembrar que tudo é relativo<br> 
                  Vai compreender</p>
                  <p>E a compreensão por vezes tão sensata<br> 
                  Vai lhe conter<br> 
                  Se conter não é tão bom<br> 
                  Pra viver, pra morrer<br> 
                  Pra viver, pra morrer</p>
                  <p>Se você tentar despir essa colagem<br> 
                  Vai se perder<br> 
                  E a perda de si próprio é quase um passo<br> 
                  Pra conceder</p>
                  <p>Conceder não é tão bom<br> 
                  Pra viver, pra morrer, pra nascer<br> 
                  Somos homens sem lugar<br> 
                  Homens velhos com raça</p>
                  <p>À espera de algum descuido<br> 
                  E com cuidado gozamos paz<br> 
                  Somos homens bons demais<br> 
                  Sufocados pelo mal</p>
                  <p>Só queremos acreditar<br> 
                  Que isso tudo<br> 
                  Pode acabar<br> 
                </p>
              </td> 
            </tr> 
          </table>
          <!-- comentario facebook -->
          <div class="container face span12">
            <fb:comments href="http://cmais.com.br" numposts="3" width="610" publish_feed="true"></fb:comments>
            <hr />
          </div>
          <!-- /comentario facebook -->
          
        </div>
          <ul class="direita span4 pull-right">
              <li class="span12">
                <div class="banner-radio">
                  <script type='text/javascript'>
                    GA_googleFillSlot("cmais-assets-300x250");
                  </script>
                </div>
              </li>
              <li class="span12">
                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4>Sobre o programa</h4>
                    </div>
                    <p>cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="asset-conteudo-sobre.html" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                </div>
              </li>
              <li class="span12">
                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4>Como Participar</h4>
                    </div>
                    <p>cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="asset-conteudo-como-participar.html" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                </div>
              </li>
              <li class="span12">
                <div class="banner-radio">
                  <script type='text/javascript'>
                    GA_googleFillSlot("home-geral2-300x250");
                  </script>
                </div>
              </li>
            </ul>
        </div>
        
        <?php $relacionados = $asset->retriveRelatedAssetsByAssetTypeId(1); ?>
        <?php 
        echo "<br>asset_id>>>".$asset->getId();
        echo "<br>related_id>>>".$relacionados[0]->getId();
        ?>
            
        <?php if(count($relacionados) > 0): ?>
        	
        	        
        <div class="row-fluid">
          <div class="span12 page-header">
            <h3>Pela Web <small> quem já indicou essa música</small></h3>
          </div>
  
          <!-- lista -->
          <ul class="thumbnails">

          <?php foreach($relacionados as $k=>$d): ?> 
            <!--item-->
            <li class="span4">
              <div class="row-fluid redes ">
                <div class="span12 thumbnail">
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                    <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                  </a>
                  <div class="page-header">
                    <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                  </div>
                  <img src="<?php echo $d->AssetContent->getHeadline() ?>" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                  <p><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                  <!--<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> indique essa música</a>-->
                </div>
              </div>
            </li>
            <!--/item-->
            <?php endforeach; ?>
                      
          
          </ul>
          <!-- /lista -->
        </div>  
		  <?php else:?>
		 	<h1>
				<a href="javascript:;" class="btn btn-large btn-danger pull-right" id="socialBtn" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="javascript:postTwitter();">Twitter</a><a class="btn" href="javascript:postToFeed();">Facebook</a><a class="btn" href="javascript:postGoogle();">Google+</a></div><div class="btn-group"><a class="btn btn-email" data-toggle="modal" data-target="#modal">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Indique essa música para tocar no RadarCultura</a>
			</h1>
		 <?php endif; ?>
  
        <div class="container pull-left">
          <div class="banner-radio">
            <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
        </div>
            
      </div>

      <!-- /informações -->

     </div>
    
  </body>
</html>  