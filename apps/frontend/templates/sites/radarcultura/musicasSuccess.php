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
      <div class="row-fluid" style="margin:10px 0 0 0;">
        <div id="socialLoading" class="alert alert-info radarIndex alert-in hide">
          <span class="badge"><strong>Aguarde um momento</strong><img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="margin: 0 30px;" width="16px" height="16px" id="loader3" /></span><button type="button" class="close" data-dismiss="alert">×</button>
        </div>
        <div id="socialAlertOk" class="alert alert-info radarIndex alert-in hide">
          <span class="badge"><strong>Obrigado pela sua participação!</strong></span><span> As melhores sugestões ganham destaque no RadarCultura!</span><button type="button" class="close" data-dismiss="alert">×</button>
        </div>
        <div id="socialAlertError" class="alert alert-error alert-in hide">
          <span class="badge"><strong>Ocorreu um erro!</strong></span><span> Por favor, tente novamente em alguns instantes.</span><button type="button" class="close" data-dismiss="alert">×</button>
        </div>
      </div>
      <div class="row-fluid">  
        <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
      </div>
        <!--topo menu/alert/logo-->
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'artist' => $artist)) ?>
      
      <!--topo Artista/contagem-->
      <div id="row-fluid">
        <div class="row-fluid musicas">
            <h1>Lista de músicas por título</h1>
            <?php if(isset($letter)):?>
              <small><strong id="qtd_result"><?php echo $pager->count()?></strong> MÚSICAS CADASTRADAS COM A LETRA "<?php echo strtoupper($letter)?>"</small>
            <?php else:?>
              <small><strong id="qtd_result"><?php echo $pager->count()?></strong> MÚSICAS CADASTRADAS</small>
            <?php endif; ?>  
            <div class="span5 pull-right">
              <!--busca-->
              <form action="" method="post" id="busca-radar">
                <div class="row-fluid">
                  <input class="btn pull-right btn-busca" type="submit" value="Busca">
                  <div class="input-prepend">
                   <input class="span8 pull-right" id="busca-input" type="text" name="busca-input" value="<?php if(isset($busca_radar)) echo $busca_radar?>" /><span class="add-on pull-right"><i class="icon-search"></i></span>
                  </div>
                </div>  
                <!-- div class="row-fluid">
                  <label class="radio inline" style="margin-left: 35px">
                    <input type="radio" name="busca-por" id="busca-por1" value="musicas" checked="checked" />
                    Por Título
                  </label>
                  <label class="radio inline">
                    <input type="radio" name="busca-por" id="busca-por2" value="artistas" />
                    Por Artista
                  </label>
                </div-->
              </form>
              <!--/busca--> 
            </div>
          </div>
          
      </div>
      <!--/topo Artista/contagem-->
      
        <!--modal facebook-->
        <div id="modal-facebook" class="modal playlist hide fade" name="facebook">
         <button type="button" class="close btn-fechar btn-fechar-redes" data-dismiss="modal" aria-hidden="true">&times;</button>
         <div class="ajuda-face"></div> 
         <a class="avancar" href="javascript:postToFeed();">Avançar</a>
        </div>  
        <!--/modal facebook-->
        <!--modal google-->
        <div id="modal-google" class="modal playlist hide fade" name="google">
          <button type="button" class="close btn-fechar btn-fechar-redes" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="ajuda-google"></div>
          <a class="avancar" href="javascript:postGoogle();">Avançar</a>
        </div>  
        <!--/modal google-->
      <?php if($artist == ""): ?>
      <!--letras-->
      <div class="row-fluid pagination pagination-centered">
        <ul>
          <li<?php if($letter == "#"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/1-9">#</a></li>
          <li<?php if($letter == "a"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/a">A</a></li>
          <li<?php if($letter == "b"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/b">B</a></li>
          <li<?php if($letter == "c"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/c">C</a></li>
          <li<?php if($letter == "d"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/d">D</a></li>
          <li<?php if($letter == "e"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/e">E</a></li>
          <li<?php if($letter == "f"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/f">F</a></li>
          <li<?php if($letter == "g"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/g">G</a></li>
          <li<?php if($letter == "h"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/h">H</a></li>
          <li<?php if($letter == "i"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/i">I</a></li>
          <li<?php if($letter == "j"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/j">J</a></li>
          <li<?php if($letter == "l"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/l">L</a></li>
          <li<?php if($letter == "m"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/m">M</a></li>
          <li<?php if($letter == "n"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/n">N</a></li>
          <li<?php if($letter == "o"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/o">O</a></li>
          <li<?php if($letter == "p"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/p">P</a></li>
          <li<?php if($letter == "q"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/q">Q</a></li>
          <li<?php if($letter == "r"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/r">R</a></li>
          <li<?php if($letter == "s"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/s">S</a></li>
          <li<?php if($letter == "t"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/t">T</a></li>
          <li<?php if($letter == "u"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/u">U</a></li>
          <li<?php if($letter == "v"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/v">V</a></li>
          <li<?php if($letter == "x"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/x">X</a></li>
          <li<?php if($letter == "z"): ?> class="active"<?php endif; ?>><a href="/musicas/letra/z">Z</a></li>
        </ul>
        
      </div>
      <!--/letras-->
      <?php endif; ?>
        
      <!--Centro pagina-->
      <div class="row-fluid musicas"  id="resultado_busca">
          <input type="hidden" id="btn-pressed" value="" name="">
          <table class="table table-striped musica">
            <tbody>
              <thead>
                <tr>
                  <th>Música</th>
                  <th>Intérprete</th>
                  <th>Compositor</th>
                  <th style="text-align: right;"></th>
                </tr>
              </thead>
            <?php if(count($pager) > 0): ?>
              <?php
              foreach($pager->getResults() as $value=>$d):
                $aux = explode(";", $d->AssetContent->getHeadlineShort());
                ?>
                <tr>
                  <td class="music-<?php echo $value ?>"><?php echo $d->getTitle(); ?></td>
                  <td class="performer-<?php echo $value ?>"><?php echo str_ireplace("Por ", "", $d->getDescription()); ?></td>
                  <td class="composer-<?php echo $value ?>"><?php echo $aux[4] ?></td>
                  <td class="play">
                    <span id="indicada-<?php echo $value ?>" class="btn btn-mini btn-success indicada" disabled="disabled"  style="display:none;"><i class="icon-ok icon-white"></i> Música sugerida</span>
                    <a href="/musicas/<?php echo $d->getSlug(); ?>" class="btn btn-mini btn-inverse pull-right" style="margin-left: 5px;"><i class="icon-list icon-white"></i> ver detalhes </a>
                    <a href="javascript:;" class="btn btn-mini btn-info pull-right socialBtn" id="socialBtn-<?php echo $value ?>" name="<?php echo $value ?>" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="https://twitter.com/intent/tweet?hashtags=RadarCultura%2C&original_referer=<?php echo urlencode($uri)?>&source=tweetbutton&text=<?php echo urlencode("Minha indicação para o @radarcultura é: ".$d->getTitle()) ?>&url=<?php echo urlencode("http://radarcultura.cmais.com.br/".$section->getSlug().'/'.$d->getSlug())?>">Twitter</a><a class="btn" href="#" onClick="javascript:goTop()" data-toggle="modal" data-target="#modal-facebook">Facebook</a><a class="btn" href="#" onClick="javascript:goTop()" data-toggle="modal" data-target="#modal-google">Google+</a></div><div class="btn-group"><a class="btn btn-email" href="#" onClick="goTop();" data-toggle="modal" data-target="#modal">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Sugira esta música</a>
                    <!--<a href="javascript:;" class="btn btn-mini btn-info pull-right socialBtn" id="socialBtn-<?php echo $value ?>" name="<?php echo $value ?>" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="javascript:postTwitter();">Twitter</a><a class="btn" href="#" onClick="javascript:goTop()" data-toggle="modal" data-target="#modal-facebook">Facebook</a><a class="btn" href="#" onClick="javascript:goTop()" data-toggle="modal" data-target="#modal-google">Google+</a></div><div class="btn-group"><a class="btn btn-email" href="#" onClick="goTop();" data-toggle="modal" data-target="#modal">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Sugira esta música</a>-->
                    <input type="hidden" class="url-<?php echo $value ?>" value="<?php echo "http://radarcultura.cmais.com.br/".$section->getSlug().'/'.$d->getSlug() ?>" />
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
          </table>
          <script>
            $(function(){
              $('.socialBtn').live("click", function(){
                $('#btn-pressed').attr('value',$(this).attr('id'));
                $('#btn-pressed').attr('name','indicada-'+ $(this).attr('name'));
                $('#titulo').val($('.music-'+$(this).attr('name')).html());
                $('#interprete').val($('.performer-'+$(this).attr('name')).html());
                $('#url').val($('.url-'+$(this).attr('name')).val());
                $('#titulo2').val($('.music-'+$(this).attr('name')).html());
                $('#interprete2').val($('.performer-'+$(this).attr('name')).html());
                $('#url2').val($('.url-'+$(this).attr('name')).val());
              });
            });
          </script>


         
      </div>
      <!--/centro pagina-->
      <!--paginador-->
      <?php include_partial_from_folder('sites/radarcultura', 'global/paginator', array('page' => $page, 'pager' => $pager,'letter'=>$letter)) ?>
      <!--paginador-->
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
    <!--/containeer-->
    <!--modal-->
        <div id="modal" class="modal musicas hide fade">
          <!--modal-header-->  
          <div class="modal-header">
            <button type="button" class="close btn-fechar" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2>Indique esta Música</h2>
          </div>
          <!--/modal-header-->
          <!--modal-body-->
          <div class="modal-body" class="row-fluid">
            <form action="" method="post" id="form-indicacao" class="row-fluid">
              
              <div class="span6" style="margin:0;">
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
                  <input type="text" value="" class="input-large" disabled="disabled" id="titulo2">
                  <input type="hidden" value="" id="titulo" name="titulo" />
                  <span class="help-block"></span>
                </div>  
                <div class="control-group">  
                  <label>Intérprete</label>
                  <input type="text" value="" class="input-large" disabled="disabled" id="interprete2">
                  <input type="hidden" value="" id="interprete" name="interprete" />
                </div>  
                <div class="control-group">
                  <label>URL</label>
                  <input type="text" value="" placeholder="Cidade" class="input-large" disabled="disabled" id="url2">
                  <input type="hidden" value="" id="url" name="url" />
                </div>
              </div>
              <div class="row-fluid">
                <div class="modal-footer musica">
                  <!--<a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>-->
                  <!--<input type="hidden" id="btn-pressed" value="" name="">-->
                  <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader3" />
                  <input type="submit" class="btn btn-info btn-enviar" value="Enviar" />
                </div>
              </div>
            </form> 
            <!--scripts-->
        <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
        <script src="http://cmais.com.br/portal/js/messages_ptbr.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){

                  $('#busca-radar').submit(function() {
                if($("#busca-input").val() != "" ){
                                 $("#resultado_busca").html("");
                                 $("#resultado_paginacao").html("");
                                 $('.popover').hide();
                                 
                                 
                                 $.ajax({
                           type : "GET", 
                           dataType: "jsonp",
                           data: $('#busca-radar').serialize(),
                           url: "http://app.cmais.com.br/index.php/ajax/radar-musica",
                           success: function(json){
                                     $("#qtd_result").text(json.qtd_result);
                                     $("#resultado_busca").html(json.data);
                                     $("#resultado_paginacao").html(json.paginacao);
                          }
                        });
                 
                          }
                return false;
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
                url: "http://app.cmais.com.br/actions/radarcultura/iteracao.php", 
                data: $("#form-indicacao").serialize(),
                beforeSend: function(){
                  $('#loader3').show();
                  $('.btn-enviar').hide();
                },
                success: function(data){
                  $('#loader3').hide();
                  $('.btn-enviar').show();
                  if(data == "1"){
                    $("#modal").modal('hide');
                    buttonVanish();
                    alertOk();
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
      <script>
      $(document).ready(function() {
        $('.socialBtn').popover({
          placement:"left"
        });

        $('.socialBtn').live("click", function(){
          var botao = $("#"+$(this).attr('id'));
          $('.socialBtn').not(botao).popover('hide');
          botao.popover();
        });
        
        
        $('.btn-fechar').click(function(){
          $('.socialBtn').popover('hide');
        });
        
       });
       
       function buttonVanish(){
         $('.socialBtn').popover('hide');
         $('#'+$('#btn-pressed').attr('value')).fadeOut('fast');
         $('#'+$('#btn-pressed').attr('name')).fadeIn('fast');
       };
       
      function alertOk(){
        $("#socialAlertOk").fadeIn('fast');
        setTimeout('$("#socialAlertOk").hide();', 10000);
        goTop();
      }

      function popOverHide(){
        $("#modal-google").modal('hide');
        $("#modal-facebook").modal('hide');
        $(".socialBtn").popover("hide");
        goTop();
      }
      
     function goTop(){
        $('html, body').animate({
          scrollTop: $("#guia-topo").offset().top
        }, "slow");
     }
       
     twttr.events.bind('tweet', function(event) {
        alertOk();
        buttonVanish();
      });
      
     function postGoogle() {
      $('.socialBtn').popover('hide');
      popup('https://plus.google.com/share?url='+$('#url2').val(),'',600,600);
      popOverHide();
     }
      
       function postToFeed() {
        $(".socialBtn").popover("hide");
        $("#modal-facebook").modal('hide');

        // calling the API ...
        var obj = {
          method: 'feed',
          link: $('#url').val(),
          name: $('#titulo').val(),
          caption: $('#interprete').val(),
          description: 'Minha indicação para o @RadarCultura'
        };
        function callback(response) {
          if(response!=null){
            //console.log(response);
            //document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
            //obj
            opts= "post_id="+response['post_id'];
            //loading
            $('.socialBtn').popover('hide');
            $('#socialBtn').hide();
            $('#socialLoading').fadeIn();
            
            $.ajax({
              url: '/actions/radarcultura/facebookPost.php',
              data: opts,
              dataType: "text",
              success: function(data) {
                goTop();
                $('#socialLoading').fadeOut();
                $('.socialBtn').popover('hide');
                if(data == "1"){
                  alertOk();
                  buttonVanish();
                }
                else{
                  $("#socialAlertError").fadeIn('fast');
                  setTimeout('$("#socialAlertError").fadeOut("slow")', 5000);
                  goTop();
                }
              }
            });
          }else{
            $('.socialBtn').popover('hide');
            $("#socialAlertError").fadeIn('fast');
            goTop();
          }
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
