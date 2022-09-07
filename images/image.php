<?php
session_start();

// If the session is not present, set the variable to an error message
if(!isset($_SESSION['captcha_id']))
	$str = 'ERROR!';
else
	$str = $_SESSION['captcha_id'];

// Set the content type
header('Content-Type: image/png');
header('Cache-Control: no-cache');

// Create an image from button.png
$image = imagecreatefrompng('bg6.png');
//$colour = imagecolorallocate($image,20, 50, 120);
$colour = imagecolorallocate($image, 183, 178, 152);
$font = '../fonts/Anorexia.ttf';
$rotate = rand(-15, 15);
imagettftext($image, 14, $rotate, 18, 30, $colour, $font, $str);

// Output the image as a png
imagepng($image);
