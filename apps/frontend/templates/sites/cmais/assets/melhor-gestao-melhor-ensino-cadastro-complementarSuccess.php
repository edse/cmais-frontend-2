    <!--link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" /-->
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    
    <style type="text/css">
      .contatoWrapper #form-contato .t10 input { margin-top:-3px; }
    </style>
    
    

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
                  
                  <h3 class="tit-pagina grid3">Processo seletivo de tutoria - Melhor Gestão Melhor Ensino</h3>
                  <!--p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p-->
                  <!--
                  <p>Prezado Professor,</p>
                  <p>Para se cadastrar ao processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP preencha todos os campos do formulário a seguir:</p>
                  -->
                  <div style="border: 1px solid #cc0000; padding: 20px; font-weight: bold; font-size: 16px; float:left; color: red">
                    ATENÇÃO: Esta é uma solicitação de atualização dos dados cadastrados no formulário de inscrição "Melhor Gestão Melhor Ensino", este formulário serve apenas para aqueles que efetuaram o cadastro mas as questões abaixo não foram respondidas, se você recebeu este link por email (oficial) preencha os dados e clique em enviar.
                  </div>
                  
                  <!-- mensagens de status -->
                  <div class="msgAcerto" style="display:none; min-height: 80px; float:left;" id="statusMsg_0">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Obrigado! Seu cadastro foi complementado com sucesso.</p>
                      <p>Por favor, não é necessário mandar e-mail e fazer contato por telefone, seu cadastro já está complementado. </p>
                      <p>Aguarde que em breve entraremos em contato para maiores informações!</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_1">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">O complemento do seu cadastro não pôde ser efetuado.</p>
                      <p>Por favor, verifique se você preencheu todos os campos corretamente.</p>
                      <p>Se o problema persistir, entre em contato conosco.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_2">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Seu cadastro não precisa ser complementado.</p>
                      <p>Já consta em nosso banco de dados as informações complementares de sua inscrição.</p>
                      <p>Aguarde que em breve entraremos em contato para maiores informações!</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_3">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">O complemento do seu cadastro não pôde ser efetuado.</p>
                      <p>O e-mail digitado não consta em nosso banco de dados.</p>
                      <p>Por favor, recarregue a página e digite o mesmo e-mail que você utilizou anteriormente.</p>
                    </div>
                    <hr />
                  </div>
                  <!--/mensagens de status -->
                  
                  
                  <!-- formulario -->
                  <form id="form-contato" method="post" action="">
                    
                    <p class="enun">Dados de identificação</p>
                    <div class="linha t2">
                      <label>E-mail</label>
                      <input type="text" name="email" id="email" style="width:308px" />
                    </div>
                    
                    <p class="enun">Outras informações</p>

                    <p class="pergunta">Possui experiência com coordenação de tutoria online?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="exp_coord_tutoria" id="sim3" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="exp_coord_tutoria" id="nao3" value="nao" />Não</label>
                    </div>
                    
                    <p class="pergunta">Esta atuando como Supervisor de Ensino da rede pública estadual de São Paulo?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="atuacao_sup" id="sim4" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="atuacao_sup" id="nao4" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->
                    
                     <p class="pergunta">Participou como cursista no encontro presencial realizado pela EFAP/CEGEB no Curso de Supervisores, de 01 a 04 de abril do ano de 2013, em Águas de Lindóia?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="part_encontro" id="sim5" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="part_encontro" id="nao5" value="nao" />Não</label>
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
                  <!--/formulario -->
                  
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
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              url: "http://cmais.com.br/actions/cadastro-de-tutores-2/action2.php", 
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
                  $("#statusMsg_0").show();
                  $('img#ajax-loader').hide();
                }
                else if(data == "1" || data == "2") {
                  $(".msgErro").hide();
                  $("#statusMsg_1").show();
                  $('img#ajax-loader').hide();
                }
                else if(data == "3") {
                  $(".msgErro").hide();
                  $("#statusMsg_3").show();
                  $('img#ajax-loader').hide();
                }
                else if(data == "4" || data == "5") {
                  $(".msgErro").hide();
                  $("#statusMsg_2").show();
                  $('img#ajax-loader').hide();
                }
                else {
                  alert('Erro inesperado!');
                }
              }
            });         
          },
          rules:{
            email:{
              required: true,
              email: true
            },
            exp_coord_tutoria:{
              required: true
            },
            atuacao_sup: {
              required: true
            },
            part_encontro: {
              required: true
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            captcha: "Digite corretamente o código que está ao lado.",
            email: "Digite um email válido."
          }
        });
      });
    </script>