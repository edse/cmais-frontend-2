<?php
include("/var/frontend/web/actions/includes/functions.php");


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
  //if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
    $to = "jedoljak@gmail.com"; "georgia.catarina@gmail.com";
    //$to = "vilasesamooficial@gmail.com";
    $email = strip_tags($_REQUEST['email']);
    $name = strip_tags($_REQUEST['nome']);
    $campaign = strip_tags($_REQUEST['campanha']);
    $from = "{$name} <{$email}>";
    $subject = '[Vila Sésamo][' . $campaign . '] '.$name.' <'.$email.'>';
    
    $message = "Formulário Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    /*while(list($field, $value) = each($_REQUEST)) {
      if(!in_array(ucwords($field), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
        $message .= "<b>" . ucwords($field) . ":</b> " . strip_tags($value) . "<br>";
    }*/
    
    
   
      
      if(sendMailAtt($to, $from, $subject, $message)) {
          header("Location: ".$_REQUEST['urlElement']."?success=2#carrossel-interna");
			}else{
      	header("Location: ".$_REQUEST['urlElement']."?error=1#carrossel-interna");
          //die("3");
        
      }
    
  //}
}

?>                