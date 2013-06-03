<?php

$nome = str_replace(";"," ",$_REQUEST["nome"]);
$cpf = str_replace(array('.','-',';'),"",$_REQUEST["cpf"]);
//$cpf = ltrim($cpf, "0");
$rg = str_replace(array('.','-',';'),"",$_REQUEST["rg"]);
$email = str_replace(";"," ",$_REQUEST["email"]);
$telefone = str_replace(";"," ",$_REQUEST["telefone"]);
$celular = str_replace(";"," ",$_REQUEST["celular"]);
$categoria = str_replace(";"," ",$_REQUEST["categoria"]);
$prof_ativo_tipo = str_replace(";"," ",$_REQUEST["prof_ativo_tipo"]);
$diretoria = str_replace(";"," ",$_REQUEST["diretoria"]);
$escola = str_replace(";"," ",$_REQUEST["escola"]);
$endereco = str_replace(";"," ",$_REQUEST["endereco"]);
$numero = str_replace(";"," ",$_REQUEST["numero"]);
$endereco_completo = $endereco . " " . $numero; 
$complemento = str_replace(";"," ",$_REQUEST["complemento"]);
$bairro = str_replace(";"," ",$_REQUEST["bairro"]);
$cep = str_replace(";"," ",$_REQUEST["cep"]);
$cidade = str_replace(";"," ",$_REQUEST["cidade"]);
$estado = str_replace(";"," ",$_REQUEST["estado"]);
$licenciatura = str_replace(";"," ",$_REQUEST["licenciatura"]);
$contrato_fpa = str_replace(";"," ",$_REQUEST["contrato_fpa"]);
$projeto = str_replace(";"," ",$_REQUEST["projeto"]);
$localdeprova = str_replace(";"," ",$_REQUEST["localdeprova"]);

$schedule = "2013-06-15 00:00:00";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
    if($_REQUEST["captcha"]) {
      if(date("Y-m-d H:i:s") < $schedule) {
        $csvFile = "/var/frontend/web/tutores-2013/cadastro-para-tutoria-presencial-do-curso-ingles-online/cadastro.csv";
        $csvContent = $nome . ";" .
                      $cpf . ";" .
                      $rg . ";" .
                      $email . ";" .
                      $telefone . ";" .
                      $celular . ";" .
                      $categoria . ";" .
                      $prof_ativo_tipo . ";" .
                      $diretoria . ";" .
                      $escola . ";" .
                      $endereco_completo . ";" .
                      $complemento . ";" .
                      $bairro . ";" .
                      $cep . ";" .
                      $cidade . ";" .
                      $estado . ";" .
                      $licenciatura . ";" .
                      $contrato_fpa . ";" .
                      $projeto . ";" .
                      $localdeprova . "\n";
                      
        $csvFp = fopen($csvFile, 'a+');
        
        if(fwrite($csvFp, $csvContent)) {
          /*
          $txtFile = "/var/frontend/web/tutores-2013/cadastro-para-tutoria-presencial-do-curso-ingles-online/control/cpf.txt";
          $txtContent = $cpf . "\n";
          $txtFp = fopen($txtFile, 'a+');
          fwrite($txtFp, $txtContent);  // teste 
           * 
           */
          
          $email = strip_tags($_REQUEST['email']);
          $name = strip_tags($_REQUEST['nome']);
          $from = "{$name} <{$email}>";
          $to = "tutoriaingles@tvcultura.com.br, cristovamruizjr@gmail.com";
          ini_set('sendmail_from', $to);
          $subject = '[CMAIS][cadastro-tutoria-presencial-ingles-online] '.$from;

          $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
          $message .= "<b>Nome:</b> " . strip_tags($_REQUEST['nome']) . "<br>";
          $message .= "<b>CPF:</b> " . strip_tags($_REQUEST['cpf']) . "<br>";
          $message .= "<b>RG:</b> " . strip_tags($_REQUEST['rg']) . "<br>";
          $message .= "<b>E-mail:</b> " . strip_tags($_REQUEST['email']) . "<br>";
          $message .= "<b>Telefone:</b> " . strip_tags($_REQUEST['telefone']) . "<br>";
          $message .= "<b>Celular:</b> " . strip_tags($_REQUEST['celular']) . "<br>";
          $message .= "<b>Categoria:</b> " . strip_tags($_REQUEST['categoria']) . "<br>";
          $message .= "<b>Efetivo ou temporário:</b> " . strip_tags($_REQUEST['prof_ativo_tipo']) . "<br>";
          $message .= "<b>Diretoria de Ensino à qual está vinculado(a):</b> " . strip_tags($_REQUEST['diretoria']) . "<br>";
          $message .= "<b>Escola em que trabalha:</b> " . strip_tags($_REQUEST['escola']) . "<br>";
          $message .= "<b>Endereco:</b> " . strip_tags($_REQUEST['endereco']) .  ", " . strip_tags($_REQUEST['numero']) . "<br>";
          $message .= "<b>Complemento:</b> " . strip_tags($_REQUEST['complemento']) . "<br>";
          $message .= "<b>Bairro:</b> " . strip_tags($_REQUEST['bairro']) . "<br>";
          $message .= "<b>Cep:</b> " . strip_tags($_REQUEST['cep']) . "<br>";
          $message .= "<b>Cidade:</b> " . strip_tags($_REQUEST['cidade']) . "<br>";
          $message .= "<b>Estado:</b> " . strip_tags($_REQUEST['estado']) . "<br>";
          $message .= "<b>Licenciatura:</b> " . strip_tags($_REQUEST['licenciatura']) . "<br>";
          $message .= "<b>Tem ou Teve contrato com a Fundação Padre Anchieta nos últimos 6 meses ?:</b>" . strip_tags($_REQUEST['contrato_fpa']) . "<br>";
          $message .= "<b>Se sim, qual projeto?:</b> " . strip_tags($_REQUEST['projeto']) . "<br>";
          $message .= "<b>Local de prova escolhido:</b> " . strip_tags($_REQUEST['localdeprova']) . "<br>";
          $message .= "<b>Declaro que as informações acima são verdadeiras:</b> " . (($_REQUEST['concordo'] == "on") ? "sim" : "não") . "<br>";
          $message .= "<b>captcha:</b> " . strip_tags($_REQUEST['captcha']) . "<br><br>";
                            
          $header = "Return-Path: " . $from . "\r\n";
          $header .= "From: " . $from . "\r\n";
          $header .= "X-Priority: 3\r\n";
          $header .= "X-Mailer: Formmail [version 1.0]\r\n";
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-Transfer-Encoding: 8bit\r\n";
          $header .= 'Content-Type: text/html; charset="utf-8"';

          if(mail($to, $subject, $message, $header)) {
            
            $from = "Fundação Padre Anchieta <tutoriaingles@tvcultura.com.br>";
            $to = $email;
            ini_set('sendmail_from', $from);
            $subject = '[Cmais+] Confirmação de cadastro para o processo seletivo de tutor presencial do curso inglês online';
            $premsg = "Essa mensagem é uma confirmação de que seu cadastro como candidato para tutor presencial do curso de inglês online foi efetuado com sucesso!" . "<br><br>";
            $premsg .= "Não é necessário responder esse e-mail!" . "<br><br>";
            $message = $premsg . $message;
            
            $header = "Return-Path: " . $from . "\r\n";
            $header .= "From: " . $from . "\r\n";
            $header .= "X-Priority: 3\r\n";
            $header .= "X-Mailer: Formmail [version 1.0]\r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-Transfer-Encoding: 8bit\r\n";
            $header .= 'Content-Type: text/html; charset="utf-8"';
            
            if(mail($to, $subject, $message, $header)) {
              die("0");
            }
          }
        }
        
      }
      else {
        die("2");
      } 
    }
    else{
      die("1");
    }
  }
  else{
    die("1");
  }
}
else{
  die("1");
}

?>