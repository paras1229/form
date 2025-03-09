<?php
//Q-2 : Write a PHP GD Library code to draw a rectangle with in a circle, inside rectangle, inside circle, inside rectangle and so on... that covers the entire screen of computer.

// Create a new image with a size of 800x600 pixels
$img = imagecreatetruecolor(800, 600);

// Allocate colors
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);

// Function to draw the recursive pattern
function draw_pattern($img, $x, $y, $width, $height, $depth, $color) {
    // Base case: stop recursion at a certain depth
    if ($depth == 0) return;

    // Draw a circle
    imagearc($img, $x + $width / 2, $y + $height / 2, $width, $height, 0, 360, $color);

    // Draw a rectangle inside the circle
    imagerectangle($img, $x + 10, $y + 10, $x + $width - 10, $y + $height - 10, $color);

    // Recursive call: draw the pattern inside the rectangle
    draw_pattern($img, $x + 20, $y + 20, $width - 40, $height - 40, $depth - 1, $color);
}

// Fill the background with white color
imagefill($img, 0, 0, $white);

// Start the recursive pattern
draw_pattern($img, 50, 50, 700, 500, 10, $black);

// Output the image
header('Content-Type: image/png');
imagepng($img);

// Clean up
imagedestroy($img);
?>