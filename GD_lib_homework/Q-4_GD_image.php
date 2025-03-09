<?php
//Q-4 : Write a PHP GD Library code that will display the house/temple with different level creativity and color combination.

// Set the image dimensions
 $width = 800;
 $height = 600;
    
 // Create a new image
 $img = imagecreatetruecolor($width, $height);

 // Allocate colors
 $white = imagecolorallocate($img, 255, 255, 255);
 $light_blue = imagecolorallocate($img, 173, 216, 230);
 $dark_blue = imagecolorallocate($img, 0, 0, 255);
 $red = imagecolorallocate($img, 255, 0, 0);
 $green = imagecolorallocate($img, 0, 128, 0);
 $yellow = imagecolorallocate($img, 255, 255, 0);
 $brown = imagecolorallocate($img, 165, 42, 42);
    
// Fill the background with light blue color
imagefill($img, 0, 0, $light_blue);
    
// Draw the temple base
imagefilledrectangle($img, 100, 400, 700, 550, $brown);
    
// Draw the temple walls
imagefilledrectangle($img, 150, 200, 650, 400, $white);
imagefilledrectangle($img, 200, 100, 600, 200, $white);
    
// Draw the temple roof
imagefilledpolygon($img, array(
        250, 50,
        550, 50,
        400, 150
    ), 3, $red);
    
    // Draw the temple tower
    imagefilledpolygon($img, array(
        375, 150,
        425, 150,
        400, 50
    ), 3, $green);
    
// Draw the temple door
imagerectangle($img, 375, 450, 425, 500, $dark_blue);
    
// Draw the temple windows
imagerectangle($img, 300, 300, 350, 350, $dark_blue);
imagerectangle($img, 450, 300, 500, 350, $dark_blue);
    
// Output the image
header('Content-Type: image/png');
imagepng($img);
    
// Clean up
imagedestroy($img);
?>