<?php
if($_REQUEST['test']) {
  $to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";
  
  $email = strip_tags($request->getParameter('email'));
  $name = strip_tags($request->getParameter('nome'));
  $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';
  
  $body = "Formulario Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
  while(list($field, $value) = each($_REQUEST)) {
    if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
      $msg .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
  }
  $body = stripslashes(nl2br($body));
  
  $header = "Return-Path: " . $nome_user . " <" . $email_user . ">\r\n";
  $header .= "From: " . $nome_user . " <" . $email_user . ">\r\n";
  $header .= "X-Priority: 3\r\n";
  $header .= "X-Mailer: Formmail [version 1.0]\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-Transfer-Encoding: 8bit\r\n";
  $header .= 'Content-Type: text/html; charset="utf-8"';
  
  if(mail($to, $subject, $body, $header)){
    header("location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?success=1");
    die();
  }
  else {
    header("location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1");
    die();
  }
  
}
else {
  header('location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1');
  die();
}


?>                