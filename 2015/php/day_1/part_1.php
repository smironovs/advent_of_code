<?php

$inputData = file_get_contents("./input.txt");

// santas starting point (ground floor)
$startingfloor = 0;

for ($i = 0; $i < strlen($inputData); $i++) {
    if ($inputData[$i] == "(") {
        $startingfloor++;
    } elseif ($inputData[$i] == ")") {
        $startingfloor--;
    }
}

echo $startingfloor;

// echo $inputData;
