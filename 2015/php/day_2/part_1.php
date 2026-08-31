<?php
$inputData = file_get_contents("./input.txt");

$explodedData = explode("\n", trim($inputData));

$total = 0;

foreach ($explodedData as $box) {
    $dimensions = explode("x", trim($box));

    $l = $dimensions[0];
    $w = $dimensions[1];
    $h = $dimensions[2];

    $firstSide = $l * $w;
    $secondSide = $w * $h;
    $thirdSide = $h * $l;

    $total += (2 * $firstSide) + (2 * $secondSide) + (2 * $thirdSide);
    $total += min($firstSide, $secondSide, $thirdSide);
}

echo $total;
