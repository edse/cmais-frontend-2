<?php
include("../includes/functions.php");

$current_time = date("Y-m-d H:i:s", time()); 
$expiration_time = "2013-08-30 00:00:00";
$maxfilesize = 15728640;
$mimeTypeAllowed = array("image/gif", "image/png", "image/jpg");
die($_REQUEST['qtdeIntegrantes']);
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
      
      $file_name1 = basename($_FILES['datafile1']['name']);
      $file_name2 = basename($_FILES['datafile2']['name']);
      $file_name3 = basename($_FILES['datafile3']['name']);
      $file_name4 = basename($_FILES['datafile4']['name']);
      $file_name5 = basename($_FILES['datafile5']['name']);
      $file_name6 = basename($_FILES['datafile6']['name']);
      $file_name7 = basename($_FILES['datafile7']['name']);
      $file_name8 = basename($_FILES['datafile8']['name']);
      $file_name9 = basename($_FILES['datafile9']['name']);
      $data1 = file_get_contents($_FILES['datafile1']['tmp_name']); 
      $data2 = file_get_contents($_FILES['datafile2']['tmp_name']); 
      $data3 = file_get_contents($_FILES['datafile3']['tmp_name']); 
      $data4 = file_get_contents($_FILES['datafile4']['tmp_name']); 
      $data5 = file_get_contents($_FILES['datafile5']['tmp_name']); 
      $data6 = file_get_contents($_FILES['datafile6']['tmp_name']); 
      $data7 = file_get_contents($_FILES['datafile7']['tmp_name']); 
      $data8 = file_get_contents($_FILES['datafile8']['tmp_name']); 
      $data9 = file_get_contents($_FILES['datafile9']['tmp_name']); 
      $file_contents1 = chunk_split(base64_encode($data1));
      $file_contents2 = chunk_split(base64_encode($data2));
      $file_contents3 = chunk_split(base64_encode($data3));
      $file_contents4 = chunk_split(base64_encode($data4));
      $file_contents5 = chunk_split(base64_encode($data5));
      $file_contents6 = chunk_split(base64_encode($data6));
      $file_contents7 = chunk_split(base64_encode($data7));
      $file_contents8 = chunk_split(base64_encode($data8));
      $file_contents9 = chunk_split(base64_encode($data9));
      $file_size1 = $_FILES['datafile1']['size'];
      $file_size2 = $_FILES['datafile2']['size'];
      $file_size3 = $_FILES['datafile3']['size'];
      $file_size4 = $_FILES['datafile4']['size'];
      $file_size5 = $_FILES['datafile5']['size'];
      $file_size6 = $_FILES['datafile6']['size'];
      $file_size7 = $_FILES['datafile7']['size'];
      $file_size8 = $_FILES['datafile8']['size'];
      $file_size9 = $_FILES['datafile9']['size'];
      $file_mime_type1 = getMimeType($_FILES['datafile1']['name']);
      $file_mime_type2 = getMimeType($_FILES['datafile2']['name']);
      $file_mime_type3 = getMimeType($_FILES['datafile3']['name']);
      $file_mime_type4 = getMimeType($_FILES['datafile4']['name']);
      $file_mime_type5 = getMimeType($_FILES['datafile5']['name']);
      $file_mime_type6 = getMimeType($_FILES['datafile6']['name']);
      $file_mime_type7 = getMimeType($_FILES['datafile7']['name']);
      $file_mime_type8 = getMimeType($_FILES['datafile8']['name']);
      $file_mime_type9 = getMimeType($_FILES['datafile9']['name']);
      $attach = array();
      $attach[] = array($_FILES['datafile1']['tmp_name'], $file_mime_type1);
      $attach[] = array($_FILES['datafile2']['tmp_name'], $file_mime_type2);
      $attach[] = array($_FILES['datafile3']['tmp_name'], $file_mime_type3);
      $attach[] = array($_FILES['datafile4']['tmp_name'], $file_mime_type4);
      $attach[] = array($_FILES['datafile5']['tmp_name'], $file_mime_type5);
      $attach[] = array($_FILES['datafile6']['tmp_name'], $file_mime_type6);
      $attach[] = array($_FILES['datafile7']['tmp_name'], $file_mime_type7);
      $attach[] = array($_FILES['datafile8']['tmp_name'], $file_mime_type8);
      $attach[] = array($_FILES['datafile9']['tmp_name'], $file_mime_type9);
                
      if (!in_array($file_mime_type1, $mimeTypeAllowed) && 
          !in_array($file_mime_type2, $mimeTypeAllowed) &&
          !in_array($file_mime_type3, $mimeTypeAllowed) &&
          !in_array($file_mime_type4, $mimeTypeAllowed) &&
          !in_array($file_mime_type5, $mimeTypeAllowed) &&
          !in_array($file_mime_type6, $mimeTypeAllowed) &&
          !in_array($file_mime_type7, $mimeTypeAllowed) &&
          !in_array($file_mime_type8, $mimeTypeAllowed) &&
          !in_array($file_mime_type9, $mimeTypeAllowed) 
        
        ) {
        
        if (unlink($_FILES['datafile1']['tmp_name']) &&  
            unlink($_FILES['datafile2']['tmp_name']) && 
            unlink($_FILES['datafile3']['tmp_name']) && 
            unlink($_FILES['datafile4']['tmp_name']) && 
            unlink($_FILES['datafile5']['tmp_name']) && 
            unlink($_FILES['datafile6']['tmp_name']) && 
            unlink($_FILES['datafile7']['tmp_name']) && 
            unlink($_FILES['datafile8']['tmp_name']) && 
            unlink($_FILES['datafile9']['tmp_name']) 
            ) {
          header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=2");
          die();
        }
      }
      else if ($file_size1 > $maxfilesize || $file_size2 > $maxfilesize) { // 15MB
        if (unlink($_FILES['datafile1']['tmp_name']) && 
            unlink($_FILES['datafile2']['tmp_name']) &&
            unlink($_FILES['datafile3']['tmp_name']) &&
            unlink($_FILES['datafile4']['tmp_name']) &&
            unlink($_FILES['datafile5']['tmp_name']) &&
            unlink($_FILES['datafile6']['tmp_name']) &&
            unlink($_FILES['datafile7']['tmp_name']) &&
            unlink($_FILES['datafile8']['tmp_name']) &&
            unlink($_FILES['datafile9']['tmp_name'])            
            ) {
          header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=3");
          die();
        }
      }
      else {
        
        if(sendMailAtt($to, $from, $subject, $message, $attach)) {
          if (unlink($_FILES['datafile1']['tmp_name']) && 
              unlink($_FILES['datafile2']['tmp_name']) &&
              unlink($_FILES['datafile3']['tmp_name']) &&
              unlink($_FILES['datafile4']['tmp_name']) &&
              unlink($_FILES['datafile5']['tmp_name']) &&
              unlink($_FILES['datafile6']['tmp_name']) &&
              unlink($_FILES['datafile7']['tmp_name']) &&
              unlink($_FILES['datafile8']['tmp_name']) &&
              unlink($_FILES['datafile9']['tmp_name']) 
              ) {
            header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?success=1");
            die();
          }
        }
        else{
          if (unlink($_FILES['datafile1']['tmp_name']) && 
              unlink($_FILES['datafile2']['tmp_name']) &&
              unlink($_FILES['datafile3']['tmp_name']) &&
              unlink($_FILES['datafile4']['tmp_name']) &&
              unlink($_FILES['datafile5']['tmp_name']) &&
              unlink($_FILES['datafile6']['tmp_name']) &&
              unlink($_FILES['datafile7']['tmp_name']) &&
              unlink($_FILES['datafile8']['tmp_name']) &&
              unlink($_FILES['datafile9']['tmp_name'])              
              ) {
            header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=1");
            die();
          }
        }
      }
    }
    else {
      if (unlink($_FILES['datafile1']['tmp_name']) && 
          unlink($_FILES['datafile2']['tmp_name']) &&
          unlink($_FILES['datafile3']['tmp_name']) &&
          unlink($_FILES['datafile4']['tmp_name']) &&
          unlink($_FILES['datafile5']['tmp_name']) &&
          unlink($_FILES['datafile6']['tmp_name']) &&
          unlink($_FILES['datafile7']['tmp_name']) &&
          unlink($_FILES['datafile8']['tmp_name']) &&
          unlink($_FILES['datafile9']['tmp_name'])           
          ) {
        header("Location: http://tvcultura.cmais.com.br/preestreia/conjunto-2013?error=4");
        die();
      }
    }
  }
}

?>                