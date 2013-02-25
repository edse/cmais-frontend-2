<?php
if($_REQUEST['teste']) {
  $to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";
  
  $email = strip_tags($request->getParameter('email'));
  $name = strip_tags($request->getParameter('nome'));
  $subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';
  $body = stripslashes(nl2br($body));
  
  if(mail($to, $subject, $body, $header)){
    die("1");
  }
  else {
    die("0");
  }
  
}
else {
  header('location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1');
  die();
}


?>                