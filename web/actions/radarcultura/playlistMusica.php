<?php
header("content-type: application/json");


//error_reporting(E_ALL);
//ini_set('display_errors','On');

// mail sender

//die('1');
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
  /*}
  else {
    header("Location: http://cmais.com.br");
    die();
  }*/
}
/*







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
}
*/