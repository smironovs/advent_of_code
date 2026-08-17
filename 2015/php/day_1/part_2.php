<?php

CONST basementFloor = -1;

$inputData = file_get_contents("./input.txt");

// Santas starting point (ground floor)
$startingFloor = 0;

$index = 0;
while ($startingFloor != -1) {
    if ($inputData[$index] == "(") {
        $startingFloor++;
        $index++;
    } elseif ($inputData[$index] == ")") {
        $startingFloor--;
        $index++;
    }
}

echo $index;
