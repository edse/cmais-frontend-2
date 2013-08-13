<?php
//$cpf = str_replace(array('.','-'),"",$_REQUEST["cpf"]);
//$cpf = ltrim($cpf, "0");
//$rg = str_replace(array('.','-'),"",$_REQUEST["rg"]);
//teste

if($_REQUEST["captcha"]) {
  if($_REQUEST["cpf"]){
    if(date("Y-m-d H:i:s") < "2014-01-01 00:00:00") {
      if(exec('grep "^'.$_REQUEST["cpf"].'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino-ciencias/control/cpf.txt')){
        die("3");
      }
      else {
        $csvFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino-ciencias/cadastro2.csv";
        $csvContent = str_replace(","," ",$_REQUEST["nome"]) . "," .
                      str_replace(","," ",$_REQUEST["cpf"]) . "," .
                      str_replace(","," ",$_REQUEST["rg"]) . "," .
                      str_replace(","," ", $_REQUEST["datanasc"]) . "," .
                      str_replace(","," ",$_REQUEST["email"]) . "," .
                      str_replace(","," ",$_REQUEST["telefone"]) . "," .
                      str_replace(","," ",$_REQUEST["celular"]) . "," .
                      str_replace(","," ",$_REQUEST["sms"]) . "," .
                      str_replace(","," ",$_REQUEST["diretoria"]) . "," .
                      str_replace(","," ",$_REQUEST["endereco"]) . "," .
                      str_replace(","," ",$_REQUEST["numero"]) . "," .
                      str_replace(","," ",$_REQUEST["bairro"]) . "," .
                      str_replace(","," ",$_REQUEST["complemento"]) . "," .
                      str_replace(","," ",$_REQUEST["cep"]) . "," .
                      str_replace(","," ",$_REQUEST["cidade"]) . "," .
                      str_replace(","," ",$_REQUEST["estado"]) . "," .
                      str_replace(","," ",$_REQUEST["formacao"]) . "," .
                      str_replace(","," ",$_REQUEST["experiente_ava_efap"]) . "," .
                      str_replace(","," ",$_REQUEST["inscrito_serra_negra"]) . "," .
                      str_replace(","," ",$_REQUEST["contrato_fpa"]) . "," .
                      str_replace(","," ",$_REQUEST["experiente_tutor"]) . "," .
                      str_replace(","," ",$_REQUEST["curso_tutoria_profort_efap"]) . "," .
                      str_replace(","," ",$_REQUEST["vinculado_rede_ensino_sp"]) . "," .
                      str_replace(","," ",$_REQUEST["rede_ensino_sp_tempo"]) . "," .
                      str_replace(","," ",$_REQUEST["rede_ensino_sp_funcao"]) . "," .
                      str_replace(","," ",$_REQUEST["em_exercicio_ensino_fundamental"]) . "," .
                      (($_REQUEST['concordo'] == "on") ? "sim" : "não") . "\n";
                      
        $csvFp = fopen($csvFile, 'a+');

        if(fwrite($csvFp, $csvContent)){
          $txtFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino-ciencias/control/cpf.txt";
          $txtContent = $_REQUEST["cpf"] . "\n";
          $txtFp = fopen($txtFile, 'a+');
          fwrite($txtFp, $txtContent);
          
          //envia email de confirmacao para inscrito e para tutoria
          $email = strip_tags($_REQUEST['email']);
          $name = strip_tags($_REQUEST['nome']);
          $from = "{$name} <{$email}>";
          $to = "tutoria@tvcultura.com.br, cristovamruizjr@gmail.com";
          ini_set('sendmail_from', $to);
          $subject = '[Cmais+][Melhor Gestão Melhor Ensino - Ciências] '.$from;
          
          $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
          $message .= "<b>Nome:</b> " . strip_tags($_REQUEST['nome']) . "<br>";
          $message .= "<b>CPF:</b> " . strip_tags($_REQUEST['cpf']) . "<br>";
          $message .= "<b>RG:</b> " . strip_tags($_REQUEST['rg']) . "<br>";
          $message .= "<b>E-mail:</b> " . strip_tags($_REQUEST['email']) . "<br>";
          $message .= "<b>Data de Nascimento:</b> " . strip_tags($_REQUEST['datanasc']) . "<br>";
          $message .= "<b>Telefone:</b> " . strip_tags($_REQUEST['telefone']) . "<br>";
          $message .= "<b>Celular:</b> " . strip_tags($_REQUEST['celular']) . "<br>";
          $message .= "<b>Aceita o envio de informações sobre o processo via SMS?:</b> " . strip_tags($_REQUEST['sms']) . "<br>";
          $message .= "<b>Diretoria de Ensino:</b> " . strip_tags($_REQUEST['diretoria']) . "<br>";
          $message .= "<b>Endereco:</b> " . strip_tags($_REQUEST['endereco']) .  ", " . strip_tags($_REQUEST['numero']) . "<br>";
          $message .= "<b>Complemento:</b> " . strip_tags($_REQUEST['complemento']) . "<br>";
          $message .= "<b>Bairro:</b> " . strip_tags($_REQUEST['bairro']) . "<br>";
          $message .= "<b>Cep:</b> " . strip_tags($_REQUEST['cep']) . "<br>";
          $message .= "<b>Cidade:</b> " . strip_tags($_REQUEST['cidade']) . "<br>";
          $message .= "<b>Estado:</b> " . strip_tags($_REQUEST['estado']) . "<br>";
          $message .= "<b>Formação acadêmica:</b> " . strip_tags($_REQUEST['formacao']) . "<br>";
          $message .= "<b>Possui experiência no uso de AVA (Ambientes Virtuais de Aprendizagem) EFAP?:</b> " . strip_tags($_REQUEST['experiente_ava_efap']) . "<br>";
          $message .= "<b>Você se inscreveu como Participante no Encontro Presencial centralizado a ser realizado pela EFAP/CGEB de 12 a 14 de agosto do ano de 2013, em Serra Negra:</b> " . strip_tags($_REQUEST['inscrito_serra_negra']) . "<br>";
          $message .= "<b>Teve ou tem contrato de qualquer espécie (Física, jurídica ou CLT) vigente com a FPA (Fundação Padre Anchieta – TV Cultura), mesmo que já encerrado nos últimos 06 meses?:</b> " . strip_tags($_REQUEST['contrato_fpa']) . "<br>";
          $message .= "<b>Você tem experiência como Tutor on line?:</b> " . strip_tags($_REQUEST['experiente_tutor']) . "<br>";
          $message .= "<b>Você fez o curso Profort (Programa de Formação para Tutores) oferecido pela EFAP sobre Tutoria?:</b> " . strip_tags($_REQUEST['curso_tutoria_profort_efap']) . "<br>";
          $message .= "<b>É Profissional vinculado a Rede de Ensino do Estado de São Paulo?:</b> " . strip_tags($_REQUEST['vinculado_rede_ensino_sp']) . "<br>";
          $message .= "<b>Há quanto tempo?:</b> " . strip_tags($_REQUEST['rede_ensino_sp_tempo']) . "<br>";
          $message .= "<b>Na rede você exerce a função de:</b> " . strip_tags($_REQUEST['rede_ensino_sp_funcao']) . "<br>";
          $message .= "<b>Está atualmente em exercício como Professor do ensino Fundamental – ANOS FINAIS na Rede de Ensino do estado de São Paulo, incluindo EJA?:</b> " . strip_tags($_REQUEST['em_exercicio_ensino_fundamental']) . "<br>";
          $message .= "<b>Declaro que li e concordo com os termos do edital:</b> " . (($_REQUEST['concordo'] == "on") ? "sim" : "não") . "<br>";
          $message .= "<b>captcha:</b> " . strip_tags($_REQUEST['captcha']) . "<br><br>";
                            
          $header = "Return-Path: " . $from . "\r\n";
          $header .= "From: " . $from . "\r\n";
          $header .= "X-Priority: 3\r\n";
          $header .= "X-Mailer: Formmail [version 1.0]\r\n";
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-Transfer-Encoding: 8bit\r\n";
          $header .= 'Content-Type: text/html; charset="utf-8"';

          if(mail($to, $subject, $message, $header)) {
            
            $from = "Fundação Padre Anchieta <tutoria@tvcultura.com.br>";
            $to = $email;
            ini_set('sendmail_from', $from);
            $subject = '[Cmais+] Confirmação de cadastro para o processo seletivo de tutor melhor gestão melhor ensino de Ciências';
            $premsg = "Essa mensagem é uma confirmação de que seu cadastro como candidato para tutor online do curso 2 e 3 de Ciências foi efetuado com sucesso!" . "<br><br>";
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
        else{
          die("4");
        }
      }
    }
    else {
      die("2");
    } 
  }
  else {
    die("1");
  }
}
else{
  die("1");
}

?>