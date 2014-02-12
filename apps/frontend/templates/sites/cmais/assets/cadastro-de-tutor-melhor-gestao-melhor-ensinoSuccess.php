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
                  <div style="border: 1px solid #cc0000; padding: 20px; font-weight: bold; font-size: 16px; float:left; color: red">Atenção: as incrições vão até o dia 23/04/2013</div>
                  
                  <!-- mensagens de status -->
                  <div class="msgAcerto" style="display:none; min-height: 80px; float:left;" id="statusMsg_0">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Obrigado! Seu cadastro foi efetuado com sucesso.</p>
                      <p>Esta tela é a confirmação de que seu cadastro foi efetuado, não será enviado e-mail de confirmação.<p>
                      <p>Por favor, não é necessário mandar e-mail e fazer contato por telefone, seu cadastro já está confirmado. </p>
                      <p>Aguarde que em breve entraremos em contato para maiores informações!</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_1">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Seu cadastro não pôde ser efetuado.</p>
                      <p>Por favor, verifique se você preencheu todos os campos corretamente.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_2">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Seu cadastro não pôde ser efetuado.</p>
                      <p>Não é possível atuar como tutor se você possuir inscrição ativa como aluno em nosso banco de dados, ou se estiver atualmente em exercício como professor de sala de aula na disciplina de Língua Portuguesa ou de Matemática no Ensino Fundamental dos Anos Finais da Rede Estadual de Ensino de São Paulo.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_3">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Cadastro existente.</p>
                      <p>Já consta em nosso banco de dados sua inscrição, aguarde que em breve faremos contato!</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_4">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Erro interno.</p>
                      <p>Por favor, tente novamente mais tarde ou entre em contato por telefone ou e-mail.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_5">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Seu cadastro não pôde ser efetuado.</p>
                      <p>Encerrado o prazo para as incrições!</p>  
                    </div>
                    <hr />
                  </div>
                  
                  <!--/mensagens de status -->
                  
                  
                  <!-- formulario -->
                  <form id="form-contato" method="post" action="">
                    
                    <!--span class="linhaFundo"></span-->
                     
                    <p class="enun">Disciplina</p>
                    <div class="linha t2">
                      <label>Escolha</label>
                      <select name="disciplina" id="disciplina" style="width:200px">
                        <option value="">---</option>
                        <option value="Língua Portuguesa">Língua Portuguesa</option>
                        <option value="Matemática">Matemática</option>
                        <option value="Gestão Escolar">Gestão Escolar</option>
                      </select>
                    </div>
                    <!--
                    <div>
                      <div class="linha t7" style="margin-right: 30px">
                        <input type="checkbox" class="disciplina" name="disciplina1" id="disciplina1" value="Língua Portuguesa" style="float:left; margin-right:10px" />
                        <label style="margin-top:4px">Língua Portuguesa</label>
                      </div>
                      <div class="linha t7" style="margin-right: 30px">
                        <input type="checkbox" class="disciplina" name="disciplina2" id="disciplina2" value="Matemática" style="float:left; margin-right:10px" />
                        <label style="margin-top:4px">Matemática</label>
                      </div>
                      <div class="linha t7" style="margin-right: 30px">
                        <input type="checkbox" class="disciplina" name="disciplina3" id="disciplina3" value="Gestão Escolar" style="float:left; margin-right:10px" />
                        <label style="margin-top:4px">Gestão Escolar</label>
                      </div>
                    </div>
                    -->
                    
                    <!--span class="linhaFundo"></span-->
                    
                    <p class="enun">Dados de identificação</p>
                    <div class="linha t1 exc">
                      <label>Nome completo (sem abreviações)</label>
                      <input type="text" name="nome" id="nome" style="width:626px" value="<?php if (isset($_REQUEST['nome'])): ?><?php echo urldecode($_REQUEST['nome']) ?><?php endif; ?>" />
                    </div>
                    <div class="linha t2">
                      <label>CPF</label>
                      <input type="text" name="cpf" id="cpf" />
                    </div>
                    <div class="linha t2">
                      <label>RG</label>
                      <input type="text" name="rg" id="rg" />
                    </div>
                    <div class="linha t2">
                      <label>E-mail</label>
                      <input type="text" name="email" id="email" style="width:308px" />
                    </div>
                    <div class="linha t2" style="clear:left">
                      <label>Telefone residencial</label>
                      <input type="text" name="telefone" id="telefone" style="width:150px" />
                    </div>
                    <div class="linha t2">
                      <label>Telefone Celular</label>
                      <input type="text" name="celular" id="celular" style="width:150px" />
                    </div>

                    <!--span class="linhaFundo"></span-->
                    
                    <p class="enun">Formação Acadêmica</p>
                    <div class="linha t2">
                      <label>Escolha</label>
                      <select name="formacao" id="formacao" style="width:200px">
                        <option value="">---</option>
                        <option value="Licenciado em Letras / Português">Licenciado em Letras / Português</option>
                        <option value="Licenciado em Matemática">Licenciado em Matemática</option>
                        <option value="Gestão Escolar">Gestão Escolar</option>
                      </select>
                    </div>
                    <!--
                    <div>
                      <div class="linha t7" style="clear:both">
                        <input type="checkbox" class="formacao" name="formacao1" id="formacao1" value="Licenciado em Letras / Português"  style="float:left; margin-right:10px"/>
                        <label style="margin-top:4px">Licenciado em Letras / Português</label>
                      </div>
                      <div class="linha t7" style="clear:both">
                        <input type="checkbox" class="formacao" name="formacao2" id="formacao2" value="Licenciado em Matemática"  style="float:left; margin-right:10px"/>
                        <label style="margin-top:4px">Licenciado em Matemática</label>
                      </div>
                      <div class="linha t7" style="clear:both">
                        <input type="checkbox" class="formacao" name="formacao3" id="formacao3" value="Licenciado em Gestão Escolar"  style="float:left; margin-right:10px"/>
                        <label style="margin-top:4px">Licenciado em Gestão Escolar</label>
                      </div>
                    </div>
                    -->

                    <!--span class="linhaFundo"></span-->
                    
                    <p class="enun">Outras informações</p>

                    <p class="pergunta">Participou como professor tutor em algum curso a distância?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="participou" id="sim1" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="participou" id="nao1" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->
                    
                    <p class="pergunta">Teve contrato ou carteira assinada com a FPA (Fundação Padre Anchieta – TV Cultura) nos últimos 06 meses?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="fpavinculo" id="sim2" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="fpavinculo" id="nao2" value="nao" />Não</label>
                    </div>

                    <!--span class="linhaFundo"></span--> 
                    
                    <p class="pergunta">Possui experiência com coordenação de tutoria online?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="exp_coord_tutoria" id="sim3" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="exp_coord_tutoria" id="nao3" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->
                    
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
                    
                    <!--span class="linhaFundo"></span-->


                    <p class="enun">Local de Prova</p>
                    <div class="linha t2">
                      <label>Cidade</label>
                      <select name="localdeprova" id="localdeprova" style="width:170px">
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
                    
                    <!--span class="linhaFundo"></span-->
                    
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
    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        /*
        $('.disciplina').click(function() {
          $("label[for='disciplina1'], label[for='disciplina2'], label[for='disciplina3']").hide();
        });
        $('.formacao').click(function() {
          $("label[for='formacao1'], label[for='formacao2'], label[for='formacao3']").hide();
        });
        */
        
        
        $("#cpf").mask("999.999.999-99");
        $("#rg").mask("9999999?9999");
        $("#celular").mask("(99) 99999999?9");
        $("#telefone").mask("(99) 99999999");
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              url: "http://cmais.com.br/actions/cadastro-de-tutores-2/action.php",
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
                else if(data > 0) {
                  $(".msgErro").hide();
                  $("#statusMsg_"+data).show();
                  $('img#ajax-loader').hide();
                }
                else {
                  alert('Erro inesperado!');
                }
              }
            });         
          },
          rules:{
            /*
            disciplina:{
              required: function() {
                if ($('#disciplina2').is(':checked') || $('#disciplina3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            disciplina2:{
              required: function() {
                if ($('#disciplina1').is(':checked') || $('#disciplina3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            disciplina3:{
              required: function() {
                if ($('#disciplina1').is(':checked') || $('#disciplina2').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            */
            disciplina: {
              required: true
            },
            nome:{
              required: true,
              minlength: 5
            },
            cpf:{
              required: true,
              verificaCPF: true
            },
            rg:{
              required: true
            },
            email:{
              required: true,
              email: true
            },
            telefone:{
              required: true
            },
            celular:{
              required: true
            },
            /*
            formacao1:{
              required: function() {
                if ($('#formacao2').is(':checked') || $('#formacao3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            formacao2:{
              required: function() {
                if ($('#formacao1').is(':checked') || $('#formacao3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            formacao3:{
              required: function() {
                if ($('#formacao1').is(':checked') || $('#formacao2').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            */
            formacao: {
              required: true
            },
            participou:{
              required: true
            },
            fpavinculo:{
              required: true
            },
            exp_coord_tutoria:{
              required: true
            },
            localdeprova:{
              required: true
            },
            exp_coord_tutoria: {
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
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
    </script>