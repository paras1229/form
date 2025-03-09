<?php
//Q-6 : Draw attractive design using arc, rectangle and polygon with different color combination of your choice using PHP GD Library coding.

 // Set the image dimensions
 $width = 800;
 $height = 600;
    
// Create a new image
$img = imagecreatetruecolor($width, $height);
    
// Allocate colors
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$yellow = imagecolorallocate($img, 255, 255, 0);
$orange = imagecolorallocate($img, 255, 165, 0);
$pink = imagecolorallocate($img, 255, 192, 203);
    
// Fill the background with white color
imagefill($img, 0, 0, $white);
    
// Draw a rectangle with a red border and yellow fill
imagerectangle($img, 50, 50, 250, 200, $red);
imagefilledrectangle($img, 55, 55, 245, 195, $yellow);
    
// Draw an arc with a blue border and green fill
imagearc($img, 400, 100, 200, 200, 0, 180, $blue);
imagefilledarc($img, 400, 100, 200, 200, 0, 180, $green, IMG_ARC_PIE);
    
// Draw a polygon with an orange border and pink fill
imagefilledpolygon($img, array(
        600, 400,
        700, 500,
        600, 600,
        500, 500
    ), 4, $pink);
imagepolygon($img, array(
        600, 400,
        700, 500,
        600, 600,
        500, 500
    ), 4, $orange);
    
// Output the image
header('Content-Type: image/png');
imagepng($img);
    
    // Clean up
imagedestroy($img);
?>