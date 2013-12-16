

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

 <!-- Le styles--> 
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
 
    
    <!--container-->
    <div class="container">
      
        <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
        <!--topo menu/alert/logo-->
        <div id="socialLoading" class="alert alert-info radarIndex alert-in hide">
          <span class="badge"><strong>Aguarde um momento</strong><img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="margin: 0 30px;" width="16px" height="16px" id="loader3" /></span><button type="button" class="close" data-dismiss="alert">×</button>
        </div>
        <div class="row-fluid" style="margin:10px 0 0 0;"> 
          <div id="socialAlertOk" class="alert alert-info radarIndex alert-in hide">
            <span class="badge"><strong>Obrigado pela sua participação!</strong></span><span> Em breve, essa playlist irá ao ar no RadarCultura. Fique ligado!</span><button type="button" class="close" data-dismiss="alert">×</button>
          </div>
          <div id="socialAlertError" class="alert alert-error alert-in hide">
            <span class="badge"><strong>Ocorreu um erro!</strong></span><span> Por favor, tente novamente em alguns instantes.</span><button type="button" class="close" data-dismiss="alert">×</button>
          </div>      
        </div>
          
        <div class="page-header playlist">
        <div class="row-fluid">  
          <?php //include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
          <?php include_partial_from_folder('blocks', 'global/menu_reduzido_abrace', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
        </div>
        <!--topo menu/alert/logo-->
        
        <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'asset' => $asset)) ?>

          
          <h1><?php echo $asset->getTitle() ?><small><?php echo $asset->getDescription() ?></small></h1>
          
       
            <div class="btn-group pull-right">
              <!--a href="javascript:;" class="btn btn-large btn-info socialBtn" id="socialBtn-1" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="javascript:postTwitter();">Twitter</a><a class="btn" href="javascript:postToFeed();">Facebook</a><a class="btn" href="javascript:postGoogle();">Google+</a></div><div class="btn-group"><a class="btn btn-email" href="#" onClick="javasript:goTop();" data-toggle="modal" data-target="#modal-1">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Participe dessa playlist</a-->
              <a href="javascript:;" class="btn btn-large btn-info socialBtn" id="socialBtn-1" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a onClick="javascript:popOverHide();" class="btn" href="https://twitter.com/intent/tweet?hashtags=RadarCultura%2C&original_referer=<?php echo urlencode($uri)?>&source=tweetbutton&text=<?php echo urlencode("@radarcultura sugestão para ".$asset->getTitle())?>&url=<?php echo urlencode($uri)?>">Twitter</a><a class="btn" href="#" onClick="javascript:goTop()" data-toggle="modal" data-target="#modal-facebook">Facebook</a><a class="btn" href="#" onClick="javascript:goTop()" data-toggle="modal" data-target="#modal-google">Google+</a></div><div class="btn-group"><a class="btn btn-email" href="#" onClick="javascript:goTop()" data-toggle="modal" data-target="#modal-1">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i>Participe dessa playlist</a>
              <a href="javascript:;" class="btn btn-large btn-info" id="socialBtn" data-toggle="modal" data-target="#modal"><i class="icon-share-alt icon-white"></i> Crie sua playlist</a>
            </div>
        </div>
        
        <!--modal facebook-->
        <div id="modal-facebook" class="modal playlist hide fade" name="facebook">
         <button type="button" class="close btn-fechar btn-fechar-redes" data-dismiss="modal" aria-hidden="true">&times;</button>
         <div class="ajuda-face p"></div> 
         <a class="avancar" href="javascript:postToFeed();">Avançar</a>
        </div>  
        <!--/modal facebook-->
        <!--modal google-->
        <div id="modal-google" class="modal playlist hide fade" name="google">
          <button type="button" class="close btn-fechar btn-fechar-redes" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="ajuda-google p"></div>
          <a class="avancar" href="javascript:postGoogle();">Avançar</a>
          
        </div>  
        <!--/modal google-->
        <!--modal-->
        <!--modal-->
        <div id="modal-1" class="modal musicas hide fade">
          <!--modal-header-->  
          <div class="modal-header">
            <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2>Indique uma música para esta playlist</h2>
          </div>
          <!--/modal-header-->
          <!--modal-body-->
          <div class="modal-body" class="row-fluid">
            <form action="" method="post" id="form-indicacao-playlist-musica" class="row-fluid">
              
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
                  <input type="text" name="titulo" class="input-large required">
                  <span class="help-block"></span>
                </div>  
                <div class="control-group">  
                  <label>Intérprete</label>
                  <input type="text" name="interprete" class="input-large required">
                </div>  
                <input type="hidden" name="url" value="<?php echo $uri?>" />

              </div>
              <div class="row-fluid">
                <div class="modal-footer musica">
                  <!--<a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>-->
                  <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader3" />
                  <input type="submit" class="btn btn-info btn-enviar" value="Enviar"/>
                </div>
              </div>
            </form> 
            <!--scripts-->
        <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
        <script src="http://cmais.com.br/portal/js/messages_ptbr.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          
          var validator = $('#form-indicacao-playlist-musica').validate({
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
              },
              titulo:{
                required: true,
                minlength: 1
              },
              interprete:{
                required: true,
                minlength: 1
              }/*,
              url:{
                required: true,
                minlength: 1
              }*/
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
                url: "/actions/radarcultura/playlistMusica.php",
                data: $("#form-indicacao-playlist-musica").serialize(),
                beforeSend: function(){
                  $('#loader3').show();
                  $('.btn-enviar').hide();
                },
                success: function(data){
                  $('#loader3').hide();
                  $('.btn-enviar').show();
                  if(data == "1"){
                    $("#modal-1").modal('hide');
                    $('#socialBtn-1').popover('hide');
                    alertOk();
                  }
                  else{
                    $("#modal-1").modal('hide');
                    $('#socialBtn-1').popover('hide');
                    $("#socialAlertError").fadeIn('fast');
                    setTimeout('$("#socialAlertError").fadeOut("slow");', 10000);
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
        $('#socialBtn-1').popover({
          placement:"left"
        });
        $('#socialBtn').click(function(){
          $('#socialBtn-1').popover('hide');
          $('html, body').animate({
          scrollTop: $("#guia-topo").offset().top
            }, "slow");
          });
          
        $('.btn-fechar').click(function(){
          $('#socialBtn-1').popover('hide');
        });
        $('.avancar').click(function(){
          popOverHide();
          goTop();
        })
      });
      function popOverHide(){
        $("#modal-google").modal('hide');
        $("#modal-facebook").modal('hide');
        $("#socialBtn-1").popover("hide");
      };
      function goTop(){
        $('html, body').animate({
          scrollTop: $("#guia-topo").offset().top
        }, "slow");
       };
       function alertOk(){
        $("#socialAlertOk").fadeIn('fast');
        setTimeout('$("#socialAlertOk").hide();', 10000);
       };
      //////////////////////
      twttr.events.bind('tweet', function(event) {
        $('#socialBtn-1').popover('hide');
        alertOk();
        goTop();
      });
      <?php 
       /*
      function postTwitter() {
        $('#socialBtn').popover('hide');
        popup('https://twitter.com/intent/tweet?hashtags=RadarCultura%2C&original_referer=<?php echo urlencode($uri)?>&source=tweetbutton&text=<?php echo urlencode("Minha indicação para o @radarcultura é: ".$asset->getTitle())?>&url=<?php echo urlencode($uri)?>', '', 600, 600);
      }
       */
      ?>
      function postGoogle() {
        $('#socialBtn').popover('hide');
        popup('https://plus.google.com/share?url=<?php echo urlencode($uri)?>','',600,600);
      }
      
      function postToFeed() {
        // calling the API ...
        var obj = {
          method: 'feed',
          link: '<?php echo $uri?>',
          name: '<?php echo $asset->getTitle()?>',
          caption: '<?php echo $asset->getDescription()?>',
          description: 'indicação de música para essa playlist'
        };
        function callback(response) {
          //console.log(response);
          //document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
          //obj
          opts= "post_id="+response['post_id'];
          //loading
          $('#socialBtn-1').popover('hide');
          //$('#socialBtn').hide();
          $('#socialLoading').fadeIn();
          
          $.ajax({
            url: '/actions/radarcultura/facebookPost.php',
            //url: '/actions/radarcultura/playlistMusica.php',
            data: opts,
            dataType: "html",
            success: function(data) {
              $('#socialLoading').fadeOut();
              $('#socialBtn-1').popover('hide');
              if(data == "1"){
                alertOk();
                goTop();
              }
              else{
                $("#socialAlertError").fadeIn('fast');
                setTimeout('$("#socialAlertError").fadeOut("slow")', 5000);
                goTop();
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
          <!--/modal-body-->
        </div>
        <!--/modal-->


        
        
        <?php include_partial_from_folder('sites/radarcultura', 'global/modal-playlist');?>
        <div class="container">
        <!--centro-->        
        <div class="row-fluid">
           <!-- colunavesquerda -->
           <div class="span8" style="margin: 0 0 0 0;">


              <?php include_partial_from_folder('sites/radarcultura', 'global/signature', array('uri'=>$uri, 'asset'=>$asset)) ?>
              <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
             <!-- comentario facebook -->
             <div class="face">
                <fb:comments href="<?php echo $uri?>" numposts="3" width="610" publish_feed="true"></fb:comments>
                <hr />
              </div>
              <!-- /comentario facebook -->
              <!--redes pitacos-->
              <?php if(isset($displays['playlists'])):?>
                <?php if(count($displays['playlists']) > 0 || count($displays['playlists']) < 3): ?>
                
                    <div class="page-header na-rede">
                      <h3>Pitacos<small></small></h3>
                    </div>
                    <div class="row-fluid redes">
                      <?php foreach($displays['playlists'] as $k=>$d): ?>
                      <div class="span4">
                        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                          <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                        </a>
                        <div class="page-header">
                          <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                        </div>
                        <img src="<?php echo $d->AssetContent->getHeadline() ?>" width="50px" height="50px" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                        <p><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                        <?php if($d->AssetContent->getHeadlineLong()!=""): ?>
                        <a href="<?php echo $d->AssetContent->getHeadlineLong() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> sugira sua música</a>
                        <?php endif; ?>
                      </div>
                      <?php endforeach; ?>

                 <?php endif; ?>
              <?php endif; ?>
              <!--/redes pitacos-->
           </div>
          <!--coluna esquerda-->
          <!--coluna direita-->
          <div class="span4 direita">
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
              <div class="banner-radio">
                <script type='text/javascript'>
                  GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!--/banner-->
           </div>
           <!--/coluna direita-->
           
           <?php $relacionados = $asset->retriveRelatedAssetsByAssetTypeId(1); ?>
           
             <?php if(count($relacionados) > 0): ?>
             <!--pela web-->  
             <div class="row-fluid">
                <div class="span12 page-header na-rede">
                  <h3>Pitacos</h3>
                  <small> quem já participou dessa playlist</small>
                </div>
                <!-- pitaco -->
                <div class="row-fluid">
                  <?php 
                  $i = 1;
                  ?>
                <?php foreach($relacionados as $k=>$d): ?> 
                  <!--item-->
                  <div class="span4 redes <?php if($i > 3) echo "m-20"?>">
                    <div class="row-fluid redes">
                      <div class="">
                        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                          <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                        </a>
                        <div class="">
                          <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                        </div>
                        <img src="<?php echo $d->AssetContent->getHeadline() ?>" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                        <p><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                        <!--<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> indique essa música</a>-->
                      </div>
                    </div>
                   
                      <div class="<?php if($i%3 != 0) echo "linha-lateral"?> "></div>
                     
                                       
                  </div>
                  <!--/item-->
                  <?php 
                  $i ++;
                  ?>
                
                <?php endforeach; ?>
                
                </div>
                
                <!-- /pitaco -->
              </div>
              <!--pela web-->
              <?php endif; ?>
           
           
           
        </div>
        <!--centro-->            

  
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
      <!--container-->