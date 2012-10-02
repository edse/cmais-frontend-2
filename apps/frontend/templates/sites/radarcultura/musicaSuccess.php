<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<?php $vars = explode(";", $asset->AssetContent->getHeadlineShort())?>

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
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'asset' => $asset)) ?>
      
      <!--topo menu/alert/logo-->
      <div class="row-fluid descricao">
        <!--titulo musica-->
        <div class="page-header musica">
          <h1><?php echo $asset->getTitle()?> <small><?php echo $asset->getDescription()?></small></h1>
            <!--contagem-->
            <div class="pull-right">
              <a href="javascript:;" class="btn btn-large btn-danger pull-right" id="socialBtn" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="javascript:postTwitter();">Twitter</a><a class="btn" href="javascript:postToFeed();">Facebook</a><a class="btn" href="javascript:postGoogle();">Google+</a></div><div class="btn-group"><a class="btn btn-email" data-toggle="modal" data-target="#modal">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Sugira esta música</a>     
            </div>
            <!--/contagem-->
          
        </div>
        <!--/titulo musica-->
        <!--modal-->
        <div id="modal" class="modal playlist hide fade">
          <!--modal-header-->  
          <div class="modal-header span12">
            <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2>Indique esta Música</h2>
          </div>
          <!--/modal-header-->
          <!--modal-body-->
          <div class="modal-body">
            <form action="" method="post" id="form-indicacao" class="span12">
              
              <div class="span6">
                <input type="hidden" name="section_id" value="1952" />
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
                <legend>Minha Indicação</legend>
                <div class="control-group">
                  <label>Título</label>
                  <input type="text" value="<?php echo $asset->getTitle()?>" class="input-large" disabled="disabled">
                  <span class="help-block"></span>
                </div>  
                <div class="control-group">  
                  <label>Intérprete</label>
                  <input type="text" value="<?php echo $asset->getDescription()?>" class="input-large" disabled="disabled">
                </div>  
                <div class="control-group">
                  <label>URL</label>
                  <input type="text" value="<?php echo $uri?>" placeholder="Cidade" class="input-large" disabled="disabled">
                </div>
              </div>
              <div class="row-fluid">
                <div class="modal-footer musica">
                  <a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>
                  <img src="/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader2"/>
                  <input type="submit" class="btn btn-primary btn-enviar" value="Enviar"></a>
                </div>
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
        
        /*
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=222430124549926";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
        FB.init({appId: "222430124549926", status: true, cookie: true});
        */
        
      });
  
      function postTwitter() {
        $('#socialBtn').popover('hide');
        popup('https://twitter.com/intent/tweet?hashtags=RadarCultura%2C&original_referer=<?php echo urlencode($uri)?>&source=tweetbutton&text=<?php echo urlencode("Minha indicação para o @radarcultura é: ".$asset->getTitle())?>&url=<?php echo urlencode($uri)?>', '', 600, 600);
      }
  
      function postGoogle() {
        $('#socialBtn').popover('hide');
        popup('https://plus.google.com/share?url=<?php echo urlencode($uri)?>','',600,600);
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
          link: '<?php echo $uri?>',
          name: '<?php echo $asset->getTitle()?>',
          caption: '<?php echo $asset->getDescription()?>',
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
      <!-- container -->
      <div class="row-fluid">
        <!--coluna esquerda-->
        <div class="span8" style="margin:0 0 0 0">
          <!--injformacoes-->
          <div class="row-fluid">
            <div class="span6">  
              <table class="table table-striped musicas">
                <tr>
                  <td>
                    <h4>Informações</h4>
                  </td> 
                </tr> 
                <tr>
                  <td><strong>Música</strong></td> 
                </tr>
                <tr>
                  <td><p><?php echo $asset->getTitle()?></p></td> 
                </tr>
                <tr>
                  <td><strong>Intérprete</strong></td> 
                </tr> 
                <tr>
                  <td><p><?php echo substr($asset->getDescription(), 4, strlen($asset->getDescription()))?></p></td> 
                </tr> 
                <tr>
                  <td><strong>Intérprete (2)</strong></td> 
                </tr> 
                <tr>
                <?php if($vars[5] != ""):?>
                  <td><p><?php echo $vars[5]?></p></td> 
                <?php else:?>
                  <td><p>Não disponível</p></td> 
                <?php endif;?>
                </tr> 
                <tr>
                  <td><strong>Compositor</strong></td> 
                </tr> 
                <tr>
                <?php if($vars[4] != ""):?>
                  <td><p><?php echo $vars[4]?></p></td> 
                <?php else:?>
                  <td><p>Não disponível</p></td> 
                <?php endif;?>
                </tr> 
                <tr>
                  <td><strong>Ano</strong></td> 
                </tr> 
                <tr>
                <?php if($vars[6] != ""):?>
                  <td><p><?php echo $vars[6]?></p></td> 
                <?php else:?>
                  <td><p>Não disponível</p></td> 
                <?php endif;?>
                </tr> 
                <tr>
                  <td><strong>Disco</strong></td> 
                </tr> 
                <tr>
                <?php
                $disco = explode($var[0], $vars[7]);
                ?>
                <?php
                 if($disco[0] != ""):?>
                  <td><p><?php echo $disco[0]?></p></td> 
                <?php else:?>
                  <td><p>Não disponível</p></td> 
                <?php endif;?>
                </tr> 
                <tr>
                  <td><strong>Sobre a canção</strong></td> 
                </tr>
                <tr>
                  <td>
                    <?php if($asset->AssetContent->getContent() != ""):?>
                      <?php echo html_entity_decode($asset->AssetContent->render()) ?>
                    <?php else:?>
                       Não disponível
                    <?php endif;?>
                  </td> 
                </tr> 
              </table>
            </div>
            <div class="span6">
              <table class="table table-striped musicas">
                <tr>
                  <td>
                    <h4>Letra</h4>
                  </td> 
                </tr>
                <tr>
                  <td>
                    <?php if($asset->AssetContent->getHeadlineLong()!="") echo $asset->AssetContent->getHeadlineLong(); else echo "Letra não disponível";?>
                  </td> 
                </tr> 
              </table>
            </div>
          </div>
          <!-- /informações -->
          
          <!-- comentario facebook -->
          <div class="container">
            <fb:comments href="<?php echo $uri?>" numposts="3" width="610" publish_feed="true"></fb:comments>
            <hr />
          </div>
          <!-- /comentario facebook -->
        </div>
        <!--/coluna esquerda-->
        <!--coluna direita-->
        <div class="span4 direita">
          <!--banner -->
          <div class="span12">
            <div class="banner-radio">
              <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
              </script>
            </div>
          </div>
          <!--/banner -->
          <!--sobre o programa-->
          <?php
              $displays = array();
              $block_sobre = Doctrine_Query::create()
                ->select('b.*')
                ->from('Block b, Section s')
                ->where('b.section_id = s.id')
                ->andWhere('s.slug = ?', 'home')
                ->andWhere('b.slug = ?', 'sobre-o-programa')
                ->andWhere('s.site_id = ?', $site->id)
                ->execute();
            
              if(count($block_sobre) > 0){
                $displays["sobre-o-programa"] = $block_sobre[0]->retriveDisplays();
              }
            ?>
            <?php if(isset($displays['sobre-o-programa'])):?>
              <?php if(count($displays['sobre-o-programa']) > 0): ?>
              <div class="thumbnail">
                <div class="page-header">
                  <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
                </div>
                <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
                <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre-o-programa'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
              </div>
              <?php endif; ?>
            <?php endif; ?>
            <!--/sobre o programa-->
            <!--como participar-->
            <?php
              $displays = array();
              $block_comoparticipar = Doctrine_Query::create()
                ->select('b.*')
                ->from('Block b, Section s')
                ->where('b.section_id = s.id')
                ->andWhere('s.slug = ?', 'home')
                ->andWhere('b.slug = ?', 'como-participar')
                ->andWhere('s.site_id = ?', $site->id)
                ->execute();
            
              if(count($block_comoparticipar) > 0){
                $displays["como-participar"] = $block_comoparticipar[0]->retriveDisplays();
              }
            ?>
           <?php if(isset($displays['como-participar'])):?>
              <?php if(count($displays['como-participar']) > 0): ?>       
                <div class="thumbnail">
                  <div class="page-header">
                    <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
                  </div>
                  <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
                  <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" title="<?php echo $displays['como-participar'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                </div>
              <?php endif; ?>
            <?php endif; ?>
            <!--/como participar-->
            <!--banner-->
            <div class="">
              <div class="banner-radio">
                <script type='text/javascript'>
                  GA_googleFillSlot("home-geral300x250");
                </script>
              </div>
            </div>
            <!--/banner-->
         </div>
         <!--/coluna direita-->
         
         <?php $relacionados = $asset->retriveRelatedAssetsByAssetTypeId(1); ?>
         <?php if(count($relacionados) > 0): ?>
         <!--pela web-->  
         <div class="row-fluid">
            <div class="span12 page-header">
              <h3>Pela Web <small> quem já indicou essa música</small></h3>
            </div>
            <!-- pitaco -->
            <div class="thumbnails">
            <?php foreach($relacionados as $k=>$d): ?> 
              <!--item-->
              <div class="span4">
                <div class="row-fluid redes ">
                  <div class="thumbnail">
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
              </div>
              <!--/item-->
            <?php endforeach; ?>
            </div>
            <!-- /pitaco -->
          </div>
          <!--pela web-->
          <?php endif; ?>
          
          <!--banner horizontal-->    
          <div class="container">
            <div class="banner-radio horizontal">
              <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-728x90");
              </script>
            </div>
          </div>
          <!--banner horizontal-->
      
    </div>
    <!--/container-->  
  </div>  
  <!--container-->       
     