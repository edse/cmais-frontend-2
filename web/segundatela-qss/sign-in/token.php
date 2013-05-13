<?php
/*
header("content-type: application/json");

if(!isset($_REQUEST['app']))
  die('Application not found!');

if(!isset($_REQUEST['token']))
  die('Token not found!');

include_once '../../server/config.php';

if(!is_file($_admin_ranking_log)){
  if(!fopen($_admin_ranking_log, "w+")){
    if(!$callback)
      die(json_encode(array("status"=>"error", "message"=>"Ranking log not found!")));
    else
      die($callback."(".json_encode(array("status"=>"error", "message"=>"Ranking log not found!")).")");
  }
}
$log = json_decode(file_get_contents($_admin_ranking_log), true);
$index = searchInArray($log, 'token', $_REQUEST['token']);
if($index > -1){
  if(!$callback)
    die(json_encode(array("status"=>"success", "token"=>$log[$index]["id"], "name"=>$log[$index]["name"], "avatar"=>$log[$index]["avatar"], "points"=>$log[$index]["points"])));
  else
    die($callback."(".json_encode(array("status"=>"success", "token"=>$log[$index]["id"], "name"=>$log[$index]["name"], "avatar"=>$log[$index]["avatar"], "points"=>$log[$index]["points"])).")");
}
else
*/