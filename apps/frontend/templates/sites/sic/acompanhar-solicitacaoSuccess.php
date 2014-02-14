<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $site->getTitle()." - ".$section->getTitle() ?></title>
	<!-- SCRIPTS -->
    <script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/messages_ptbr.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.min.js"></script>
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput-1.3.min.js"></script>
    <script src="http://cmais.com.br/portal/js/libs/modernizr-2.5.3-respond-1.1.0.min.js" type="text/javascript"></script>
  	<script>
      $(".collapse").collapse();
      
      $(document).ready(function(){
        $(".dicas").click(function(){
          $(this).prev().toggleClass('icon-minus');
        });
        $('.formas').click(function(){
          $(this).prev().toggleClass('icon-circle-arrow-down');
        });
      });
    </script>  
	<!-- /SCRIPTS -->
      
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/style.css">
    <!-- /CSS BOOTSTRAP -->
      
    <!-- CSS SIC -->
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <!-- /CSS SIC-->
</head>
<body>
 
    <!-- DIV CRIADA SOMENTE PRA MUDAR O RESIZE DA PG -->
    <div id="centralizar">  
        <!-- CAPA SITE -->
        <div id="capa-site">
          
          <?php include_partial_from_folder('sites/sic', 'global/topo', array('site' => $site,'siteSections' => $siteSections, 'section' => $section)) ?>
		 <!-- CORPO SITE -->
      <div id="corpo-sic">
        <?php if(isset($displays["conteudo-complementar"])): ?>
          <?php if(count($displays["conteudo-complementar"]) > 0): ?>       
        <!-- COLUNA ESQUERDA -->
        <div class="float col-640-sic  font-span-14">
          <h2><?php echo $displays["conteudo-complementar"][0]->Block->getTitle() ?></h2>
          <?php echo html_entity_decode($displays["conteudo-complementar"][0]->Asset->AssetContent->render()) ?>
        </div>
        <!-- /COLUNA ESQUERDA -->
          <?php endif; ?>
        <?php endif; ?>
        
        <!-- COLUNA DIREITA -->
        <div class="float col-585-sic" style="display: none;">
          
          <!-- COLUNA SUB DIR 1 -->
          <div class="coluna-sub-1 cinza-claro-2 ">

             <div class="container">
      
              <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:block" width="16px" height="16px" id="loader" />
        
              <!-- Acompanhar solicitacao -->
              <div class="row" id="row1">
                
                <div class="span6">
                  <form class="form-horizontal" id="form1" method="post">
                    <input type="hidden" name="step" value="1" />
                    <input type="hidden" name="email" id="email" value="" />
                    <input type="hidden" name="protocolo" id="protocolo" value="" />
                    <fieldset>
        
                      <div class="control-group">
                        <label  for="email"><h5>Email</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f1_email" name="f1_email" />
                          <p class="help-block">Entre com seu endereço de email</p>
                        </div>
                      </div>
                      <div class="control-group">
                        <label  for="email"><h5>Protocolo</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f1_protocolo" name="f1_protocolo" />
                          <p class="help-block">Entre com o número do protocolo</p>
                        </div>
                      </div>
                      <div class="float">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader1" />
                        <button type="submit" class="btn btn-success" id="btn1">Próximo Passo</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <!-- Acompanhar solicitacao -->
              
              <!-- Status da solicitacao -->
              <div class="row" id="row2">
                
                <div class="span6">
                  <h4>Dados da Solicitação</h4>
                  <div id="dados-html"></div>
                  <hr />
                  <h4>Mensagens</h4>
                  <div id="mensagem-html"></div>
                  <hr />
                  <h4>Andamento</h4>
                  <div id="status-html"></div>
                  <div id="recurso_holder" style="display: none;">
                    <hr />
                    <button type="button" class="btn btn-danger" id="recurso" style="display: block;">Entrar com recurso</button>
                    <form class="form-horizontal" id="form2" method="post">
                      <input type="hidden" name="step" value="2" />
                      <input type="hidden" name="f2_email" id="f2_email" value="" />
                      <input type="hidden" name="f2_protocolo" id="f2_protocolo" value="" />
                      <input type="hidden" name="f2_cod_assunto" id="f2_cod_assunto" value="44" />
                      <fieldset style="display: none">
                        <!--
                        <div class="control-group">
                          <label  for="f2_cod_assunto"><h5>Assunto</h5></label>
                          <div class="controls">
                            <select name="f2_cod_assunto" id="f2_cod_assunto"></select>
                          </div>
                        </div>
                        -->
                        <div class="control-group">
                          <label  for="email"><h5>Justificativa</h5></label>
                          <div class="controls">
                            <textarea class="input-xlarge" id="f2_descricao" name="f2_descricao" rows="5"></textarea>
                            <p class="help-block">Justifique o seu pedido de recurso.</p>
                          </div>
                        </div>
                        <div class="form-actions" style="padding-left: 25px;">
                          <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader2" />
                          <button types"submit" class="btn btn-danger" id="btn2">Enviar pedido de recurso</button>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /Status da solicitacao -->
              
              <!-- Erro -->
              <div class="row" id="row3">
                
                <div class="span6">
                  <div class="alert alert-block alert-error fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">O email e/ou protocolo não correspondem com nenhum de nossos registros</h4>
                    <p>Para acompanhar seu pedido clique no link que foi enviado para o seu endereço de email.</p>
                  </div>
                </div>
              </div>
              <!-- /Erro -->
        
              <!-- Erro -->
              <div class="row" id="row4">
                
                <div class="span6">
                  
                  <div class="alert alert-block alert-error fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Seu pedido de recurso não foi processado.</h4>
                    <p>Ocorreu um erro ao processar seu pedido de recurso. Tente novamente mais tarde.</p>
                    <!--<p>
                      <a class="btn" href="./acompanhamento.html">Entrar com outro email/protocolo</a>
                    </p>-->
                  </div>
                </div>
              </div><!-- /row -->
              <!-- /Erro -->
              
              <!-- Solicitação de recurso enviada -->
              <div class="row" id="row5">
                
                <div class="span6">
                  
                  <div class="alert alert-block alert-success fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Obrigado. Sua solicitação de recurso foi enviada com sucesso!</h4>
                    <p>Número do Protocolo: <span class="label label-success" id="protocolo_r2"></span></p>
                    <p>Você receberá um email com o número de protocolo referente a esta solicitação e se aplicável você receberá a resposta nesse mesmo email.</p>
                    <!--
                    <p>
                      <a class="btn btn-info" href="http://cmais.com.br">cmais+ O portal de conteúdo da Cultura</a>
                    </p>
                    -->
                  </div>
                </div>
              </div>
              <!-- /Solicitação de recurso enviada -->
              <hr />
        
              <footer>
                <p>&copy; 2012 <a href="http://cmais.com.br" title="O Portal de conteúdo da Cultura">cmais+</a> O Portal de conteúdo da Cultura</p>
              </footer>
        
            </div> <!-- /container -->
        
        <script>
        
        $(document).ready(function(){
          //assuntos();
          var vars = getUrlVars();
          if(vars['protocolo'] != undefined){
            $('#f1_protocolo').val(vars['protocolo']);
            $('#protocolo').val(vars['protocolo']);
            $('#f1_protocolo').attr("disabled","disabled");
            $('#f1_email').focus();
            $('#f1_email').addClass('focused');
          }
          if(vars['email'] != undefined){
            $('#f1_email').val(vars['email'])
            $('#email').val(vars['email'])
            $('#f1_email').attr("disabled","disabled");
            $('#f1_protocolo').focus();
            $('#f1_protocolo').addClass('focused');
          }else{
            $('#f1_email').val("");
            $('#email').val("");
            $('#f1_email').focus();
          }
          
          $('#recurso').click(function(){
            $('#recurso').fadeOut('fast', function() {
              $('#form2 fieldset').fadeIn('slow');
            });
          });
        
          $('#loader').hide();
          
          $('.row:first').show();
          
          $('#form1').validate({
            rules: {
              f1_email: {
                required: true,
                email: true
              }
            },
            highlight: function(label) {
              $(label).closest('.control-group').addClass('error');
            },
            success: function(label) {
              label
                .text('OK!').addClass('valid')
                .closest('.control-group').addClass('success');
            },
            submitHandler: function(form){
              $('#email').val($('#f1_email').val());
              $('#protocolo').val($('#f1_protocolo').val());
              $.ajax({
                type: "POST",
                dataType: "json",
                url: "http://fpa.com.br/sic/actions/soap2.php",
                data: $("#form1").serialize(),
                beforeSend: function(){
                  $('#loader1').show();
                  $('#btn1').hide();
                },
                success: function(data){
                  $('#loader1').hide();
                  $('#btn1').show();
                  if(data.script != ""){
                    //console.log(data.script)
                    eval(data.script);
                  }
                  else{
                    alert('Erro!');
                  }
                }
              });
            }
          });
        
          $('#form2').validate({
            rules: {
              f2_descricao: {
                required: true
              },
              f2_cod_assunto: {
                required: true
              }
            },
            highlight: function(label) {
              $(label).closest('.control-group').addClass('error');
            },
            success: function(label) {
              label
                .text('OK!').addClass('valid')
                .closest('.control-group').addClass('success');
            },
            submitHandler: function(form){
              $.ajax({
                type: "POST",
                dataType: "json",
                url: "http://fpa.com.br/sic/actions/soap2.php",
                data: $("#form2").serialize(),
                beforeSend: function(){
                  $('#loader2').show();
                  $('#btn2').hide();
                },
                success: function(data){
                  $('#loader2').hide();
                  $('#btn2').show();
                  if(data.script != ""){
                    eval(data.script);
                  }
                  else{
                    alert('Erro!');
                  }
                }
              });
            }
          });
          
          $('#f1_email').focus();
          
        });
        
        function assuntos(){
          $.ajax({
            type: "POST",
            dataType: "json",
            url: "http://fpa.com.br/sic/actions/soap2.php",
            data: "action=assuntos&cod_programa=24",
            beforeSend: function(){
              //$('img#ajax-loader').show();
            },
            success: function(data){
              if(data.script != ""){
                eval(data.script);
              }
              else{
                alert('Erro!');
              }
            }
          });
        }
        
        function getUrlVars() {
          var vars = {};
          var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
          });
          return vars;
        }
        </script>

          </div>           
          <!-- /COLUNA SUB DIR 1 -->

        </div>  
        <!-- /COLUNA DIREITA -->
     </div>  
     <!-- /CORPO SITE -->

          
          </div>
          <!-- CAPA SITE -->
      </div>
      <!-- DIV CRIADA SOMENTE PRA MUDAR O RESIZE DA PG -->
</body>
</html>