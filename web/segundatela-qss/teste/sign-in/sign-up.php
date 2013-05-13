<?php
header("content-type: application/json");

if(!isset($_REQUEST['app']))
  die('Application not found!');

include_once '../../server/config.php';

if(!is_file($_admin_users_log)){
  if(!fopen($_admin_users_log, "w+"))
    die('Error opening users log file!');
}

$name = false;
if(isset($_REQUEST['name']))
  $name = $_REQUEST['name'];
$email = false;
if(isset($_REQUEST['email']))
  $email = $_REQUEST['email'];
$password = false;
if(isset($_REQUEST['password']))
  $password = $_REQUEST['password'];
$avatar = false;
if(isset($_REQUEST['avatar']))
  $avatar = $_REQUEST['avatar'];
$callback = false;
if(isset($_REQUEST['callback']))
  $callback = $_REQUEST['callback'];

if(!$password || !$email || !$name || !$avatar){
  if(!$callback)
    die(json_encode(array("status"=>"error")));
  else
    die($callback."(".json_encode(array("status"=>"error")).")");

}

if(is_file($_admin_users_log)){
  $log = json_decode(file_get_contents($_admin_users_log), true);
  $index = -1;
  if(is_array($log))
    $index = searchInArray($log, 'email', $email);
  if($index == -1){
    //$uid      = md5("quemsabesabe".str_replace(array("0."," "), array("",""), microtime(false)));
    $uid      = $index+2;
    $id       = hash("sha256", "quemsabesabe".$email, false);
    $password = hash("sha256", "quemsabesabe".$password, false); 
    $user = array(
      "name"              => $name,
      "email"             => $email,
      "avatar"            => $avatar,
      "password"          => $password,
      "id"                => $id,
      //"points"            => 0,
      //"uid"               => $uid
    );
    $log[] = $user;
    $file = fopen($_admin_users_log, "w+");
    fwrite($file, json_encode($log));
    fclose($file);
  
    if(!$callback)
      die(json_encode(array("status"=>"success")));
    else
      die($callback."(".json_encode(array("status"=>"success")).")");
    
    //send email
    //mail($email, 'Quem sabe, sabe! - Confirmação de cadastro', "Para ativar seu cadastro acesse o endereço abaixo:\n\n".$_email_confirmation_url.$id);
    
  }
  else{
    if(!$callback)
      die(json_encode(array("status"=>"taken", "message"=>$email." já foi cadastrado!")));
    else
      die($callback."(".json_encode(array("status"=>"taken", "message"=>$email." já foi cadastrado!")).")");
  }
}

die('Error saving log file!');
