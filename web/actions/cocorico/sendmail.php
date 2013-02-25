<?php

header('location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1');
die();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
while(list($campo, $valor) = each($_REQUEST)) {
  if(!in_array(ucwords($campo), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
    $msg .= "<b>" . ucwords($campo) . ":</b> " . strip_tags($valor) . "<br>";
}


$email_site = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";

if(isset($email_site)) {
  if(($request->getParameter('captcha'))||($request->getParameter('mande-seu-tema'))||($this->section->getSlug()=='participe')||($this->section->getSlug()=='ideias-mirabolantes')||($this->section->getSlug()=='tvcocorico')||($this->section->getSlug()=='piadas')||($this->site->getSlug() == "tvcocorico")||($this->section->getSlug() == "cadastrodeestagiario")){
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
      $email_site = $this->section->getContactEmail();
      $email_user = strip_tags($request->getParameter('email'));
      $nome_user = strip_tags($request->getParameter('nome'));
      if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
        // verifica se o servidor que ta o formulario é o mesmo que o chamou, se for um ataque de injeção de dados este valor será diferente
        ini_set('sendmail_from', $email_site);
        
        $cabecalho = "Return-Path: " . $nome_user . " <" . $email_user . ">\r\n";
        $cabecalho .= "From: " . $nome_user . " <" . $email_user . ">\r\n";
        $cabecalho .= "X-Priority: 3\r\n";
        $cabecalho .= "X-Mailer: Formmail [version 1.0]\r\n";
        $cabecalho .= "MIME-Version: 1.0\r\n";
        
        if (in_array($this->section->getSlug(), array("tvcocorico"))) {
          $boundary = sha1(date('r', time()));
          $cabecalho .= 'Content-Type: multipart/mixed; boundary="PHP-mixed-'.$boundary.'"';
          $msg = "--".$boundary."\r\n";
          $msg .= 'Content-Type: text/html; charset="utf-8"'."\r\n";
          $msg .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
          $msg .= "Formulario Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
          while(list($campo, $valor) = each($_REQUEST)) {
            if(!in_array(ucwords($campo), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
              $msg .= "<b>" . ucwords($campo) . ":</b> " . strip_tags($valor) . "<br>";
          }
          $attachment = chunk_split(base64_encode($_FILES["datafile"]["name"]));
          $msg .= "--".$boundary."\r\n";
          $msg .= "Content-Type: image/jpeg; name=\"".$_FILES["datafile"]["name"]."\""."\r\n";
          $msg .= "Content-Transfer-Encoding: base64"."\r\n";
          $msg .= "Content-Disposition: attachment"."\r\n\r\n";
          $msg .= $attachment."\r\n";
          $msg .= "--".$boundary."\r\n";              
          
        }
        else {
          $cabecalho .= "Content-Transfer-Encoding: 8bit\r\n";
          $cabecalho .= 'Content-Type: text/html; charset="utf-8"';
          
          $msg = "Formulario Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
          while(list($campo, $valor) = each($_REQUEST)) {
            if(!in_array(ucwords($campo), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
              $msg .= "<b>" . ucwords($campo) . ":</b> " . strip_tags($valor) . "<br>";
          }
          
        }
        if(mail($email_site, '['.$this->site->getTitle().']['.$this->section->getTitle().'] '.$nome_user.' <'.$email_user.'>', stripslashes(nl2br($msg)), $cabecalho)){
          if($this->section->getSlug() == "tvcocorico") {
            header('location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?success=1');
            die();
          }
          else
            die("1");
        }
        else {
          if($this->section->getSlug() == "tvcocorico") {
            header('location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1');
            die();
          }
          else
            die("0");
        }
      }
      else {
        header("Location: http://cmais.com.br");
        die();
      }
    }
  }
}

            
?>                