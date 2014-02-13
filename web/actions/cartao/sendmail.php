<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

include("../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  //if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
  
    $to = "julianagaldeano@tvcultura.com.br";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $from = "{$name} <{$email}>";
    $subject = '[Cartão][Envio de video] '.$name.' <'.$email.'>';
    
    $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $message .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }
      
    if(sendMailAtt($to, $from, $subject, $message, $attach)) {
      header("Location: http://tvcultura.cmais.com.br/cartaoverde/dividida-com-o-riva?success=1");
      die();
    }
    else{
      header("Location: http://tvcultura.cmais.com.br/cartaoverde/dividida-com-o-riva?error=4");
      die();
    }
  //}
}
