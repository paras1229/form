<?php
//Q-3 : Write down the code that will display a moving circle from all 4 corners of screen using PHP GD Library.

// Set the screen dimensions
$screen_width = 800;
$screen_height = 600;

// Create a new image with the screen dimensions
$img = imagecreatetruecolor($screen_width, $screen_height);

// Allocate colors
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$yellow = imagecolorallocate($img, 255, 255, 0);

// Set the initial positions and velocities of the circles
$circle1_x = 0;
$circle1_y = 0;
$circle1_vx = 2;
$circle1_vy = 2;

$circle2_x = $screen_width;
$circle2_y = 0;
$circle2_vx = -2;
$circle2_vy = 2;

$circle3_x = 0;
$circle3_y = $screen_height;
$circle3_vx = 2;
$circle3_vy = -2;

$circle4_x = $screen_width;
$circle4_y = $screen_height;
$circle4_vx = -2;
$circle4_vy = -2;

// Animation loop
for ($i = 0; $i < 100; $i++) {
    // Fill the background with white color
    imagefill($img, 0, 0, $white);

    // Draw the circles
    imagefilledellipse($img, $circle1_x, $circle1_y, 20, 20, $red);
    imagefilledellipse($img, $circle2_x, $circle2_y, 20, 20, $green);
    imagefilledellipse($img, $circle3_x, $circle3_y, 20, 20, $blue);
    imagefilledellipse($img, $circle4_x, $circle4_y, 20, 20, $yellow);

    // Update the circle positions
    $circle1_x += $circle1_vx;
    $circle1_y += $circle1_vy;

    $circle2_x += $circle2_vx;
    $circle2_y += $circle2_vy;

    $circle3_x += $circle3_vx;
    $circle3_y += $circle3_vy;

    $circle4_x += $circle4_vx;
    $circle4_y += $circle4_vy;

    // Bounce the circles off the edges
    if ($circle1_x < 0 || $circle1_x > $screen_width - 20) {
        $circle1_vx = -$circle1_vx;
    }
    if ($circle1_y < 0 || $circle1_y > $screen_height - 20) {
        $circle1_vy = -$circle1_vy;
    }

    if ($circle2_x < 0 || $circle2_x > $screen_width - 20) {
        $circle2_vx = -$circle2_vx;
    }
    if ($circle2_y < 0 || $circle2_y > $screen_height - 20) {
        $circle2_vy = -$circle2_vy;
    }

    if ($circle3_x < 0 || $circle3_x > $screen_width - 20) {
        $circle3_vx = -$circle3_vx;
    }
    if ($circle3_y < 0 || $circle3_y > $screen_height - 20) {
        $circle3_vy = -$circle3_vy;
    }

    if ($circle4_x < 0 || $circle4_x > $screen_width - 20) {
        $circle4_vx = -$circle4_vx;
    }
    if ($circle4_y < 0 || $circle4_y > $screen_height - 20) {
        $circle4_vy = -$circle4_vy;
    }

    // Output the image
    header('Content-Type: image/png');
    imagepng($img);

    // Clear the output buffer
    ob_flush();

    // Pause for a short time
    usleep(50000);
}

// Clean up
imagedestroy($img);
?>