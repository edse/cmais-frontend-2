<?php
include("../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
  
    //$to = "emerson.estrella@gmail.com";
    $to = "producaoojc@gmail.com, emerson.estrella@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $from = "{$name} <{$email}>";
    $subject = '[Jornalismo][Envio de foto] '.$name.' <'.$email.'>';
    
    $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $message .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
    
    if($_FILES['datafile']['size'] <= 0) {
      header("Location: http://cmais.com.br/jornalismo/envie-sua-foto?error=1");
      die();
    }

    $file_name = basename($_FILES['datafile']['name']);
    $data = file_get_contents($_FILES['datafile']['tmp_name']); 
    $file_contents = chunk_split(base64_encode($data));
    $file_size = $_FILES['datafile']['size'];
    $file_mime_type = getMimeType($_FILES['datafile']['name']);
    $attach = array();
    $attach[] = array($_FILES['datafile']['tmp_name'], $file_mime_type);

    if (!in_array($file_mime_type, array("image/gif", "image/png", "image/jpg"))) {
      if (unlink($_FILES['datafile']['tmp_name'])) {
        header("Location: http://cmais.com.br/jornalismo/envie-sua-foto?error=2");
        die();
      }
    }
    else if ($file_size > 15728640) { // 15MB
      if (unlink($_FILES['datafile']['tmp_name'])) {
        header("Location: http://cmais.com.br/jornalismo/envie-sua-foto?error=3");
        die();
      }
    }
    else {
      
      if(sendMailAtt($to, $from, $subject, $message, $attach)) {
        if (unlink($_FILES['datafile']['tmp_name'])) {
          header("Location: http://cmais.com.br/jornalismo/envie-sua-foto?success=1");
          die();
        }
      }
      else{
        if (unlink($_FILES['datafile']['tmp_name'])) {
          header("Location: http://cmais.com.br/jornalismo/envie-sua-foto?error=4");
          die();
        }
      }
    }
  }
}

?>                