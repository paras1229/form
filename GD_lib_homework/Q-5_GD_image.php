<?php
//Q-5 : Draw a rangoli of your choice using PHP GD Library coding.

// Set the image dimensions
$width = 800;
$height = 800;

// Create a new image
$img = imagecreatetruecolor($width, $height);

// Allocate colors
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$yellow = imagecolorallocate($img, 255, 255, 0);

// Fill the background with white color
imagefill($img, 0, 0, $white);

// Draw the outer circle
imagearc($img, $width / 2, $height / 2, $width - 100, $height - 100, 0, 360, $red);

// Draw the inner circle
imagearc($img, $width / 2, $height / 2, $width / 2 - 50, $height / 2 - 50, 0, 360, $green);

// Draw the middle circle
imagearc($img, $width / 2, $height / 2, ($width - 100) / 2, ($height - 100) / 2, 0, 360, $blue);

// Draw the petals
imagefilledpolygon($img, array(
    $width / 2, $height / 2 - ($height - 100) / 2,
    $width / 2 + ($width - 100) / 2, $height / 2,
    $width / 2, $height / 2 + ($height - 100) / 2,
    $width / 2 - ($width - 100) / 2, $height / 2
), 4, $yellow);

imagefilledpolygon($img, array(
    $width / 2 - ($width - 100) / 2, $height / 2,
    $width / 2, $height / 2 - ($height - 100) / 2,
    $width / 2 + ($width - 100) / 2, $height / 2,
    $width / 2, $height / 2 + ($height - 100) / 2
), 4, $yellow);

// Draw the center dot
imagefilledellipse($img, $width / 2, $height / 2, 20, 20, $red);

// Output the image
header('Content-Type: image/png');
imagepng($img);

// Clean up
imagedestroy($img);
?>