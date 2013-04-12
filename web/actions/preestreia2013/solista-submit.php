<?php
include("../includes/functions.php");

$current_time = date("Y-m-d H:i:s", time()); 
$expiration_time = "2013-08-30 00:00:00";
$maxfilesize = 15728640;
$mimeTypeAllowed = array("image/gif", "image/png", "image/jpg");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
    if ($current_time < $expiration_time) {
    
      $to = "preestreia2012@gmail.com, rhcsousa@gmail.com"; 
      //$to = "maiscriancatvcultura@gmail.com";
      $email = strip_tags($_REQUEST['email']);
      $name = strip_tags($_REQUEST['nome']);
      $from = "{$name} <{$email}>";
      $subject = '[Pré Estreia][Inscrição][Solista] ' .$name.' <'.$email.'>';
      
      $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
      while(list($field, $value) = each($_REQUEST)) {
        if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
          $message .= ucwords($field) . ": " . strip_tags($value) . "<br>";
      }
      
      $file_name1 = basename($_FILES['datafile1']['name']);
      $file_name2 = basename($_FILES['datafile2']['name']);
      $data1 = file_get_contents($_FILES['datafile1']['tmp_name']); 
      $data2 = file_get_contents($_FILES['datafile2']['tmp_name']); 
      $file_contents1 = chunk_split(base64_encode($data1));
      $file_contents2 = chunk_split(base64_encode($data2));
      $file_size1 = $_FILES['datafile1']['size'];
      $file_size2 = $_FILES['datafile2']['size'];
      $file_mime_type1 = getMimeType($_FILES['datafile1']['name']);
      $file_mime_type2 = getMimeType($_FILES['datafile2']['name']);
      $attach = array();
      $attach[] = array($_FILES['datafile1']['tmp_name'], $file_mime_type1);
      $attach[] = array($_FILES['datafile2']['tmp_name'], $file_mime_type2);
        
          
      if (!in_array($file_mime_type1, $mimeTypeAllowed) && !in_array($file_mime_type2, $mimeTypeAllowed)) {
        
        if (unlink($_FILES['datafile1']['tmp_name']) && unlink($_FILES['datafile2']['tmp_name'])) {
          header("Location: http://tvcultura.cmais.com.br/preestreia/solista-2013?error=2");
          die();
        }
      }
      else if ($file_size1 > $maxfilesize || $file_size2 > $maxfilesize) { // 15MB
        if (unlink($_FILES['datafile1']['tmp_name']) && unlink($_FILES['datafile2']['tmp_name'])) {
          header("Location: http://tvcultura.cmais.com.br/preestreia/solista-2013?error=3");
          die();
        }
      }
      else {
        
        if(sendMailAtt($to, $from, $subject, $message, $attach)) {
          if (unlink($_FILES['datafile1']['tmp_name']) && unlink($_FILES['datafile2']['tmp_name'])) {
            header("Location: http://tvcultura.cmais.com.br/preestreia/solista-2013?success=1");
            die();
          }
        }
        else{
          if (unlink($_FILES['datafile1']['tmp_name']) && unlink($_FILES['datafile2']['tmp_name'])) {
            header("Location: http://tvcultura.cmais.com.br/preestreia/solista-2013?error=1");
            die();
          }
        }
      }
    }
    else {
      if (unlink($_FILES['datafile1']['tmp_name']) && unlink($_FILES['datafile2']['tmp_name'])) {
        header("Location: http://tvcultura.cmais.com.br/preestreia/solista-2013?error=4");
        die();
      }
    }
  }
}

?>                