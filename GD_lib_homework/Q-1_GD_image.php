<?php
//Q-1 : Write a program to draw a star using PHP GD Library and fill different colors in star.

// Create a new image with a size of 500x500 pixels
$img = imagecreatetruecolor(500,500);

// Allocate colors
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue = imagecolorallocate($img, 0, 0, 255);

// Fill the background with white color
imagefill($img, 0, 0, $white);

// Draw a star
$points = array(
    250 + 150 * cos(0 * pi() / 180),  // x1
    250 + 150 * sin(0 * pi() / 180),  // y1
    250 + 100 * cos(72 * pi() / 180), // x2
    250 + 100 * sin(72 * pi() / 180), // y2
    250 + 150 * cos(144 * pi() / 180), // x3
    250 + 150 * sin(144 * pi() / 180), // y3
    250 + 100 * cos(216 * pi() / 180), // x4
    250 + 100 * sin(216 * pi() / 180), // y4
    250 + 150 * cos(288 * pi() / 180), // x5
    250 + 150 * sin(288 * pi() / 180)  // y5
);

// Draw and fill the star with different colors
imagefilledpolygon($img, $points, 5, $red);
imagepolygon($img, $points, 5, $green);

// Output the image
header('Content-Type: image/gif');
imagegif($img);

// Clean up
imagedestroy($img);
?>