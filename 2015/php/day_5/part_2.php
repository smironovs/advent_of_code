<?php

$inputData = trim(file_get_contents("./input.txt"));

$data = explode("\n", $inputData);

// It contains at least three vowels (aeiou only), like aei, xazegov, or aeiouaeiouaeiou.

$niceStrings = 0;
foreach ($data as $string) {
    if (preg_match('/(?=.*([A-Za-z]{2}).*\1)(?=.*([A-Za-z]).\2)/', $string)) {
        $niceStrings++;
    }
}

echo $niceStrings;
