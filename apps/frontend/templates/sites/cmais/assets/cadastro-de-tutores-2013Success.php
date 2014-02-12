
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="contato grid2">
                <div class="contatoWrapper">
                  
                  <?php if(date('Y-m-d') > "2013-01-14"): ?>
                    
                  <h3 class="tit-pagina grid3">Encerradas as inscrições para Tutor de Inglês</h3>
                  <p class="titu">O cadastramento realizado pela Fundação Padre Anchieta terminou no dia 14</p>
                  <p>As inscrições para a seleção de Tutores de Inglês para educação a distância foram encerradas à meia-noite do dia 14/01/13.</p>
                  <br />
                  <p>Nos próximos dias, os professores que se cadastraram serão informados por e-mail sobre a análise de seus currículos e a continuidade do processo.</p>
                  <br />
                  <p>Os classificados concorrerão a vagas de tutor para os cursos a serem oferecidos nos dois semestres de 2013. Ou seja, eles poderão ser selecionados/convocados para atuar no curso do primeiro OU do segundo semestre. Em ambos os casos, pelo período de três meses.</p>
        
                  <?php else: ?>
                    
                  <h3 class="tit-pagina grid3">Cadastro para processo seletivo de tutoria - Curso de inglês a distância</h3>
                  <p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p>
                  <p>Prezado Professor,</p>
                  <p>Para se cadastrar ao processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP preencha todos os campos do formulário a seguir:</p>
        
                  <div class="msgErro" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Sua mensagem não pode ser enviada.</p>
                      <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgAcerto" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                    </div>
                    <hr />
                  </div>
                  
                  <form id="form-contato" method="post" action="">
                    <input type="hidden" name="cadastro-tutoria" id="cadastro-tutoria" value="true">
                    <input type="hidden" name="section_id" id="section_id" value="2106">
                    <p class="enun">Atividade pretendida</p>
                    <div class="linha t11">
                      <input type="checkbox" name="atividade_pretendida1" id="presencial" value="presencial" class="atividade_pretendida" />
                      <label>Tutor presencial</label>
                    </div>
                    <div class="linha t11">
                      <input type="checkbox" name="atividade_pretendida2" id="online" value="online" class="atividade_pretendida" />
                      <label>Tutor online</label>
                    </div>
                    
                    <!--
                    <div class="linha t1">
                      <label>cidade</label>
                      <select name="cidade" id="cidade">
                        <option value="">---</option>
                        <option value="Araçatuba">Araçatuba</option>
                        <option value="Bauru">Bauru</option>
                        <option value="Campinas">Campinas</option>
                        <option value="Franca">Franca</option>
                        <option value="Presidente Prudente">Presidente Prudente</option>
                        <option value="Santos">Santos</option>
                        <option value="São José do Rio Preto">São José do Rio Preto</option>
                        <option value="São José dos Campos">São José dos Campos</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sorocaba">Sorocaba</option>
                      </select>
                    </div>
                    -->
                    
                    
                    <span class="linhaFundo"></span> 
                    
                    
                    <p class="enun">Dados de identificação</p>
                    <div class="linha t1 exc">
                      <label>Nome completo (sem abreviações)</label>
                      <input type="text" name="nome" id="nome" style="width:626px" />
                    </div>
                    
                    <div class="linha t2">
                      <label>CPF</label>
                      <input type="text" name="cpf" id="cpf" />
                    </div>
                    
                    <div class="linha t4">
                      <label>Email</label>
                      <input id="email" type="text" name="email">
                    </div>
                    
                    <p class="pergunta">É professor da Rede da Secretaria de Estado da Educação de São Paulo?</p>
                    
                    <div class="linha t10">
                      <input type="radio" name="rede" id="sim" value="sim" />
                      <label>Sim</label>
                    </div>
                    
                    <div class="linha t10">
                      <input type="radio" name="rede" id="nao" value="nao" />
                      <label>Não</label>
                    </div>
                    
                    <p></p>
                    
                    <div class="linha t5" id="escolaWrapper" style="display:none">
                      <label>Nome da escola</label>
                      <input type="text" name="escola" id="escola" />
                    </div>
                    
                    <div class="linha t5" id="atividadeWrapper" style="display:none">
                      <label>Especificar a atividade:</label>
                      <input type="text" name="atividade" id="atividade" />
                    </div>
                    
                    <p class="pergunta">PCNP?</p>
                    <div class="linha t10">
                      <input type="radio" name="pcnp" id="sim4" value="sim" />
                      <label>Sim</label>
                    </div>
                    
                    <div class="linha t10">
                      <input type="radio" name="pcnp" id="nao4" value="não" />
                      <label>Não</label>
                    </div>
                    
                    <p></p>
                    
                    <div id="pcnpWrapper" style="display:none">
                      <div class="linha t11">
                        <input type="checkbox" name="pcnp1" id="pcnp1" value="tec" class="pcnp" />
                        <label>Tec</label>
                      </div>
                      
                      <div class="linha t11">
                        <input type="checkbox" name="pcnp2" id="pcnp2" value="inglês" class="pcnp" />
                        <label>Inglês</label>
                      </div>
                      
                      <div class="linha t11">
                        <input type="checkbox" name="pcnp3" id="pcnp3" value="outro" class="pcnp" />
                        <label>Outro</label>
                      </div>
                      
                    </div>
                    
                    <p></p>
                    
                    <div class="linha t4">
                      <label style="width:300px">DE (Diretoria de Ensino da SEE SP)</label>
                      <input type="text" name="de" id="de" />
                    </div>
                    
                    <span class="linhaFundo"></span>
                    
                    <p class="enun">Endereço Residencial</p>
                    <div class="linha t1">
                      <label>Endereço (Rua, Avenida, Travessa, Etc.)</label>
                      <input type="text" name="rua" id="rua" />
                    </div>
                    
                    <div class="linha t2">
                      <label>Número</label>
                      <input type="text" name="numero" id="numero" />
                    </div>
                    
                    <div class="linha t2">
                      <label>Complemento</label>
                      <input type="text" name="compl" id="compl" />
                    </div>
                    
                    <div class="linha t33">
                      <label>Bairro</label>
                      <input type="text" name="bairro" id="bairro" />
                    </div>
                    
                    <div class="linha t2">
                      <label>CEP</label>
                      <input type="text" name="cep" id="cep" />
                    </div>
                    
                    <div class="linha t1">
                      <label>Cidade</label>
                      <input type="text" name="cidade" id="cidade" />
                    </div>
                    
                    <div class="linha t2">
                      <label>Estado</label>
                      <input type="text" name="estado" id="estado" />
                    </div>
                    
                    <div class="linha t4">
                      <label>DDD</label>
                      <input type="text" name="dddT" id="dddT" maxlength="2" />
                    </div>
                    
                    <div class="linha t2">
                      <label>Telefone</label>
                      <input type="text" name="tel" id="tel" />
                    </div>
                    
                    <div class="linha t4">
                      <label>DDD</label>
                      <input type="text" name="dddC" id="dddC" maxlength="2" />
                    </div>
                    
                    <div class="linha t2">
                      <label>Celular</label>
                      <input type="text" name="cel" id="cel" />
                    </div>
                    
                    <span class="linhaFundo"></span>
                    
                    <p class="enun">Formação Acadêmica</p>
                    
                    <p class="pergunta">É licenciado em letras?</p>
                    <div class="linha t11">
                      <input type="checkbox" name="licenciatura1" id="ingl" value="ingles" />
                      <label>Lingua Inglesa</label>
                    </div>
                    
                    <div class="linha t11">
                      <input type="checkbox" name="licenciatura2" id="port" value="portugues" />
                      <label>Português</label>
                    </div>
                    
                    <div class="linha t11">
                      <input type="checkbox" name="licenciatura3" id="idi" value="outro idioma" />
                      <label>Outro idioma</label>
                    </div>
                    
                    <p class="pergunta">Possui certificado internacional em inglês?</p>
                    
                    <div class="linha t10">
                      <input type="radio" name="certificado" id="sim1" value="sim" />
                      <label>Sim</label>
                    </div>
                    
                    <div class="linha t10">
                      <input type="radio" name="certificado" id="nao1" value="nao" />
                      <label>Não</label>
                    </div>
                    
                    <div class="linha t5" style="float: none;clear: both; display:none" id="certificadoInglWrapper">
                      <label>Instituição de ensino</label>
                      <input id="ensino" type="text" name="ensino">
                    </div>
                    
                    <span class="linhaFundo"></span>
                    
                    <p class="enun">Experiência em tutoria em cursos à distância</p>
                    
                    <p class="pergunta">Participou como professor tutor em algum curso à distância?</p>
                    <div class="linha t10">
                      <input type="radio" name="certificado2" id="sim2" value="sim" />
                      <label>Sim</label>
                    </div>
                    
                    <div class="linha t10">
                      <input type="radio" name="certificado2" id="nao2" value="nao" />
                      <label>Não</label>
                    </div>
                    
                    <div class="linha t3 codigo" id="captchaimage">
                      <label for="captcha">Confirma&ccedil;&atilde;o</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                        <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                      <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                      <br />
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" />
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                    </div>
                  </form>
                <?php endif; ?>
                </div>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->

    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    
    <script type="text/javascript">
    
      $(document).ready(function(){
        
        $('#sim').click(function() {
          $('#atividadeWrapper').hide();
          $('#escolaWrapper').show();       
        });
        $('#nao').click(function() {
          $('#escolaWrapper').hide();   
          $('#atividadeWrapper').show();       
        });
        $('#sim4').click(function() {
          $('#pcnpWrapper').show();          
        });
        $('#nao4').click(function() {
          $('#pcnpWrapper').hide();          
        });
        $('#sim1').click(function() {
          $('#certificadoInglWrapper').show();          
        });
        $('#nao1').click(function() {
          $('#certificadoInglWrapper').hide();          
        });
        /*        
        atividade_checked = true;
        
        function countChecked() {
          var n = $(".atividade_pretendida:checked").length;
          if (n < 2)
            atividade_checked = true;
          else
            atividade_checked = false;
        }
                
        $(".atividade_pretendida:checkbox").click(countChecked);
        */
        $('.atividade_pretendida').click(function() {
          $("label[for='atividade_pretendida1'], label[for='atividade_pretendida2']").hide();
        });
        $('.pcnp').click(function() {
          $("label[for='pcnp1'], label[for='pcnp2'], label[for='pcnp3']").hide();
        });
        

        var num = 0;
        $("#cpf").mask("999.999.999-99");
        $("#cep").mask("99999-999");
        $("#data").mask("99/99/9999");
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              beforeSend: function(){
                $('input#enviar').attr('disabled','disabled');
                $(".msgAcerto").hide();
                $(".msgErro").hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
              $('input#enviar').removeAttr('disabled');
                window.location.href="#";
                if(data == "1"){
                  $("#form-contato").clearForm();
                  $("#form-contato").hide();
                  $(".msgAcerto").show();
                  $('img#ajax-loader').hide();
                }
                else {
                  $(".msgErro").show();
                  $('img#ajax-loader').hide();
                }
              }
            });         
          },
          rules:{
            nome:{
              required: true,
              minlength: 2
            },
            email:{
              required: true,
              email: true
            },
            cpf:{
              required: true,
              minlength: 11
            },
            data:{
              required: true,
              minlength: 10
            },
            rg:{
              required: true,
              minlength: 2
            },
            exp:{
              required: true,
              minlength: 2
            },
            uf:{
              required: true,
              minlength: 2
            },
            rua:{
              required: true,
              minlength: 2
            },
            numero:{
              required: true,
              minlength: 2
            },
            bairro:{
              required: true,
              minlength: 2
            },
            cep:{
              required: true,
              minlength: 2
            },
            cidade:{
              required: true,
              minlength: 3
            },
            estado:{
              required: true,
              minlength: 2
            },
            dddT:{
              required: true,
              minlength: 2
            },
            dddC:{
              required: true,
              minlength: 2
            },
            tel:{
              required: true,
              minlength: 8
            },
            cel:{
              required: true,
              minlength: 8
            },
            escola:{
              required: function() {
                if ($("#sim").is(':checked'))
                  return true;
                else
                  return false;
              },
              minlength: 5
            },
            atividade:{
              required: function() {
                if ($("#nao").is(':checked'))
                  return true;
                else
                  return false;
              }
           },
            ensino:{
              required: function() {
                if ($("#sim1").is(':checked'))
                  return true;
                else
                  return false;
              },
              minlength: 5
            },
            atividade_pretendida1:{
              required: function() {
                if ($('#online').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
              }
            },
            atividade_pretendida2:{
              required: function() {
                if ($('#presencial').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
              }
            },
            rede: {
              required: true
            },
            certificado: {
              required: true
            },
            certificado2: {
              required: true
            },
            pcnp: {
              required: true
            },
            pcnp1: {
              required: function() {
                if ($('#pcnp2').is(':checked') || $('#pcnp3').is(':checked') || $('#nao4').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
              }
            },
            pcnp2: {
              required: function() {
                if ($('#pcnp1').is(':checked') || $('#pcnp3').is(':checked') || $('#nao4').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
              }
            },
            pcnp3: {
              required: function() {
                if ($('#pcnp1').is(':checked') || $('#pcnp2').is(':checked') || $('#nao4').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
              }
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            cidade: "Este campo &eacute; Obrigat&oacute;rio.",
            estado: "Este campo &eacute; Obrigat&oacute;rio.",
            assunto: "Este campo &eacute; Obrigat&oacute;rio.",
            mensagem: "Este campo &eacute; Obrigat&oacute;rio.",
            rg: "Este campo &eacute; Obrigat&oacute;rio.",
            dddC: "*",
            dddT: "*",
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
      
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script>