<?php
if ($_REQUEST['enviar']) {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
      $to = "cristovamruizjr@gmail.com";
      //$to = "inscricoesqss@tvcultura.com.br, cristovamruizjr@gmail.com";
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
        header("Location: http://tvcultura.cmais.com.br/qss/inscricao?success=1");
        die("0");
      }
    }
    else {
      header("Location: http://tvcultura.cmais.com.br/qss/inscricao?error=1");
      die("1");
    }

  }
  else {
    header("Location: http://tvcultura.cmais.com.br/qss/inscricao?error=1");
    die("1");
  }
}
else {
  header("Location: http://tvcultura.cmais.com.br/qss/inscricao?error=1");
  die("1");
}
