<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
    
    $to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com, rhcsousa@gmail.com"; 
    ini_set('sendmail_from', $to);
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $subject = '[Cocoricó][TV Cocoricó][Páscoa Cocoricó] '.$name.' <'.$email.'>';
    
    $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $message .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
    $cabecalho = "Return-Path: " . $nome . " <" . $email . ">\r\n";
    $cabecalho .= "From: " . $nome . " <" . $email . ">\r\n";
    $cabecalho .= "X-Priority: 3\r\n";
    $cabecalho .= "X-Mailer: Formmail [version 1.0]\r\n";
    $cabecalho .= "MIME-Version: 1.0\r\n";
    $cabecalho .= "Content-Transfer-Encoding: 8bit\r\n";
    $cabecalho .= 'Content-Type: text/html; charset="utf-8"';
    
    if(mail($to, $subject, stripslashes(nl2br($message)), $cabecalho))
      die("1");
    else
      die("0");
  }
}



?>                