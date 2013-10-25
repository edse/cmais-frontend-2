<?php
include("../includes/functions.php");


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
    
    $to = "cristovamruizjr@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $campaign = strip_tags($_REQUEST['campanha']);
    $from = "{$name} <{$email}>";
    $subject = '[Vila Sésamo][' . $campaign . '] '.$name.' <'.$email.'>';
    
    $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $message .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
    
    //Enviar sem anexo
    //echo $_FILES['datafile']['size'];
    /*
    if($_FILES['datafile']['size'] <= 0) {
      $headers =  'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: ".$from;

      if(mail($to, $subject, $message, $headers)) {
        //header("Location: http://tvcultura.cmais.com.br/cocorico/receitinhas?success=1");
        die("0");
      }else{
        //header("Location: http://tvcultura.cmais.com.br/cocorico/receitinhas?error=2");
        die("1");
      }
    }*/

    $file_name = basename($_FILES['datafile']['name']);
    $data = file_get_contents($_FILES['datafile']['tmp_name']); 
    $file_contents = chunk_split(base64_encode($data));
    $file_size = $_FILES['datafile']['size'];
    $file_mime_type = getMimeType($_FILES['datafile']['name']);
    $attach = array();
    $attach[] = array($_FILES['datafile']['tmp_name'], $file_mime_type);
        
    if (!in_array($file_mime_type, array("image/gif", "image/png", "image/jpg"))) {
      if (unlink($_FILES['datafile']['tmp_name'])) {
        //header("Location: http://tvcultura.cmais.com.br/cocorico/receitinhas?error=2");
        die("2");
      }
    }
    else if ($file_size > 15728640) { // 15MB
      if (unlink($_FILES['datafile']['tmp_name'])) {
        //header("Location: http://tvcultura.cmais.com.br/cocorico/receitinhas?error=3");
        die("3");
      }
    }
    else {
      
      if(sendMailAtt($to, $from, $subject, $message, $attach)) {
        if (unlink($_FILES['datafile']['tmp_name'])) {
          //header("Location: http://tvcultura.cmais.com.br/cocorico/receitinhas?success=2");
          die("4");
        }
      }
      else{
        if (unlink($_FILES['datafile']['tmp_name'])) {
          //header("Location: http://tvcultura.cmais.com.br/cocorico/receitinhas?error=1");
          die("5");
        }
      }
    }
  }
}

?>                