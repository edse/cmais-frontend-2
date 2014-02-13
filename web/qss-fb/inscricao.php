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

<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <link href="/feed" type="application/atom+xml" rel="alternate" title="cmais+ feed" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=54321" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/geral2.css?a=131325" type="text/css" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/css/ie-only.css" />
    <![endif]-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

    <title>Quem sabe sabe - Inscrição Segunda Etapa - cmais+ O portal de conteúdo da Cultura</title>
    <meta name="title" content="Quem sabe sabe - Inscrição Segunda Etapa - cmais+ O portal de conteúdo da Cultura" />
    <meta name="description" content=" - cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    <meta name="language" content="pt_BR" />
    <meta name="robots" content="index, follow" />
    <meta property="og:title" content="Quem sabe sabe - Inscrição Segunda Etapa - cmais+ O portal de conteúdo da Cultura" />
    <meta property="og:type" content="tv_show" />
    <meta property="og:description" content=" - cmais+ O portal de conteúdo da Cultura" />
    <meta property="og:url" content="http://tvcultura.cmais.com.br/frontend_dev.php/qss/inscricao-segunda-etapa" />
    <meta property="og:site_name" content="cmais+" />
    <meta property="og:image" content="http://cmais.com.br/portal/images/logoCMAIS.jpg" />

    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712" />
    <meta property="fb:app_id" content="124792594261614" />
    
    <!-- Fav and touch icons -->
    <!--
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://cmais.com.br/portal/images/icon/cmais-favico_144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cmais.com.br/portal/images/icon/cmais-favico_114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.png">
    <link rel="SHORTCUT ICON" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.png">
    <link rel="icon" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.ico">
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.ico" type="image/x-icon" />
    <link rel="icon" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.ico">
    -->
    <link rel="SHORTCUT ICON" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.ico">
 
    
    

    <!-- scripts -->
    <script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <!--script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script-->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>

    <!-- DFP -->
    <script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
    <script type='text/javascript'>
    GS_googleAddAdSenseService("ca-pub-6681834746443470");
    GS_googleEnableAllServices();
    </script>
    <script type='text/javascript'>
    /*
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-aovivo-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-aovivo-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-arteecultura-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-educacao-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-grade-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-homepage-300x250-2");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-jornalismo-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-musica-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cultura360-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cultura360-assets-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "cultura360-homepage-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "jornaldacultura-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "metropolis-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "metropolis-assets-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "metropolis-homepage-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "nossalingua-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "nossalingua-assets-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "nossalingua-homepage-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "preestreia-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "programas-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "programas-assets-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "programas-homepage-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "srbrasil-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "srbrasil-assets-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "srbrasil-homepage-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "tvcultura-homepage-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "deupaulanatv-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "CartaoVerde728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "provocacoes-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "reisdarua-728x90");
    */
    GA_googleAddSlot("ca-pub-6681834746443470", "tvcultura-homepage-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "univesptv-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "univesptv-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "multicultura-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "deupaulanatv-125x125");
    GA_googleAddSlot("ca-pub-6681834746443470", "culturafm-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "culturafm-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "home-geral300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "home-geral728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "home-geral2-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-assets-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-homepage-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-assets-250x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "maiscrianca");
    GA_googleAddSlot("ca-pub-6681834746443470", "portal-cocorico-300x250");

    </script>
    <script type='text/javascript'>
    GA_googleFetchAds();
    </script>
    <!-- /DFP -->

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /scripts -->

  </head>
  <body>
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/qss.css" type="text/css" />
<!--Controle-Remoto-->
<script src="http://www.culturabrasil.com.br/js/config.js" type="text/javascript"></script>

<script src="http://www.culturabrasil.com.br/js/jquery.xmldom.min.js" type="text/javascript"></script>
<script src="http://www.culturabrasil.com.br/js/Menu.class.js" type="text/javascript"></script>
<script src="http://www.culturabrasil.com.br/js/User.class.js" type="text/javascript"></script>

<script type="text/javascript">
    var Menu    = new Menu(); 
    var User    = new User(); 

    $(function(){
      $('#logo').click(function(){
        location.href=URL;
      });
      Menu.initHandler();
      User.initHandler();

      var controle = null;

      $('#controle-remoto, #ouca').click(function(){
        if(controle == null || controle.closed){
          controle = window.open('http://www.culturabrasil.com.br/controle-remoto?start=am','controle','width=300,height=600,scrollbars=no');
        } else {
          controle.focus();
        }
      });
    });
</script>
<!--/CONTROLE REMOTO-->
<style type="text/css">
  #capa-site {max-width: 770px; height:2700px!important;}
</style>

<!-- CAPA SITE -->
<div id="capa-site">
 
  
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
          <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
            <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
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
</html>
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
<?php
  }
?>
