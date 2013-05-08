<?php
  if ($_REQUEST['enviar']) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {      
      if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
        //$to = "cristovamruizjr@gmail.com";
        $to = "inscricoesqss@tvcultura.com.br, cristovamruizjr@gmail.com";
        ini_set('sendmail_from', $to);
        $email = strip_tags($_REQUEST['participanteEmail']);
        $name = strip_tags($_REQUEST['participanteNome']);
        $from = "{$name} <{$email}>";
        $subject = '[QSS][Inscrição] '.$from;
        
        $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
        $message .= "<b>PARTICIPANTE</b>: <br><br>";
        $message .= "<b>Nome:</b> " . strip_tags($_REQUEST['participanteNome']) . "<br>";
        $message .= "<b>Idade:</b> " . strip_tags($_REQUEST['participanteIdade']) . "<br>";
        $message .= "<b>Endereco:</b> " . strip_tags($_REQUEST['participanteEndereco']) . "<br>";
        $message .= "<b>Bairro:</b> " . strip_tags($_REQUEST['participanteBairro']) . "<br>";
        $message .= "<b>Cep:</b> " . strip_tags($_REQUEST['participanteCep']) . "<br>";
        $message .= "<b>Cidade:</b> " . strip_tags($_REQUEST['participanteCidade']) . "<br>";
        $message .= "<b>RG:</b> " . strip_tags($_REQUEST['participanteRg']) . "<br>";
        $message .= "<b>CPF:</b> " . strip_tags($_REQUEST['participanteCpf']) . "<br>";
        $message .= "<b>Data de Nascimento:</b> " . strip_tags($_REQUEST['participanteNascimento']) . "<br>";
        $message .= "<b>Telefone para contato:</b> " . strip_tags($_REQUEST['participanteTelefone']) . "<br>";
        $message .= "<b>E-mail:</b> " . strip_tags($_REQUEST['participanteEmail']) . "<br>";
        $message .= "<b>Nome da mãe:</b> " . strip_tags($_REQUEST['participanteNomeMae']) . "<br>";
        $message .= "<b>Profissão:</b> " . strip_tags($_REQUEST['participanteProfissao']) . "<br>";
        $message .= "<b>Grau de escolaridade:</b> " . strip_tags($_REQUEST['participanteEscolaridade']) . "<br>";
        $message .= "<b>Nome da mãe:</b> " . strip_tags($_REQUEST['participanteNomeMae']) . "<br>";
        $message .= "<b>Condições de saúde:</b> " . strip_tags($_REQUEST['participanteSaudeCondicoes']) . "<br>";
        $message .= "<b>Restrições de saúde:</b> " . strip_tags($_REQUEST['participanteSaudeRestricoes']) . "<br><br>";
        $message .= "<b>PARTICIPANTE PARA VIDEOCONFERÊNCIA</b>: <br><br>";
        $message .= "<b>Nome:</b> " . strip_tags($_REQUEST['videoconferenciaNome']) . "<br>";
        $message .= "<b>Idade:</b> " . strip_tags($_REQUEST['videoconferenciaIdade']) . "<br>";
        $message .= "<b>Endereco:</b> " . strip_tags($_REQUEST['videoconferenciaEndereco']) . "<br>";
        $message .= "<b>Bairro:</b> " . strip_tags($_REQUEST['videoconferenciaBairro']) . "<br>";
        $message .= "<b>Cep:</b> " . strip_tags($_REQUEST['videoconferenciaCep']) . "<br>";
        $message .= "<b>Cidade:</b> " . strip_tags($_REQUEST['videoconferenciaCidade']) . "<br>";
        $message .= "<b>RG:</b> " . strip_tags($_REQUEST['videoconferenciaRg']) . "<br>";
        $message .= "<b>CPF:</b> " . strip_tags($_REQUEST['videoconferenciaCpf']) . "<br>";
        $message .= "<b>Data de Nascimento:</b> " . strip_tags($_REQUEST['videoconferenciaNascimento']) . "<br>";
        $message .= "<b>Telefone para contato:</b> " . strip_tags($_REQUEST['videoconferenciaTelefone']) . "<br>";
        $message .= "<b>E-mail:</b> " . strip_tags($_REQUEST['videoconferenciaEmail']) . "<br>";
        $message .= "<b>Li e concordei com o regulamento:</b> " . ($_REQUEST['regulamento'] ? "sim" : "nÃ£o") . "<br>";
        $message .= "<b>captcha:</b> " . strip_tags($_REQUEST['captcha']) . "<br><br>";
                
                          
        $header = "Return-Path: " . $from . "\r\n";
        $header .= "From: " . $from . "\r\n";
        $header .= "X-Priority: 3\r\n";
        $header .= "X-Mailer: Formmail [version 1.0]\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Transfer-Encoding: 8bit\r\n";
        $header .= 'Content-Type: text/html; charset="utf-8"';
  
        
        if(mail($to, $subject, $message, $header)) {
          header("Location: http://tvcultura.cmais.com.br/qss/inscricao-sucesso");
          die();
        }
      }
      else {
        header("Location: http://cmais.com.br");
        die();
      }
  
    }
    else {
      header("Location: http://cmais.com.br");
      die();
    }
  }
  else {
    
?>

<link rel="stylesheet" href="/portal/css/tvcultura/sites/qss.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>


<!-- CAPA SITE -->
<div id="capa-site">
  <img src="/portal/images/capaPrograma/qss/background-qss.jpg" alt="Quem Sabe Sabe">    
  <!-- curtir -->
    <div class="redes">
      <div class="curtir">
        <div style="display:block; float: left; margin-right:10px;">
        <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <fb:like href="https://www.facebook.com/pages/Quem-Sabe-Sabe/458726357528906" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
      </div>
      <!--<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura">Tweet</a>-->
    </div>
    <!-- /curtir --> 
   
    <form id="form-contato" method="post" action="">
      <!--<h1>Quer participar do QSS?</h1>-->
      <fieldset>
        <legend><h1>Participante</h1></legend>
        <p>Preencha os seus dados:</p>
        <label class="span6">Nome completo:<input type="text" name="participanteNome" id="participanteNome" value="<?php echo $_REQUEST['participanteNome'] ?>" /></label>
        <label class="span2">Idade: <input type="text" maxlength="3" name="participanteIdade" id="participanteIdade" value="<?php echo $_REQUEST['participanteIdade'] ?>" /></label>
        <label class="span8">Endereço: <input type="text" name="participanteEndereco" id="participanteEndereco" value="<?php echo $_REQUEST['participanteEndereco'] ?>" /></label>
        <label class="span6">Bairro: <input type="text" name="participanteBairro" id="participanteBairro" value="<?php echo $_REQUEST['participanteBairro'] ?>" /></label>
        <label class="span2">CEP: <input type="text" name="participanteCep" id="participanteCep" value="<?php echo $_REQUEST['participanteCep'] ?>" class="cep" /></label>
        <label class="span6">Cidade: <input type="text" name="participanteCidade" id="participanteCidade" value="<?php echo $_REQUEST['participanteCidade'] ?>" /></label>
        <label class="span2">RG: <input type="text" maxlength="20" name="participanteRg" id="participanteRg" value="<?php echo $_REQUEST['participanteRg'] ?>" /></label>
        <label class="span4">CPF: <input type="text" name="participanteCpf" id="participanteCpf" value="<?php echo $_REQUEST['participanteCpf'] ?>" class="cpf" /></label>
        <label class="span4">Data de nascimento: <input type="text" name="participanteNascimento" id="participanteNascimento" value="<?php echo $_REQUEST['participanteNascimento'] ?>" class="nascimento" /></label>
        <label class="span4">Telefone para contato: <input type="text" name="participanteTelefone" id="participanteTelefone" value="<?php echo $_REQUEST['participanteTelefone'] ?>" class="telefone" /></label>
        <label class="span4">Email: <input type="text" name="participanteEmail" id="participanteEmail" value="<?php echo $_REQUEST['participanteEmail'] ?>" /></label>
        <label class="span8">Nome da mãe: <input type="text" name="participanteNomeMae" id="participanteNomeMae" value="<?php echo $_REQUEST['participanteNomeMae'] ?>" /></label>
        <label class="span4">Profissão: <input type="text" name="participanteProfissao" id="participanteProfissao" value="<?php echo $_REQUEST['participanteProfissao'] ?>" /></label>
        <label class="span4">Grau de escolaridade: <input type="text" name="participanteEscolaridade" id="participanteEscolaridade" value="<?php echo $_REQUEST['participanteEscolaridade'] ?>" /></label>
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
        <p>Na 3ª fase do programa, você poderá contar com a ajuda de um HANGOUT (videoconferência) para responder às perguntas. Para isso, é necessária a indicação de um amigo ou parente, que deverá comparecer à emissora junto com você no dia da gravação.</p>
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
        <p style="color: red">IMPORTANTE: Coloque o seu nome completo como título do vídeo!</p>
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
      <p id="enviar">Fazer upload</p>
    </a>
    <div id="ytdContainer-2001"></div> 
      </a>
      </fieldset>
      
      
      
      <label class="span8 concordo">Regulamento:<br>
        <textarea readonly name="regulamento" id="regulamento" style="width: 100%; height: 200px; font-size: 14px; padding:15px; display: none;" /><?php include('regulamento.txt'); ?></textarea>
        <input type="checkbox" name="concordo" id="concordo" />Declaro que li e concordo com o <a href="javascript:;" id="btn-regulamento">regulamento</a>
      </label>
      <hr>
      <div id="captchaimage">
        <label class="span2" for="captcha">
          Confirma&ccedil;&atilde;o
          <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
            <img src="/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
          </a>
        </label>
        <label class="span6" for="captcha">
          Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:
          <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
        </label>
      </div>
      <input class="enviar" type="submit" name="enviar" id="enviar" value="Enviar" style="cursor:pointer" />
    </form>  
</div> 
<!-- /capa site-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script src="/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
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
          remote: "/portal/js/validate/demo/captcha/process.php"
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
<?php
  }
?>