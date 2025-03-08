<?php
// Create a new canvas with the specified dimensions
$canvas = imagecreatetruecolor(400, 500);

// Allocate a color for the canvas (white in this case)
$white = imagecolorallocate($canvas, 255, 255, 255);

// Fill the canvas with the allocated color
imagefill($canvas, 0, 0, $white);

// Load the image you want to add to the canvas
$image = imagecreatefromjpeg('C:\wamp64\www\paras21\birds_of_feather.jpeg');

// Get the dimensions of the original image
$width = imagesx($image);
$height = imagesy($image);

// Resize the image to the specified dimensions (40x40)
imagecopyresized($canvas, $image, 0, 0, 0, 0, 40, 40, $width, $height);

// Output the resulting image
header('Content-Type: image/png');
imagepng($canvas);

// Clean up
imagedestroy($canvas);
imagedestroy($image);

 ?>