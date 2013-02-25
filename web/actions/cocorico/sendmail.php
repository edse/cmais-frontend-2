<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if($_REQUEST['test'] == "1") {
    
    $to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';
    
    $body = "Formulario Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $body .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
    $body = stripslashes(nl2br($body));
    
    $header = "Return-Path: " . $name . " <" . $email . ">\r\n";
    $header .= "From: " . $name . " <" . $email . ">\r\n";
    $header .= "X-Priority: 3\r\n";
    $header .= "X-Mailer: Formmail [version 1.0]\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Transfer-Encoding: 8bit\r\n";
    $header .= 'Content-Type: text/html; charset="utf-8"';
    
    if(mail($to, $subject, $body, $header)){
      header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?success=1");
      die();
    }
    else {
      header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1");
      die();
    }
    
  }
  else {
    header('Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1');
    die();
  }
}

?>                