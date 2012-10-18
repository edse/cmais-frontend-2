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
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'artist' => $artist)) ?>
      
      <!--topo Artista/contagem-->
      <div id="row-fluid">
        <div class="row-fluid musicas">
            <h1>Lista de músicas por título
              <?php if(isset($letter)):?>
                <small><strong><?php echo $pager->count()?></strong> MÚSICAS CADASTRADAS COM A LETRA "<?php echo strtoupper($letter)?>"</small>
              <?php else:?>
                <small><strong><?php echo $pager->count()?></strong> MÚSICAS CADASTRADAS</small>
              <?php endif; ?>  
            </h1>
            <div class="span6">
              <!--busca-->
              <form action="" method="post">
                <div class="row-fluid">
                  <input class="btn pull-right btn-busca" type="submit" value="Busca">
                  <div class="input-prepend">
                   <input class="span6 pull-right" id="inputIcon" type="text" name="busca"><span class="add-on pull-right"><i class="icon-search"></i></span>
                  </div>
                </div>  
                <div class="row-fluid">
                  <label class="radio inline" style="margin-left: 147px">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Por Título
                  </label>
                  <label class="radio inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                    Por Artista
                  </label>
                </div>
              </form>
              <!--/busca--> 
            </div>
          </div>
      </div>
      <!--/topo Artista/contagem-->
      
      <?php  /*if($letter != ""): ?>
          <h3><small>Músicas começando com </small><?php echo strtoupper($letter)?></h3>
        <?php endif; */ ?>
      
      <?php if($artist == ""): ?>
      <!--letras-->
      <div class="row-fluid pagination pagination-centered">
        <ul>
          <li<?php if($letter == "#"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/1-9">#</a></li>
          <li<?php if($letter == "a"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/a">A</a></li>
          <li<?php if($letter == "b"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/b">B</a></li>
          <li<?php if($letter == "c"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/c">C</a></li>
          <li<?php if($letter == "d"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/d">D</a></li>
          <li<?php if($letter == "e"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/e">E</a></li>
          <li<?php if($letter == "f"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/f">F</a></li>
          <li<?php if($letter == "g"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/g">G</a></li>
          <li<?php if($letter == "h"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/h">H</a></li>
          <li<?php if($letter == "i"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/i">I</a></li>
          <li<?php if($letter == "j"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/j">J</a></li>
          <li<?php if($letter == "l"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/l">L</a></li>
          <li<?php if($letter == "m"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/m">M</a></li>
          <li<?php if($letter == "n"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/n">N</a></li>
          <li<?php if($letter == "o"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/o">O</a></li>
          <li<?php if($letter == "p"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/p">P</a></li>
          <li<?php if($letter == "q"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/q">Q</a></li>
          <li<?php if($letter == "r"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/r">R</a></li>
          <li<?php if($letter == "s"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/s">S</a></li>
          <li<?php if($letter == "t"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/t">T</a></li>
          <li<?php if($letter == "u"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/u">U</a></li>
          <li<?php if($letter == "v"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/v">V</a></li>
          <li<?php if($letter == "x"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/x">X</a></li>
          <li<?php if($letter == "z"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/z">Z</a></li>
        </ul>
        
      </div>
      <!--/letras-->
      <?php endif; ?>
        
      <!--Centro pagina-->
      <div class="row-fluid musicas" >

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
                    <a href="<?php echo url_for('@homepage') ?>musicas/<?php echo $d->getSlug(); ?>" class="btn btn-mini btn-inverse pull-right" style="margin-left: 5px;"><i class="icon-list icon-white"></i> ver detalhes </a>
                    <a href="javascript:;" class="btn btn-mini btn-info pull-right socialBtn" id="socialBtn-<?php echo $value ?>" name="<?php echo $value ?>" rel="popover" data-content='<div class="btn-toolbar"><div class="btn-group"><a class="btn" href="javascript:postTwitter();">Twitter</a><a class="btn" href="javascript:postToFeed();">Facebook</a><a class="btn" href="javascript:postGoogle();">Google+</a></div><div class="btn-group"><a class="btn btn-email" href="#" onClick="goTop();" data-toggle="modal" data-target="#modal">Email</a></div></div>' data-original-title="Selecione sua rede social..."><i class="icon-share-alt icon-white"></i> Sugira esta música</a>
                    <input type="hidden" value="<?php echo "http://radarcultura.cmais.com.br" . url_for('@homepage') . $site->getSlug() . '/' . $section->getSlug() . '/' . $d->getSlug() ?>" />
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
          </table>
          <script>
            $(function(){
              $('.socialBtn').click(function(){
                $('#music').val($('.music-'+$(this).attr('name')).html());
                $('#performer').val($('.performer-'+$(this).attr('name')).html());
                $('#url').val($('.play input[type=hidden]').val());
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
                  <input type="text" value="" class="input-large" disabled="disabled" id="music">
                  <span class="help-block"></span>
                </div>  
                <div class="control-group">  
                  <label>Intérprete</label>
                  <input type="text" value="" class="input-large" disabled="disabled" id="performer">
                </div>  
                <div class="control-group">
                  <label>URL</label>
                  <input type="text" value="" placeholder="Cidade" class="input-large" disabled="disabled" id="url">
                </div>
              </div>
              <div class="row-fluid">
                <div class="modal-footer musica">
                  <a data-dismiss="modal" aria-hidden="true" class="btn btn-fechar">Fechar</a>
                  <img src="/portal/images/ajax-loader.gif" alt="carregando..." style="display:none; margin: 0 30px;" width="16px" height="16px" id="loader2"/>
                  <input type="submit" class="btn btn-info btn-enviar" value="Enviar"/>
                </div>
              </div>
            </form> 
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
            }
          });
        });
      </script>
      <script>
      $(document).ready(function() {
        //$('#popover').popover('show');
        $('.socialBtn').popover({
          placement:"left"
        });

        $('.socialBtn').click(function(){
          $('.socialBtn').not("#"+$(this).attr('id')).popover('hide');
          $("#"+$(this).attr('id')).popover();
        });
        $('.btn-fechar').click(function(){
          $('.socialBtn').popover('hide');
        });
        
       });
        function goTop(){
          $(document).ready(function() {
            $('html, body').animate({
              scrollTop: $("#guia-topo").offset().top
            }, "slow");
           }); 
         };
      </script>
      <!--script-->
          </div>
          <!--/modal-body-->
        </div>
        <!--/modal-->
