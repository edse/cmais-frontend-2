<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

$allowedExts = array("jpg", "jpeg", "gif", "png");

if($_FILES["arquivo"]){
  $extension = end(explode(".", $_FILES["arquivo"]["name"]));
  if((($_FILES["arquivo"]["type"] == "image/gif") || ($_FILES["arquivo"]["type"] == "image/jpeg") || ($_FILES["arquivo"]["type"] == "image/png") || ($_FILES["arquivo"]["type"] == "image/pjpeg")) && ($_FILES["arquivo"]["size"] < 20000) && in_array($extension, $allowedExts)){
    if($_FILES["arquivo"]["error"] > 0){
      die("Return Code: " . $_FILES["file"]["error"] . "<br>");
    }
    else{
      echo "Upload: " . $_FILES["arquivo"]["name"] . "<br>";
      echo "Type: " . $_FILES["arquivo"]["type"] . "<br>";
      echo "Size: " . ($_FILES["arquivo"]["size"] / 1024) . " kB<br>";
      echo "Temp file: " . $_FILES["arquivo"]["tmp_name"] . "<br>";
      if(is_file($_FILES["arquivo"]["tmp_name"])){
        if(multi_attach_mail("emerson.estrella@gmail.com, ideiasmirabolantestvrtb@gmail.com", array($_FILES["arquivo"]["tmp_name"]), $_POST, $_FILES["arquivo"]["name"], "nao-responda@tvcultura.com.br")){
          unlink($_FILES["arquivo"]["tmp_name"]);
          //header("Location: http://tvratimbum.cmais.com.br/ideias-mirabolantes-sucesso");
          echo ">>>>OK!";
          die();
        }else{
          unlink($_FILES["arquivo"]["tmp_name"]);
          //header("Location: http://tvratimbum.cmais.com.br/ideias-mirabolantes-erro");
          echo ">>>>ERRO!";
          die();
        }
      }
    }
  }
  else{
    header("Location: http://tvratimbum.cmais.com.br/ideias-mirabolantes-erro");
    die();
    echo "Invalid file";
  }
  die();
}else{
  header("Location: http://tvratimbum.cmais.com.br/ideias-mirabolantes");
  die();
}

function multi_attach_mail($to, $files, $form_data, $file_name, $sendermail) {
  // email fields: to, from, subject, and so on
  $from = "Files attach <" . $sendermail . ">";
  $subject = date("d.M H:i") . " F=" . count($files);
  $headers = "From: $from";
  $message = date("Y.m.d H:i:s") . "\n" . count($files) . " attachments\n\n";
  foreach($form_data as $k=>$v){
    $message .= "\n".$k.": ".$v;
  }

  // boundary
  $semi_rand = md5(time());
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

  // headers for attachment
  $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

  // multipart boundary
  $message = "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

  // preparing attachments
  for ($i = 0; $i < count($files); $i++) {
    if (is_file($files[$i])) {
      $message .= "--{$mime_boundary}\n";
      $fp = @fopen($files[$i], "rb");
      $data = @fread($fp, filesize($files[$i]));
      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      //$message .= "Content-Type: application/octet-stream; name=\"" . basename($files[$i]) . "\"\n" . "Content-Description: " . basename($files[$i]) . "\n" . "Content-Disposition: attachment;\n" . " filename=\"" . basename($files[$i]) . "\"; size=" . filesize($files[$i]) . ";\n" . "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
      $message .= "Content-Type: application/octet-stream; name=\"" . basename($files[$i]) . "\"\n" . "Content-Description: " . basename($files[$i]) . "\n" . "Content-Disposition: attachment;\n" . " filename=\"" . basename($file_name) . "\"; size=" . filesize($files[$i]) . ";\n" . "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
  }
  $message .= "--{$mime_boundary}--";
  $returnpath = "-f" . $sendermail;
  $ok = @mail($to, $subject, $message, $headers, $returnpath);
  if ($ok) {
    return $i;
  } else {
    return 0;
  }
}

die();
