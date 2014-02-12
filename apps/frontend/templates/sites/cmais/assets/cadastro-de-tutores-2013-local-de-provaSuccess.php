  <?php if($_REQUEST['nome']): ?>

    <!--link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" /-->
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
                  
                  <?php /*if(date('Y-m-d') > "2013-01-14"): ?>
                    
                  <h3 class="tit-pagina grid3">Encerradas as inscrições para Tutor de Inglês</h3>
                  <p class="titu">O cadastramento realizado pela Fundação Padre Anchieta terminou no dia 14</p>
                  <p>As inscrições para a seleção de Tutores de Inglês para educação a distância foram encerradas à meia-noite do dia 14/01/13.</p>
                  <br />
                  <p>Nos próximos dias, os professores que se cadastraram serão informados por e-mail sobre a análise de seus currículos e a continuidade do processo.</p>
                  <br />
                  <p>Os classificados concorrerão a vagas de tutor para os cursos a serem oferecidos nos dois semestres de 2013. Ou seja, eles poderão ser selecionados/convocados para atuar no curso do primeiro OU do segundo semestre. Em ambos os casos, pelo período de três meses.</p>
        
                  <?php else: */ ?>
                    
                  <h3 class="tit-pagina grid3">Processo seletivo de tutoria - Curso inglês Online</h3>
                  <p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p>
                  <!--
                  <p>Prezado Professor,</p>
                  <p>Para se cadastrar ao processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP preencha todos os campos do formulário a seguir:</p>
                  -->
                  
                  <div style="border:2px solid #ff6633; clear:both; padding-bottom:50px; margin-top:20px; float:left; padding:20px;">
                    <!--
                    <h3 class="titulos" style="text-align: center">Inscrições encerradas.</h3>
                    <a href="http://cmais.com.br/cadastro-de-tutores-2013-lista-de-selecionados" title="Voltar" style="color:#ff6633; text-align: center; display: block">Voltar para listade candidatos selecionados.</p>
                    -->
                    <p style="text-align: center"><bold style="font-weight: bold;">Atenção:</bold> Caso ainda não tenha efetuado sua escolha envie email para <a style="color:#ff6633;" href="mailto:tutoriaingles@tvcultura.com.br" title="tutoriaingles@tvcultura.com.br">tutoriaingles@tvcultura.com.br</a>, com os dados abaixo:</p>
                    <p>Nome completo:</li>
                    <p>CPF:</p>
                    <p>Email:</p>
                    <hr>
                    <p>Local escolhido para a prova:</p>
                    <hr>
                    <p>Opções para realização da prova:</p>
                    <p>Araçatuba</p>
                    <p>Bauru</p>
                    <p>Campinas</p>
                    <p>Franca</p>
                    <p>Prudente Prudente</p>
                    <p>Santos</p>
                    <p>São José dos Campos</p>
                    <p>São Paulo</p>
                    <p>Sorocaba</p>
                    <hr>
                    <p>Att</p>
                    <p>Tutoria Online</p>
                  </div>
                  <!--
                  <div class="msgErro" style="display:none; min-height: 80px  ">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Sua mensagem não pode ser enviada.</p>
                      <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px" id="msgErroCPF">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">CPF Inválido! Sua mensagem não pôde ser enviada.</p>
                      <p>Confirme se você preencheu o CPF corretamente e tente novamente.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgAcerto" style="display:none; min-height: 80px">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      
                    </div>
                    <hr />
                  </div>
                  
                  <form id="form-contato" method="post" action="">
                    <span class="linhaFundo"></span> 
                    
                    <p class="enun">Dados de identificação</p>
                    <div class="linha t1 exc">
                      <label>Nome completo (sem abreviações)</label>
                      <input type="text" name="nome" id="nome" style="width:626px" value="<?php if (isset($_REQUEST['nome'])): ?><?php echo urldecode($_REQUEST['nome']) ?><?php endif; ?>" />
                    </div>
                    
                    <div class="linha t2">
                      <label>CPF</label>
                      <input type="text" name="cpf" id="cpf" />
                    </div>
                    
                    <div class="linha t1">
                      <label>Cidade (Local de Prova)</label>
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
                <?php // endif; ?>
                -->
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
    
        //$("#cpf").mask("999.999.999-9??");
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              url: "http://cmais.com.br/actions/cadastro-de-tutores/action.php",
              beforeSend: function(){
                $('input#enviar').attr('disabled','disabled');
                $(".msgAcerto").hide();
                $(".msgErro").hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
                $('input#enviar').removeAttr('disabled');
                window.location.href="#";
                if(data == "0"){
                  $("#form-contato").clearForm();
                  $("#form-contato").hide();
                  $(".msgAcerto").show();
                  $('img#ajax-loader').hide();
                }
                else if (data == "1") {
                  $(".msgErro").show();
                  $('img#ajax-loader').hide();
                }
                else if (data == "2") {
                  $("#msgErroCPF").show();
                  $('img#ajax-loader').hide();
                }
                else {
                  alert('Erro inesperado!');
                }
              }
            });         
          },
          rules:{
            nome:{
              required: true,
              minlength: 2
            },
            cpf:{
              required: true
            },
            cidade:{
              required: true
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            cpf: "Este campo &eacute; Obrigat&oacute;rio.",
            cidade: "Este campo &eacute; Obrigat&oacute;rio.",
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
      
    </script>
  <?php else: ?>
    <?php header("Location: http://cmais.com.br/cadastro-de-tutores-2013-segunda-etapa"); ?>
    <?php die(); ?>
  <?php endif; ?>
