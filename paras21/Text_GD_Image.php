<?php
// Create a new canvas with the specified dimensions
$canvas = imagecreatetruecolor(400, 500);

// Allocate a color for the canvas
$blue = imagecolorallocate($canvas, 0, 60, 255);

// Fill the canvas with the allocated color
imagefill($canvas, 0, 0, $blue);

// Load the image you want to add to the canvas
$image = imagecreatefromjpeg('C:\wamp64\www\paras21\birds_of_feather.jpeg');

// Get the dimensions of the original image
$width = imagesx($image);
$height = imagesy($image);

// Resize the image to the specified dimensions
imagecopyresized($canvas, $image, 14,14,0,0,68,68, $width, $height);

// Text Adding...
$font="c:\USERS\PARAS\APPDATA\LOCAL\MICROSOFT\WINDOWS\FONTS\ROBOTO-BOLD.TTF";

// Font Color Set...
$white = imagecolorallocate($canvas,255,255,255);

// Song Name and Song Writer Name...
imagettftext($canvas,16,0,95,37,$white,$font,"BIRDS OF A FEATHER");
imagettftext($canvas,14,0,95,68,$white,$font,"Billie Eilish");

// Song Lyrics...
imagettftext($canvas,17,0,25,130,$white,$font,"Birds of a feather,");
imagettftext($canvas,17,0,25,155,$white,$font,"we should stick");

// Output the resulting image
header('Content-Type: image/gif');
imagegif($canvas);

?>