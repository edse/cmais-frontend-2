<?php
include("../includes/functions.php");

$current_time = date("Y-m-d H:i:s", time()); 
$expiration_time = "2013-08-30 00:00:00";
$maxFileSize = 15728640; // 15MB
$mimeTypesAllowed = array("image/gif", "image/png", "image/jpg");
$qtdeIntegrantes = $_REQUEST['qtdeIntegrantes'];


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
    if ($current_time < $expiration_time) {
     
      $to = "preestreia2012@gmail.com, rhcsousa@gmail.com"; 
      //$to = "maiscriancatvcultura@gmail.com";
      $email = strip_tags($_REQUEST['email']); 
      $name = strip_tags($_REQUEST['nome']);
      $from = "{$name} <{$email}>";
      $subject = '[Pré Estreia][Inscrição][Conjunto] ' .$name.' <'.$email.'>';
      
      $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
      while(list($field, $value) = each($_REQUEST)) {
        if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
          $message .= ucwords($field) . ": " . strip_tags($value) . "<br>";
      }
      
      $attach = array();
      for($i=1; $i <= $qtdeIntegrantes; $i++) {
        $file_name[$i] = basename($_FILES['datafile'.$i]['name']);
        $data[$i] = file_get_contents($_FILES['datafile'.$i]['tmp_name']); 
        $file_contents[$i] = chunk_split(base64_encode($data[$i]));
        $file_size[$i] = $_FILES['datafile'.$i]['size'];
        $file_mime_type[$i] = getMimeType($_FILES['datafile'.$i]['name']);
        $attach[] = array($_FILES['datafile'.$i]['tmp_name'], $file_mime_type[$i]);
      }
       $file_name[9] = basename($_FILES['datafile9']['name']);
        $data[9] = file_get_contents($_FILES['datafile9']['tmp_name']); 
        $file_contents[9] = chunk_split(base64_encode($data[9]));
        $file_size[9] = $_FILES['datafile9']['size'];
        $file_mime_type[9] = getMimeType($_FILES['datafile9']['name']);
        $attach[9] = array($_FILES['datafile9']['tmp_name'], $file_mime_type[9]);
      
      if (mimeTypeDenied($file_mime_type, $mimeTypesAllowed)) {
        
        if (deleteAllFiles('datafile',$qtdeIntegrantes)) {
          header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=2");
          die();
        }
      }
      else if (fileSizeDenied($file_size, $maxFileSize)) { 
        if (deleteAllFiles('datafile',$qtdeIntegrantes)) {
          header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=3");
          die();
        }
      }
      else {
        
        if(sendMailAtt($to, $from, $subject, $message, $attach)) {
          if (deleteAllFiles('datafile',$qtdeIntegrantes)) {
            header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?success=1");
            die();
          }
        }
        else{
          if (deleteAllFiles('datafile',$qtdeIntegrantes)) {
            header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=1");
            die();
          }
        }
      }
    }
    else {
      if (deleteAllFiles('datafile',$qtdeIntegrantes)) {
        header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=4");
        die();
      }
    }
  }
}

?>                