<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(!$_REQUEST["token"]){
  header("Location: ./sign-in");
  die();
}else{

  //session check
  session_start();
  if(is_array($_SESSION[$_REQUEST['token']])){
    $_REQUEST["name"]   = $_SESSION[$_REQUEST['token']]["name"];
    $_REQUEST["email"]  = $_SESSION[$_REQUEST['token']]["email"];
    $_REQUEST["avatar"] = $_SESSION[$_REQUEST['token']]["avatar"];
    //$_REQUEST["points"] = $_SESSION[$_REQUEST['token']]["points"];
    
    if(!isset($_REQUEST['app']))
      $_REQUEST['app'] = "secondscreenqss";
    include_once '../server/config.php';
    $_admin_ranking_log = "../server/log/ranking/secondscreenqss/ranking.json";
    $points = 0;
    if(is_file($_admin_ranking_log)){
      $rankingLog = json_decode(file_get_contents($_admin_ranking_log), true);
      $rankingData = searchInArrayByIndex($rankingLog, $_REQUEST["email"]);
      if($rankingData != -1){
        $_REQUEST["points"]                     = $rankingData[1];
        $_SESSION[$_REQUEST['token']]["points"] = $rankingData[1]; 
      }
    }
    
  }
  else{
    header("Location: ./sign-in");
    die();
  }
}