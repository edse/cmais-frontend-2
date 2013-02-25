<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if($_REQUEST['test'] == "1") {
    
    //$to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";
    $to = "cristovamruizjr@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';
    
    $body = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $body .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
    $body = stripslashes(nl2br($body));
    
    $file_name = basename($_FILES['datafile']['name']); // Get file name
    $data = file_get_contents($_FILES['datafile']['tmp_name']); // Read file contents 
    $file_contents = chunk_split(base64_encode($data)); // Encode file data into base64
    $uid = md5(time()); // Create unique boundary from timestamps 
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Return-Path: " . $name . " <" . $email . ">";
    $headers[] = "From: " . $name . " <" . $email . ">";
    $headers[] = "Content-Type: multipart/mixed; boundary=\"{$uid}\"";
    $headers[] = "This is a multi-part message in MIME format.";
    $headers[] = "X-Priority: 3";
    $headers[] = "X-Mailer: Formmail [version 1.0]";
    $headers[] = "--{$uid}";
    $headers[] = "Content-type:text/html; charset=utf-8"; // Set message content type
    $headers[] = "Content-Transfer-Encoding: 7bit";
    $headers[] = $body; // Dump message
    $headers[] = "--{$uid}";
    $headers[] = "Content-Type: image/jpeg; name=\"{$file_name}\""; // Set content type and file name
    $headers[] = "Content-Transfer-Encoding: base64"; // Set file encoding base
    $headers[] = "Content-Disposition: attachment; filename=\"{$file_name}\""; // Set file Disposition
    $headers[] = $file_contents; // Dump file
    $headers[] = "--{$uid}--"; //End boundary
    
    if(mail($to, $subject, $body, implode("\r\n", $headers))){
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