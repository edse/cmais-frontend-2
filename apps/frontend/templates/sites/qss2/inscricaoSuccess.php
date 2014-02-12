<script>
var error = getParameterByName('error');
var success = getParameterByName('success');
 //alert("error: "+error+"\n"+"success: "+success);

$(function(){
  if (error || success)
  {
    $("#form-contato").hide();
    
    if (success == "1")
    {
      $("#msgSuccess").show();
      $("#msgError").hide();
    }
    if (error == "1")
    {
      $("#msgError").show();
      $("#msgSuccess").hide();
    }  
  }
});
</script>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/qss-site.css" type="text/css" />
    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
  
  <div class="bg-chamada">
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
  <div class="bg-site"></div>
  
    <!-- CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php elseif(isset($site) && $site->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
                <h3 class="tit-pagina grid1"><?php echo $site->getTitle() ?></h3>
            </a>
          </h2>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>

          
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
          
          <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
          <div class="navegacao txt-10">
            <a href="../" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
          </div>
          <?php endif; ?>
      
        </div>
        <!-- /box-topo -->
        
      </div>
      
      <!-- /BARRA SITE -->

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
                <h3 class="tit-pagina grid2"><?php echo $section->getTitle() ?></h3>
                <div id="msgSuccess" style="display:none">
                  <p>Inscrição realizada com sucesso!</p>
                  <div class="bg">
                    <p><strong>Atenção:</strong></p>
                    <p>No dia do programa o participante deverá, obrigatoriamente, trazer um documento original com foto.</p>
                    <p>No caso de impossibilidade da participação do amigo, a produção do programa deverá ser avisada.</p>
                  </div>
                </div>
                <div id="msgError" style="display:none">
                  <p><strong>Não foi possível enviar a inscrição.</strong></p>
                  <p>Por favor, tente novamente mais tarde!</p>
                </div>
                <form id="form-contato" method="post" action="/actions/qss/inscricao.php">
                  <p><?php echo $section->getDescription()?></p>
                  <fieldset>
                    <legend><h1>Participante</h1></legend>
                    <p>Preencha os seus dados:</p>
                    <label class="span6">Nome completo:<input type="text" name="participanteNome" id="participanteNome" value="" /></label>
                    <label class="span2">Idade: <input type="text" maxlength="3" name="participanteIdade" id="participanteIdade" value="" /></label>
                    <label class="span8">Endereço: <input type="text" name="participanteEndereco" id="participanteEndereco" value="" /></label>
                    <label class="span6">Bairro: <input type="text" name="participanteBairro" id="participanteBairro" value="" /></label>
                    <label class="span2">CEP: <input type="text" name="participanteCep" id="participanteCep" value="" class="cep" /></label>
                    <label class="span6">Cidade: <input type="text" name="participanteCidade" id="participanteCidade" value="" /></label>
                    <label class="span2">RG: <input type="text" maxlength="20" name="participanteRg" id="participanteRg" value="" /></label>
                    <label class="span4">CPF: <input type="text" name="participanteCpf" id="participanteCpf" value="" class="cpf" /></label>
                    <label class="span4">Data de nascimento: <input type="text" name="participanteNascimento" id="participanteNascimento" value="" class="nascimento" /></label>
                    <label class="span4">Telefone para contato: <input type="text" name="participanteTelefone" id="participanteTelefone" value="" class="telefone" /></label>
                    <label class="span4">Email: <input type="text" name="participanteEmail" id="participanteEmail" value="" /></label>
                    <label class="span8">Nome da mãe: <input type="text" name="participanteNomeMae" id="participanteNomeMae" value="" /></label>
                    <label class="span4">Profissão: <input type="text" name="participanteProfissao" id="participanteProfissao" value="" /></label>
                    <label class="span4">Grau de escolaridade: <input type="text" name="participanteEscolaridade" id="participanteEscolaridade" value="" /></label>
                    <label class="span8" style="margin-bottom: 0;">Você tem todas as condições de saúde para participar do programa?</label>
                    <label class="span5"><input type="radio" id="participanteSaudeCondicoes" name="participanteSaudeCondicoes" value="sim" />Sim</label>
                    <label class="span5"><input type="radio" id="participanteSaudeCondicoes" name="participanteSaudeCondicoes" value="não" />Não</label>
                    </label>
                    <label class="span8">Você tem alguma restrição de saúde que a produção precise saber (ex.: diabetes, trombose, marcapasso, restrição alimentar, etc...) ?
                      <input type="text" name="participanteSaudeRestricoes" id="participanteSaudeRestricoes" />
                    </label>
                  </fieldset>
                  <fieldset>
                    <legend><h1>Indique um amigo</h1></legend>
                    <p>Na 3ª fase do programa, você poderá contar com a ajuda de uma videoconferência para responder às perguntas. Para isso, é necessária a indicação de um amigo ou parente, que deverá comparecer à emissora junto com você no dia da gravação.</p>
                    <p>Preencha os dados do seu amigo:</p>
                    <label class="span6">Nome completo:<input type="text" name="videoconferenciaNome" id="videoconferenciaNome" /></label>
                    <label class="span2">Idade: <input type="text" maxlength="3" name="videoconferenciaIdade" id="videoconferenciaIdade" /></label>
                    <label class="span8">Endereço: <input type="text" name="videoconferenciaEndereco" id="videoconferenciaEndereco" /></label>
                    <label class="span6">Bairro: <input type="text" name="videoconferenciaBairro" id="videoconferenciaBairro" /></label>
                    <label class="span2">CEP: <input type="text" name="videoconferenciaCep" id="videoconferenciaCep" class="cep" /></label>
                    <label class="span6">Cidade: <input type="text" name="videoconferenciaCidade" id="videoconferenciaCidade" /></label>
                    <label class="span2">RG: <input type="text" maxlength="20" name="videoconferenciaRg" id="videoconferenciaRg" /></label>
                    <label class="span4">CPF: <input type="text" name="videoconferenciaCpf" id="videoconferenciaCpf" class="cpf" /></label>
                    <label class="span4">Data de nascimento: <input type="text" name="videoconferenciaNascimento" id="videoconferenciaNascimento" class="nascimento" /></label>
                    <label class="span4">Telefone para contato: <input type="text" name="videoconferenciaTelefone" id="videoconferenciaTelefone" class="telefone" /></label>
                    <label class="span4">Email: <input type="text" name="videoconferenciaEmail" id="videoconferenciaEmail" /></label>
                  </fieldset>
                  <fieldset>
                    <legend><h1>Vídeo</h1></legend>
                    <p>Faça um vídeo de no máximo 1 minuto contando por que você quer participar do QSS!</p>
                    <p>IMPORTANTE: Coloque o seu nome completo como título do vídeo!</p>
                    <script type="text/javascript" src="https://tvcultura-qss.appspot.com/js/ytd-embed.js"></script>
                    <script type="text/javascript">
                    var ytdInitFunction = function() {
                      var ytd = new Ytd();
                      ytd.setAssignmentId("2001");
                      ytd.setCallToAction("callToActionId-2001");
                      var containerWidth = "100%";
                      var containerHeight = 500;
                      ytd.setYtdContainer("ytdContainer-2001", containerWidth, containerHeight);
                      ytd.ready();
                    };
                    if (window.addEventListener) {
                      window.addEventListener("load", ytdInitFunction, false);
                    } else if (window.attachEvent) {
                      window.attachEvent("onload", ytdInitFunction);
                    }
                    </script>
                    <a id="callToActionId-2001" href="javascript:void(0);" style="clear:both; float:left">
                      <p id="enviar">Fazer upload</p></a>
                    <div id="ytdContainer-2001"></div> 
                     
                  </fieldset>
                  <label class="span8 concordo">Regulamento:<br>
                    <textarea readonly name="regulamento" id="regulamento" style="width: 100%; height: 200px; font-size: 14px; padding:15px; display: none;" /><?php include_partial_from_folder('sites/qss','global/regulamento') ?></textarea>
                    <input type="checkbox" name="concordo" id="concordo" />Declaro que li e concordo com o <a href="javascript:;" id="btn-regulamento">regulamento</a>
                  </label>
                  <hr>
                  <div id="captchaimage">
                    <label class="span2" for="captcha">
                      Confirma&ccedil;&atilde;o
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                        <img style="clear:both; display: block;" src="http://cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      </a>
                    </label>
                    <label class="span6" for="captcha">
                      Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:
                      <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    </label>
                  </div>
                  <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  <input class="enviar" type="submit" name="enviar" id="enviar" value="Enviar" style="cursor:pointer" />
                </form>  
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
          <?php if (isset($displays["rodape-interno"])): ?>
          <!--APOIO-->
          <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          <?php endif; ?>
          
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
    $('.cpf').mask("999.999.999-99");
    $('.cep').mask("99999-999");
    $('.telefone').mask("(99) 99999999?9");
    $('.nascimento').mask("99/99/9999");
    
    $("#btn-regulamento").click(function(){
      $("#regulamento").toggle();
    });
        
    
    var validator = $('#form-contato').validate({
      
      submitHandler: function(form){
        $.ajax({
          type: "POST",
          dataType: "text",
          data: $("#form-contato").serialize(),
          url: "/actions/qss/inscricao.php",
          beforeSend: function(){
            $('input#enviar').attr('disabled','disabled');
            $("#msgSuccess").hide();
            $("#msgError").hide();
            $('img#ajax-loader').show();
          },
          success: function(data){
            $('input#enviar').removeAttr('disabled');
            window.location.href="#";
            if(data == "0"){
              $("#form-contato").clearForm();
              $("#form-contato").hide();
              $("#msgSuccess").show();
              $('img#ajax-loader').hide();
            }
            else {
              $("#msgError").show();
              $('img#ajax-loader').hide();
              $("#form-contato").hide();
            }
          }
        });         
      },
      rules:{
        participanteNome:{
          required:true
        },
        participanteIdade:{
          required:true,
          number: true
        },
        participanteEndereco:{
          required:true
        },
        participanteBairro:{
          required:true
        },
        participanteCep:{
          required:true
        },
        participanteCidade:{
          required:true
        },
        participanteRg:{
          required:true
        },
        participanteCpf:{
          required:true
        },
        participanteNascimento:{
          required:true
        },
        participanteTelefone:{
          required:true
        },
        participanteEmail:{
          required:true,
          email: true
        },
        participanteNomeMae:{
          required:true
        },
        participanteProfissao:{
          required:true
        },
        participanteEscolaridade:{
          required:true
        },
        participanteSaudeCondicoes:{
          required:true
        },
        participanteSaudeRestricoes:{
          required:true
        },
        videoconferenciaNome:{
          required:true
        },
        videoconferenciaIdade:{
          required:true,
          number: true
        },
        videoconferenciaEndereco:{
          required:true
        },
        videoconferenciaBairro:{
          required:true
        },
        videoconferenciaCep:{
          required:true
        },
        videoconferenciaCidade:{
          required:true
        },
        videoconferenciaRg:{
          required:true
        },
        videoconferenciaCpf:{
          required:true
        },
        videoconferenciaEmail:{
          required:true,
          email: true
        },
        videoconferenciaNascimento:{
          required:true
        },
        videoconferenciaTelefone:{
          required:true
        },
        concordo:{
          required:true
        },
        captcha: {
          required: true,
          remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
        }
      },
      messages:{
        participanteEmail: "Digite um e-mail válido.",
        participanteIdade: "Idade precisa ser números.",
        videoconferenciaEmail: "Digite um e-mail válido.",
        videoconferenciaIdade: "Idade precisa ser números."
        
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  });
</script>