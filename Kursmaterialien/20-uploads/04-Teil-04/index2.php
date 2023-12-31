<?php

// The file
$filename = 'bild.jpg';

// Set a maximum height and width
$width = 200;
$height = 200;

// Content type
header('Content-Type: image/jpeg');

// Get new dimensions
// list($width_orig, $height_orig) = getimagesize($filename);
$a = getimagesize($filename);
$width_orig = $a[0];
$height_orig = $a[1];

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
   $width = $height*$ratio_orig;
} else {
   $height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
imagejpeg($image_p, null, 80);