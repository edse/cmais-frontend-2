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
        <div class="float col-400-sic font-span-14">
          <h2><?php echo $displays["conteudo-complementar"][0]->Block->getTitle() ?></h2>
          <p><?php echo html_entity_decode($displays["conteudo-complementar"][0]->Asset->AssetContent->render()) ?></p>
        </div>
        <!-- /COLUNA ESQUERDA -->
        	<?php endif; ?>
        <?php endif; ?>
        
        <!-- COLUNA DIREITA -->
        <div class="float col-585-sic">
          
          <!-- COLUNA SUB DIR 1 -->
          <div class="coluna-sub-1 cinza-claro-2 ">

            <div class="">
            
              <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:block" width="16px" height="16px" id="loader" />
              
              <!-- ROW-1 ENTRAR COM EMAIL -->
              <div class="row" id="row1">
                <div class="span6">
                  <form class="form-horizontal" id="form1" method="post">
                    <input type="hidden" name="step" value="1" />
                    <input type="hidden" name="email" id="email" value="" />
                    <fieldset>
        
                      <div class="control-group">
                        <label for="email"><h5>Email</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f1_email" name="f1_email" />
                          <p class="help-block">Entre com seu endereço de email</p>
                        </div>
                      </div>
                      <div class="float">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader1" />
                        <button type="button" class="btn btn-success" id="btn1">Próximo Passo</button>
                        <a href="/sic" class="btn">Cancelar</a>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <!-- ROW-1 ENTRAR COM EMAIL -->
              
              <!-- ROW-2 FORM DE CADASTRO -->
              <div class="row" id="row2">
                <div class="span6">
                  <form class="form-horizontal" id="form2" method="post">
                    <input type="hidden" name="step" value="2" />
                    <input type="hidden" name="email" id="f2_email" value="" />
                    <input type="hidden" name="f2_cod_faixaetaria" id="f2_cod_faixaetaria" value="8" />
                    <input type="hidden" name="f2_cod_sexo" id="f2_cod_sexo" value="3" />
                    <fieldset>
                      <div class="control-group">
                        <label for="f2_email2"><h5>Email</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge disabled" id="f2_email2" name="f2_email2" placeholder="" disabled="disabled">
                          <p class="help-block">Você receberá uma mensagem de confirmação para validar este email.</p>
                        </div>
                      </div>
                      <div class="control-group">
                        <label><h5>Tipo</h5></label>
                        <div class="controls">
                          <label class="radio">
                            <input type="radio" name="f2_tipo" id="f2_tipo1" value="1" checked="checked" />
                            Pessoa Física
                          </label>
                          <label class="radio">
                            <input type="radio" name="f2_tipo" id="f2_tipo2" value="2">
                            Pessoa Jurídica
                          </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_nome"><h5>Nome</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_nome" name="f2_nome">
                          <p class="help-block">Entre com seu nome completo.</p>
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_nome"><h5>CPF</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_cpf" name="f2_cpf">
                          <p class="help-block">Entre com o número do seu CPF.</p>
                        </div>
                      </div>
                      <!--
                      <div class="control-group">
                        <label for="f2_cod_faixaetaria">Idade</label>
                        <div class="controls">
                          <select id="f2_cod_faixaetaria" name="f2_cod_faixaetaria"></select>
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_cod_sexo">Sexo</label>
                        <div class="controls">
                          <select id="f2_cod_sexo" name="f2_cod_sexo"></select>
                        </div>
                      </div>
                      -->
                      
                      <!-- <hr /> -->
                      
                      <div id="f2_brasil">
                        <div class="control-group">
                          <label for="f2_estado"><h5>Estado</h5></label>
                          <div class="controls">
                            <select id="f2_estado" name="f2_estado" onchange="municipios('f2');"></select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label for="f2_local"><h5>Cidade</h5></label>
                          <div class="controls">
                            <select id="f2_local" name="f2_local"></select>
                          </div>
                        </div>
                      </div><!-- /#brasil -->
        
                      <div class="control-group">
                        <label for="f2_endereco"><h5>Endereço</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_ endereco" name="f2_endereco">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_numero"><h5>Número</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_numero" name="f2_numero">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_complemento"><h5>Complemento</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_complemento" name="f2_complemento">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_cep"><h5>CEP</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_cep" name="f2_cep">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_bairro"><h5>Bairro</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_bairro" name="f2_bairro">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f2_telefone"><h5>Telefone</h5></label>
                        <div class="controls">
                          <input type="text" class="span2" id="f2_telefone" name="f2_telefone" placeholder="(11) 11111111">
                        </div>
                      </div>
        
                      <!-- </div> -->
                      
                      <div class="float">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader2" />
                        <button type="submit" class="btn btn-success" id="btn2">CONFIRMAR CADASTRO</button>
                        <a href="/sic" class="btn">Cancelar</a>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <!-- /ROW-2 FORM DE CADASTRO -->
              
              <!-- /ROW-3 FORM DE CADASTRO -->
              <div class="row" id="row3">
                <div class="span6">
                  <form class="form-horizontal" id="form3" method="post">
                    <input type="hidden" name="step" value="2" />
                    <input type="hidden" name="email" id="f3_email" value="" />
                    <input type="hidden" name="f3_cod_faixaetaria" id="f3_cod_faixaetaria" value="8" />
                    <input type="hidden" name="f3_cod_sexo" id="f3_cod_sexo" value="3" />
                    <fieldset>
                      <div class="control-group">
                        <label for="f3_email2"><h5>Email</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge disabled" id="f3_email2" name="f3_email2" placeholder="" disabled="disabled">
                          <p class="help-block">Você receberá uma mensagem de confirmação para validar este email.</p>
                        </div>
                      </div>
                      <div class="control-group">
                        <label><h5>Tipo</h5></label>
                        <div class="controls">
                          <label class="radio">
                            <input type="radio" name="f3_tipo" id="f3_tipo1" value="1" />
                            Pessoa Física
                          </label>
                          <label class="radio">
                            <input type="radio" name="f3_tipo" id="f3_tipo2" value="2" checked="checked" />
                            Pessoa Jurídica
                          </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_nome"><h5>Nome</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_nome" name="f3_nome">
                          <p class="help-block">Entre com o nome da empresa</p>
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_nome"><h5>CNPJ</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_cnpj" name="f3_cnpj">
                          <p class="help-block">Entre com o número do CNPJ da empresa.</p>
                        </div>
                      </div>
                      <!--
                      <div class="control-group">
                        <label for="f3_cod_faixaetaria">Idade</label>
                        <div class="controls">
                          <select id="f2_cod_faixaetaria" name="f3_cod_faixaetaria"></select>
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_cod_sexo">Sexo</label>
                        <div class="controls">
                          <select id="f3_cod_sexo" name="f3_cod_sexo"></select>
                        </div>
                      </div>
                      -->
                      
                      <!-- <hr /> -->
                      
                      <div id="f3_brasil">
                        <div class="control-group">
                          <label for="f3_estado"><h5>Estado</h5></label>
                          <div class="controls">
                            <select id="f3_estado" name="f3_estado" onchange="municipios('f3');"></select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label for="f3_local"><h5>Cidade</h5></label>
                          <div class="controls">
                            <select id="f3_local" name="f3_local"></select>
                          </div>
                        </div>
                      </div><!-- /#brasil -->
        
                      <div class="control-group">
                        <label for="f3_endereco"><h5>Endereço</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_endereco" name="f3_endereco">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_numero"><h5>Número</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_numero" name="f3_numero">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_complemento"><h5>Complemento</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_complemento" name="f3_complemento">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_cep"><h5>CEP</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_cep" name="f3_cep">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_bairro"><h5>Bairro</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_bairro" name="f3_bairro">
                        </div>
                      </div>
                      <div class="control-group">
                        <label for="f3_telefone"><h5>Telefone</h5></label>
                        <div class="controls">
                          <input type="text" class="span2" id="f3_telefone" name="f3_telefone" placeholder="(11) 11111111">
                        </div>
                      </div>
        
                      <!-- </div> -->
                      
                      <div class="float">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader3" />
                        <button type="submit" class="btn btn-success" id="btn3">CONFIRMAR CADASTRO</button>
                        <a href="/sic" class="btn">Cancelar</a>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <!-- /ROW-3 FORM DE CADASTRO -->
              
              <!-- ROW-4 Solicitar informação -->        
              <div class="row" id="row4">
        
                <div class="span6">
                  <form class="form-horizontal" id="form4" method="post">
                    <input type="hidden" name="step" id="f4_step" value="4" />
                    <input type="hidden" name="email" id="f4_email" value="" />
                    <input type="hidden" name="f4_cod_assunto" id="f4_cod_assunto" value="38" />
                    <fieldset>
                      <div class="control-group">
                        <label for="f4_email2"><h5>Email</h5></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge disabled" id="f4_email2" name="f4_email2" placeholder="" disabled="disabled">
                          <p class="help-block">Se aplicável, você receberá uma resposta nesse email.</p>
                        </div>
                      </div>
                      
                      <div id="message">
                      <!--
                      <div class="control-group">
                        <label for="f4_cod_assunto"><h5>Assunto<h5></label>
                        <div class="controls">
                          <select name="f4_cod_assunto" id="f4_cod_assunto"></select>
                        </div>
                      </div>
                      -->
                      <script>
                      // Contador de Caracters
                      function limitText (limitField, limitNum, textCounter)
                      {
                        if (limitField.value.length > limitNum)
                          limitField.value = limitField.value.substring(0, limitNum);
                        else
                          $(textCounter).html(limitNum - limitField.value.length);
                      }
                      </script>
                      <div class="control-group">
                        <label for="f4_descricao"><h5>Descrição</h5></label>
                        <div class="controls">
                          <textarea class="input-xlarge" id="f4_descricao" name="f4_descricao" rows="5" onKeyDown="limitText(this,500,'#textCounter');"></textarea>
                          
                          <p class="help-block"><span id="textCounter">500</span> caracteres restantes</br></br>Descreva sua solicitação informando quais tipos de documentos você tem interesse.</p>
                        </div>
                      </div>
        
                      </div><!-- /#message -->
        
                      <div class="float">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader4" />
                        <button type="submit" class="btn btn-primary" id="btn4">Solicitar Informação</button>
                        <!-- <button type="submit" class="btn btn-warning" id="btn5" style="display:none">Alterar Cadastro</button> -->
                        <a href="/sic" class="btn">Cancelar</a>
                      </div>
                      
                    </fieldset>
                  </form>
                </div>
              </div>
              <!-- ROW-4 Solicitar informação -->  
      
              <!-- ROW-5 Erro -->
              <div class="row" id="row5">
           
                <div class="span6">
                  
                  <div class="alert alert-block alert-error fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Email não validado!</h4>
                    <p>Seu endereço de email não foi validado.</p>
                    <p>Para validá-lo você precisa clicar no link do email de confirmação.</p>
                    <p>
                      <!--<a class="btn btn-danger" href="#">Não recebi o email de confirmação</a> --><a class="btn" href="./index.html">Entrar com outro email</a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- /ROW-5 Erro -->
              
              <!-- ROW-6 enviada -->
              <div class="row" id="row6">
                
                <div class="span6">
                  
                  <div class="alert alert-block alert-success fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Obrigado. Sua solicitação foi enviada!</h4>
                    <p>Número do Protocolo: <span class="label label-success" id="protocolo2"></span></p>
                    <p>Você receberá um email com o número de protocolo referente a esta solicitação e se aplicável você receberá a resposta nesse mesmo email.</p>
                    <!--<p>
                      <a class="btn btn-info" href="http://cmais.com.br">cmais+ O portal de conteúdo da Cultura</a>
                    </p>-->
                  </div>
                </div>
              </div>
              <!-- /ROW-6 enviada -->

              <!-- ROW-7 enviada -->
              <div class="row" id="row7">
                
                <div class="span6">
                  
                  <div class="alert alert-block alert-success fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Obrigado. Seu cadastro foi efetuado com sucesso!</h4>
                    <p>Você deve validar seu cadastro cliando no link que foi enviado para o seu email.</p>
                    <!--<p>
                      <a class="btn btn-info" href="http://cmais.com.br">cmais+ O portal de conteúdo da Cultura</a>
                    </p>-->
                  </div>
                </div>
              </div>
              <!-- /ROW-7 enviada -->
              
              <!-- ROW-8 erro -->       
              <div class="row" id="row8">
                
                <div class="span6">
                  
                  <div class="alert alert-block alert-success fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Atenção: Seu cadastro não pode ser realizado!</h4>
                    <p>Se você já cadastrou o seu email você deve validar seu cadastro cliando no link que foi enviado para o seu email.</p>
                    <!--<p>
                      <a class="btn btn-info" href="http://cmais.com.br">cmais+ O portal de conteúdo da Cultura</a>
                    </p>-->
                  </div>
                </div>
              </div>
              <!-- /ROW-8 enviada -->
              
              <!-- ROW-9 alterado -->
              <div class="row" id="row9">
                
                <div class="span6">
                  
                  <div class="alert alert-block alert-success fade in">
                    <button class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Obrigado. Seu cadastro foi alterado com sucesso!</h4>
                    <p></p>
                    <p>
                      <a class="btn btn-info" href="http://cmais.com.br">cmais+ O portal de conteúdo da Cultura</a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- ROW-9 alterado -->
      
              <hr />
        
              <footer>
                <p>&copy; 2012 <a href="http://cmais.com.br" title="O Portal de conteúdo da Cultura">cmais+</a> O Portal de conteúdo da Cultura</p>
              </footer>

            </div> <!-- /container -->

            <script>
            $(document).ready(function(){
              //assuntos();

              var vars = getUrlVars();
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

              $('#btn1').click(function(){
                if($('#f1_email').val() != "")
                  $('#email').val($('#f1_email').val())
                else if($('#email').val() != "")
                  $('#f1_email').val($('#f1_email').val())
                $('#form1').submit()
              });

              $('#f2_tipo1').click(function(){
                $('#row3').fadeOut('fast', function() {
                  $('#row2').fadeIn();
                });
                $('#f2_tipo1').attr("checked", true);
              });
              $('#f2_tipo2').click(function(){
                $('#row2').fadeOut('fast', function() {
                  $('#row3').fadeIn();
                });
                $('#f2_tipo1').attr("checked", true);
              });
              $('#f3_tipo1').click(function(){
                $('#row3').fadeOut('fast', function() {
                  $('#row2').fadeIn();
                });
                $('#f3_tipo2').attr("checked", true);
              });
              $('#f3_tipo2').click(function(){
                $('#row2').fadeOut('fast', function() {
                  $('#row3').fadeIn();
                });
                $('#f3_tipo2').attr("checked", true);
              });
            
              $.validator.addMethod("cep", function(value, element) {
                response = (value.indexOf('_')<0) ? true : false;
                return response;
              }, "Por favor, forneça um número válido.");
            
              $.validator.addMethod("telefone", function(value, element) {
                response = true;
                if(value!=''){
                  response = (value.indexOf('_')<0) ? true : false;
                }
                return response;
              }, "Por favor, forneça um número válido.");
              
              $("#f2_cpf").mask("999.999.999-99");
              $('#f3_cnpj').mask('99.999.999/9999-99');
              $("#f2_cep, #f3_cep, #f4_cep").mask("99999-999");
              $("#f2_telefone, #f3_telefone, #f4_telefone").mask("(99) 99999999?9");
              
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
                  $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "http://fpa.com.br/sic/actions/soap.php",
                    data: $("#form1").serialize(),
                    beforeSend: function(){
                      $('#loader1').show();
                      $('#btn1').hide();
                    },
                    success: function(data){
                      $('#loader1').hide();
                      $('#btn1').show();
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
            
              $('#form2').validate({
                rules: {
                  f2_nome: {
                    required: true
                  },
                  f2_cpf: {
                    required: true
                  },
                  f2_estado: {
                    required: true
                  },
                  f2_local: {
                    required: true
                  },
                  f2_endereco: {
                    required: true
                  },
                  f2_numero: {
                    required: true
                  },
                  f2_cep: {
                    required: true
                  },
                  f2_bairro: {
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
                    url: "http://fpa.com.br/sic/actions/soap.php",
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
            
              $('#form3').validate({
                rules: {
                  f3_nome: {
                    required: true
                  },
                  f3_cnpj: {
                    required: true
                  },
                  f3_estado: {
                    required: true
                  },
                  f3_local: {
                    required: true
                  },
                  f3_endereco: {
                    required: true
                  },
                  f3_numero: {
                    required: true
                  },
                  f3_cep: {
                    required: true
                  },
                  f3_bairro: {
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
                    url: "http://fpa.com.br/sic/actions/soap.php",
                    data: $("#form3").serialize(),
                    beforeSend: function(){
                      $('#loader3').show();
                      $('#btn3').hide();
                    },
                    success: function(data){
                      $('#loader3').hide();
                      $('#btn3').show();
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
            
              $('#form4').validate({
                rules: {
                  f4_descricao: {
                    minlength: 2,
                    maxlength: 500,
                    required: true
                  },
                  f4_cod_assunto: {
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
                    url: "http://fpa.com.br/sic/actions/soap.php",
                    data: $("#form4").serialize(),
                    beforeSend: function(){
                      $('#loader4').show();
                      $('#btn4').hide();
                    },
                    success: function(data){
                      $('#loader4').hide();
                      $('#btn4').show();
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
              
            });
            
            function municipios(form){
              $.ajax({
                type: "POST",
                dataType: "json",
                url: "http://fpa.com.br/sic/actions/soap.php",
                data: "action=municipios&uf="+$('#'+form+'_estado :selected').val()+"&form="+form,
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
            
            function assuntos(){
              $.ajax({
                type: "POST",
                dataType: "json",
                url: "http://fpa.com.br/sic/actions/soap.php",
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
            <!-- CORPO SITE -->
        </div>
        <!-- CAPA SITE -->
    </div>
    <!-- DIV CRIADA SOMENTE PRA MUDAR O RESIZE DA PG -->
</body>
</html>