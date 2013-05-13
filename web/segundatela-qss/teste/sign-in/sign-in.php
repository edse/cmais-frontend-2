<?php
header("content-type: application/json");

if(!isset($_REQUEST['app']))
  die('Application not found!');

include_once '../../server/config.php';

if(!is_file($_admin_users_log)){
  die('Error opening users log file!');
}

$email = false;
if(isset($_REQUEST['email']))
  $email = $_REQUEST['email'];
$password = false;
if(isset($_REQUEST['password']))
  $password = $_REQUEST['password'];
$callback = false;
if(isset($_REQUEST['callback']))
  $callback = $_REQUEST['callback'];

if(!$password || !$email){
  if(!$callback)
    die(json_encode(array("status"=>"error")));
  else
    die($callback."(".json_encode(array("status"=>"error")).")");
}

if(is_file($_admin_users_log)){
  $log = json_decode(file_get_contents($_admin_users_log), true);
  $index = searchInArray($log, 'email', $email);
  if($index > -1){
    if($log[$index]["password"] == hash("sha256", "quemsabesabe".$password, false)){
      //session register
      session_start();
      //$_SESSION[$log[$index]["id"]] = 1;
      $_SESSION[$log[$index]["id"]] = array("status"=>"success", "token"=>$log[$index]["id"], "name"=>$log[$index]["name"], "email"=>$log[$index]["email"], "avatar"=>$log[$index]["avatar"]);
      if(!$callback)
        die(json_encode(array("status"=>"success", "token"=>$log[$index]["id"], "name"=>$log[$index]["name"], "email"=>$log[$index]["email"], "avatar"=>$log[$index]["avatar"])));
      else
        die($callback."(".json_encode(array("status"=>"success", "token"=>$log[$index]["id"], "name"=>$log[$index]["name"], "email"=>$log[$index]["email"], "avatar"=>$log[$index]["avatar"])).")");
    }
  }

  if(!$callback)
    die(json_encode(array("status"=>"error", "message"=>"Login e/ou senha invalidos!")));
  else
    die($callback."(".json_encode(array("status"=>"error", "message"=>"Login e/ou senha invalidos!")).")");
}

die('Error reading log file!');