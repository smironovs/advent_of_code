<?php
$inputData = file_get_contents("./input.txt");

//$inputData = "2x3x4\n1x1x10";

$explodedData = explode("\n", trim($inputData));

$total = 0;
$extraRibbonWrap = 0;
$extraBowWrap = 0;

foreach ($explodedData as $box) {
    $dimensions = explode("x", trim($box));

    $l = $dimensions[0];
    $w = $dimensions[1];
    $h = $dimensions[2];

    sort($dimensions);

    $extraRibbonWrap = 2 * ($dimensions[0] + $dimensions[1]);
    $extraBowWrap = $l * $w * $h;

    $total += $extraRibbonWrap + $extraBowWrap;
}

echo $total;
