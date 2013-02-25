<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if($_REQUEST['test'] == "1") {
    
    ini_set('sendmail_from', $email_site);
    //$to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";
    $to = "cristovamruizjr@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';
    
    $file_name = basename($_FILES['datafile']['name']);
    $data = file_get_contents($_FILES['datafile']['tmp_name']); 
    $file_contents = chunk_split(base64_encode($data));
    $uid = md5(time());
    
    $cabecalho = "Return-Path: " . $nome_user . " <" . $email_user . ">\r\n";
    $cabecalho .= "From: " . $nome_user . " <" . $email_user . ">\r\n";
    $cabecalho .= "X-Priority: 3\r\n";
    $cabecalho .= "X-Mailer: Formmail [version 1.0]\r\n";
    $cabecalho .= "MIME-Version: 1.0\r\n";
    $cabecalho .= "Content-Transfer-Encoding: 8bit\r\n";
    $cabecalho .= 'Content-Type: text/html; charset="utf-8"';
    /*
    $headers = array();
    $headers[] = "Return-Path: " . $name . " <" . $email . ">";
    $headers[] = "From: " . $name . " <" . $email . ">";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: multipart/mixed; boundary=\"{$uid}\"";
    $headers[] = "This is a multi-part message in MIME format.";
    $headers[] = "X-Priority: 3";
    $headers[] = "X-Mailer: Formmail [version 1.0]";
    $headers[] = "--{$uid}";
    $headers[] = "Content-type:text/html; charset=utf-8";
    $headers[] = "Content-Transfer-Encoding: 8bit";
    $headers[] = $body; // Dump message
    $headers[] = "--{$uid}";
    $headers[] = "Content-Type: image/jpeg; name=\"{$file_name}\"";
    $headers[] = "Content-Transfer-Encoding: base64";
    $headers[] = "Content-Disposition: attachment; filename=\"{$file_name}\"";
    $headers[] = $file_contents;
    $headers[] = "--{$uid}--";
*/
    $body = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $body .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
    $body = stripslashes(nl2br($body));
    
    //if(mail($to, $subject, $body, implode("\r\n", $headers))){
    if(mail($to, $subject, $body, $cabecalho)){
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