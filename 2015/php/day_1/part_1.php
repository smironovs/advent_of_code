<?php

$inputData = file_get_contents("./input.txt");

// Santas starting point (ground floor)
$startingFloor = 0;

for ($i = 0; $i < strlen($inputData); $i++) {
    if ($inputData[$i] == "(") {
        $startingFloor++;
    } elseif ($inputData[$i] == ")") {
        $startingFloor--;
    }
}

echo $startingFloor;

// echo $inputData;
