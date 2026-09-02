<?php

$inputData = trim(file_get_contents("./input.txt"));

//$tempKey = "abcdef";

$currentNumber = 1;
while (true) {
    $currentFiveSymbols = substr(md5($inputData . $currentNumber), 0, 6);

    // we regex boys
    if (preg_match("/[0]{6}/", $currentFiveSymbols)) {
        echo "found number $currentNumber";
        break;
    }

    $currentNumber++;
}

