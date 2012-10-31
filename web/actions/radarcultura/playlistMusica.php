<?php
header("content-type: application/json");

//error_reporting(E_ALL);
//ini_set('display_errors','On');

// mail sender
$email_site = "radar.facebook@tvcultura.com.br";

if($_REQUEST["post_id"]){
  $email_user = "radar.facebook@tvcultura.com.br";
  $nome_user = "RadarCultura - Facebook";
  $msg = file_get_contents("http://radarcultura.cmais.com.br/actions/radarcultura/retriveFacebookPost.php?post_id=".$_REQUEST["post_id"]);
  
  //if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
    ini_set('sendmail_from', $email_site);
    $cabecalho = "Return-Path: " . $nome_user . " <" . $email_user . ">\r\n";
    $cabecalho .= "From: " . $nome_user . " <" . $email_user . ">\r\n";
    $cabecalho .= "X-Priority: 3\r\n";
    $cabecalho .= "X-Mailer: Formmail [version 1.0]\r\n";
    $cabecalho .= "MIME-Version: 1.0\r\n";
    $cabecalho .= "Content-Transfer-Encoding: 8bit\r\n";
    $cabecalho .= 'Content-Type: text/html; charset="utf-8"';
    if(mail($email_site, '[RadarCultura][Música para playlist: ] '.$nome_user.' <'.$email_user.'>', stripslashes(nl2br($msg)), $cabecalho)){
      //die('callback("1");');
      die('1');
    }
    else {
      //die('callback("0");');
      die('0');
    }
  /*}
  else {
    header("Location: http://cmais.com.br");
    die();
  }*/
}
/*

<?php
// mail sender
//$email_site = "emerson.estrella@gmail.com, fransciscofernandes@tvcultura.com.br, pedronakano@tvcultura.com.br";
$email_site = "radar.email@tvcultura.com.br";

if(isset($email_site)) {
    
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email_user = @strip_tags($_REQUEST['email']);
    $nome_user = @strip_tags($_REQUEST['nome']);
    
    if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
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
      if(mail($email_site, '[RadarCultura][Música para playlist: ] '.$nome_user.' <'.$email_user.'>', stripslashes(nl2br($msg)), $cabecalho)){
        die("1");
      }
      else {
        die("0");
      }
    }
    else {
      header("Location: http://cmais.com.br");
      die();
    }
  }
}
*/
