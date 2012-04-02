<?php
// Make the page validate
ini_set('session.use_trans_sid', '0');
// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));
// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;
// Begin the session
session_start();
// Set the session contents
$_SESSION['captcha_id'] = $str;

// Begin the session
session_start();

// If the session is not present, set the variable to an error message
if(!isset($_SESSION['captcha_id']))
	$str = 'ERROR!';
// Else if it is present, set the variable to the session contents
else
	$str = $_SESSION['captcha_id'];

// Set the content type
//header('Content-type: image/png');
header('Cache-control: no-cache');

// Create an image from button.png
$image = imagecreatefrompng('button.png');

// Set the font colour
$colour = imagecolorallocate($image, 0, 0, 0);

// Set the font
$font = '../fonts/Anorexia.ttf';

// Set a random integer for the rotation between -15 and 15 degrees
$rotate = rand(-15, 15);

// Create an image using our original image and adding the detail
imagettftext($image, 14, $rotate, 18, 30, $colour, $font, $str);

// Output the image as a png
imagepng($image);

?>