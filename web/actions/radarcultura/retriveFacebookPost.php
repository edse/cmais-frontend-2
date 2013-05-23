<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

require 'facebook-php-sdk/src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  //'appId'  => '498504570187162',
  //'secret' => '4b1e3a3e00c03267e51575259aa8cdfb',
  'appId'  => '222430124549926',
  'secret' => '55092d3a524895cc556db6c943b09607'  
));

$facebook->setExtendedAccessToken();
//echo ">>>".$facebook->getAccessToken();
echo file_get_contents("https://graph.facebook.com/".$_REQUEST["post_id"]."?access_token=".$facebook->getAccessToken());
