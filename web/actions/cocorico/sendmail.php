<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if($_REQUEST['test'] == "1") {

$attach = array();

// will contain data for attachments
function sendMailAtt($to, $from, $sub, $msg, $attach=array()) {
 // Send mail with Attachments, and HTML tags ( http://coursesweb.net/ )
  // Define the headers
  $headers = "From: ".$from;

  $rand_hash = md5(time());
  $mime_boundary = "==Multipart_Boundary_x".$rand_hash."x";

  $headers .= "\nMIME-Version: 1.0\n".
    "Content-Type: multipart/mixed;\n".
    ' boundary="'.$mime_boundary.'"';

  $msg .= "Multi-part message in MIME format.\n\n".
    '--'.$mime_boundary."\n".
    "Content-Type:text/html; charset=\"iso-8859-1\"\n".
    "Content-Transfer-Encoding: 7bit\n\n".$msg."\n\n";

  // If there are data for attachments, include each attachment in message
  if (count($attach)>=1) {
    // traverse the array with data for file to attach
    for($i=0; $i<count($attach); $i++) {
      // Open the file and read its data
      if ($file = fopen($attach[$i][0],'rb')) {
        $data = fread($file, filesize($attach[$i][0]));
        fclose($file);
      }

      // Code the file data with MIME base64, and split in small chunks
      $data = chunk_split(base64_encode($data));

      // Add file data in mail message
      $msg .= '--'.$mime_boundary."\n".
      'Content-Type: '.$attach[$i][1].";\n".
      ' name="'.basename($attach[$i][0])."\"\n".
      "Content-Transfer-Encoding: base64\n\n".$data ."\n\n".
      '--'.$mime_boundary."\n";
    }
  }

  // sends data to mail server.
  // Returns TRUE if the mail was successfully accepted for delivery, FALSE otherwise
  if(mail($to, $sub, $msg, $headers)) return true;
  else return false;
}

    /* Using sendMailAtt() */
// Define variable with data to pass to sendMailAtt()
    $to = "cristovamruizjr@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';

// Attach two files: an image and a zip archive
// - Each element contains: "file path", "file mime type"
    $file_name = basename($_FILES['datafile']['name']);
    $data = file_get_contents($_FILES['datafile']['tmp_name']); 
    $file_contents = chunk_split(base64_encode($data));

$attach[] = array($_FILES['datafile'], 'image/jpeg');

// Calls the sendMailAtt() to send mail, outputs message if the mail was accepted for delivery or not
if(sendMailAtt($to, $from, $subject, $message, $attach)) {
      header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?success=1");
      die();
}
else{
        header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1");
      die();
   
}



    
    /*
    // email main info 
    //$to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";
    $to = "cristovamruizjr@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';

    // file and mailpart pre-definitions
    $file_name = basename($_FILES['datafile']['name']);
    $data = file_get_contents($_FILES['datafile']['tmp_name']); 
    $file_contents = chunk_split(base64_encode($data));
    $bound_text = md5(time());
    $bound = "--{$bound_text}\r\n"; 
    $bound_last = "--{$bound_text}--\r\n";
      
    // header info                            
    $header = "From: {$name} <{$email}>\r\n";
    $header .= "Return-Path: {$name} <{$email}>\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"{$bound}\"\r\n";
    $header .= "X-Priority: 3\r\n";
    $header .= "X-Mailer: Formmail [version 1.0]\r\n";

    // body text & html
    $body = "{$bound}";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:\r\n\n\n";
    /*
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $body .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
     */
    /*
    $body .= "{$bound}";
    
    // image/jpeg attachment 
    $body .= "Content-Type: image/jpeg; name=\"{$file_name}\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; filename=\"{$file_name}\"\r\n";
    $body .= "{$file_contents}\r\n";
    $body .= "{$bound_last}";
    
    // php mail function
    if(mail($to, $subject, $body, $header)){
      header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?success=1");
      die();
    }
    else {
      header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1");
      die();
    }

    /* 
     * 
     * 
     * 
    //$to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";
    $to = "cristovamruizjr@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';
    
    $file_name = basename($_FILES['datafile']['name']);
    $data = file_get_contents($_FILES['datafile']['tmp_name']); 
    $file_contents = chunk_split(base64_encode($data));
    $uid = md5(time());  
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Return-Path: " . $name . " <" . $email . ">";
    $headers[] = "From: " . $name . " <" . $email . ">";
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

    $body = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $body .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
    $body = stripslashes(nl2br($body));
    
    
    
    if(mail($to, $subject, $body, implode("\r\n", $headers))){
      header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?success=1");
      die();
    }
    else {
      header("Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1");
      die();
    }
     * 
     */
  }
  else {
    header('Location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1');
    die();
  }
}

?>                