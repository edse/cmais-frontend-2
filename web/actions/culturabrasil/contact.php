<?php

if($_REQUEST['captcha']){
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
      
      $to = "crsiteradio@radioculturabrasil.com.br";
      
      switch ($_REQUEST['programa']) {
        case "bamba-jam":
          $to = "crbambajam@radioculturabrasil.com.br";
          $programName = "Bamba Jam";
          break;
        case "supertonica":
          $to = "crsupertonica@culturafm.com.br";
          $programName = "Supertônica";
          break;
        case "selecao-do-ouvinte":
          $to = "crselecao@radioculturabrasil.com.br";
          $programName = "Seleção do Ouvinte";
          break;
        case "reggae-de-bamba":
          $to = "crreggae@radioculturabrasil.com.br";
          $programName = "Reggae de Bamba";
          break;
        case "musica-regional-brasileira":
          $to = "crregional@radioculturabrasil.com.br";
          $programName = "Música Regional Brasileira";
          break;
        case "galeria":
          $to = "crgaleria@radioculturabrasil.com.br";
          $programName = "Galeria";
          break;
        case "cultura-livre":
          $to = "crculturalivre@radioculturabrasil.com.br";
          $programName = "Cultura Livre";
          break;
        case "radarcultura":
          $to = "crradar@radioculturabrasil.com.br";
          $programName = "RadarCultura";
          break;
        case "solano-ribeiro":
          $to = "crsolanoribeiro@radioculturabrasil.com.br";
          $programName = "Solano Ribeiro";
          break;
        case "webmaster":
          $to = "crsiteradio@radioculturabrasil.com.br";
          $programName = "Outros";
          break;
      }
      $to = $to . ", cristovamruizjr@gmail.com";
      
      $email = strip_tags($_REQUEST['email']);
      $name = strip_tags($_REQUEST['nome']);
      $from = "{$nome} <{$email}>";
      $subject = '[Cultura Brasil]['.$programName.'] '.$from;
      
      $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
      while(list($field, $value) = each($_REQUEST)) {
        if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
          $message .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
      }
      $message = stripslashes(nl2br($message));
      
      $header = "Return-Path: $from\r\n";
      $header .= "From: $from\r\n";
      $header .= "X-Priority: 3\r\n";
      $header .= "X-Mailer: Formmail [version 1.0]\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-Transfer-Encoding: 8bit\r\n";
      $header .= 'Content-Type: text/html; charset="utf-8"';
      
      if(mail($to, $subject, $message, $header))
        die("1");
    }
  }
}
