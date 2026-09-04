<?php

$inputData = trim(file_get_contents("./input.txt"));

$data = explode("\n", $inputData);

// It contains at least three vowels (aeiou only), like aei, xazegov, or aeiouaeiouaeiou.

$niceStrings = 0;
foreach ($data as $string) {
    $hasMoreThanOrIsThreeVowels = false;
    $atleastTwoLettersTwiceInRow = false;
    $containsSpecificStrings = false;

    if (preg_match_all("/[aeiou]{1}/", $string) >= 3) {
        $hasMoreThanOrIsThreeVowels = true;
    }

    if (preg_match('/([a-z])\1/', $string) >= 1) {
        $atleastTwoLettersTwiceInRow = true;
    }

    if (preg_match('/ab|cd|pq|xy/', $string) >= 1) {
        $containsSpecificStrings = true;
    }

    if ($hasMoreThanOrIsThreeVowels && $atleastTwoLettersTwiceInRow && !$containsSpecificStrings) {
        $niceStrings++;
    }
}

echo $niceStrings;
