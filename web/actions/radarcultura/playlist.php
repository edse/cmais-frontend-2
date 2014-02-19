<?php
// mail sender
$email_site = "emerson.estrella@gmail.com, franciscofernandes@tvcultura.com.br, pedronakano@tvcultura.com.br, cristovamruizjr@gmail.com";
//$email_site = "radar.email@tvcultura.com.br";

if(isset($email_site)) {
    
  //if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email_user = @strip_tags($_REQUEST['email']);
    $nome_user = @strip_tags($_REQUEST['nome']);
    
    if(isset($_REQUEST['nome']) && isset($_REQUEST['email'])){
    	
    //if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
      // verifica se o servidor que ta o formulario é o mesmo que o chamou, se for um ataque de injeção de dados este valor será diferente
      ini_set('sendmail_from', $email_site);
      $msg = "Formulario Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
      while(list($campo, $valor) = each($_REQUEST)) {
        if(!in_array(ucwords($campo), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
          $msg .= "<b>" . ucwords($campo) . ":</b> " . strip_tags($valor) . "<br>";
      }
      $cabecalho = "Return-Path: " . $nome_user . " <" . $email_user . ">\r\n";
      $cabecalho .= "From: " . $nome_user . " <" . $email_user . ">\r\n";
      $cabecalho .= "X-Priority: 3\r\n";
      $cabecalho .= "X-Mailer: Formmail [version 1.0]\r\n";
      $cabecalho .= "MIME-Version: 1.0\r\n";
      $cabecalho .= "Content-Transfer-Encoding: 8bit\r\n";
      $cabecalho .= 'Content-Type: text/html; charset="utf-8"';
      if(mail($email_site, '[RadarCultura][Sugestão de playlist] '.$nome_user.' <'.$email_user.'>', stripslashes(nl2br($msg)), $cabecalho)){
				$a = array("data" => "1");
	      $json = json_encode($a);
	      $callback = $_REQUEST['callback'];
	      echo $callback.'('. $json . ');';
				die();
      }
      else {
				$a = array("data" => "0");
	      $json = json_encode($a);
	      $callback = $_REQUEST['callback'];
	      echo $callback.'('. $json . ');';
				die();
      }
    }
    else {
      header("Location: http://cmais.com.br");
      die();
    }
  //}
}
