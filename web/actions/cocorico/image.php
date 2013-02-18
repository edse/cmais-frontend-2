<?php
// Load the image
$url = "http://midia.cmais.com.br/assets/image/original/a072380663cf70defa084420a6c1c5c8cf6fc091.png";
if($_REQUEST["u"]!="")
  $url = $_REQUEST["u"];

$im = imagecreatefrompng($url);

$textColor = imagecolorallocate($im, 0, 0, 0);

$width = imagesx($im);
$height = imagesy($im);

$fontSize = 5; 
$text = "Emerson Estrella";
if($_REQUEST["n"]!="")
  $text = urldecode($_REQUEST["n"]);

// Calculate the left position of the text
//$leftTextPos = ($width - imagefontwidth($fontSize)*strlen($text)) / 2;
// Write the string
//imagestring($im, $fontSize, $leftTextPos, $height-28, $text, $textColor);
//imagestring($im, 80, 18, 150, $text, $textColor);
imagettftext($im, 40, 0, 340, 485, $black, '/var/frontend/web/actions/cocorico/handsean.ttf', $text);
// Output the image
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
