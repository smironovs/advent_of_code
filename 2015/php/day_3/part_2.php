<?php

//$inputData = "^v";
$inputData = file_get_contents("./input.txt");

$santaX = 0;
$santaY = 0;

$roboSantaX = 0;
$roboSantaY = 0;

$visitedHouses = ["0,0" => true];

for ($i = 0; $i < strlen($inputData); $i++) {
    // santa
    if ($i % 2 === 0) {
        if ($inputData[$i] === "^") {
            $santaY++;
        }

        if ($inputData[$i] === "v") {
            $santaY--;
        }

        if ($inputData[$i] === ">") {
            $santaX++;
        }

        if ($inputData[$i] === "<") {
            $santaX--;
        }

        $visitedHouses["$santaX,$santaY"] = true;
    // robo santa
    } else {
        if ($inputData[$i] === "^") {
            $roboSantaY++;
        }

        if ($inputData[$i] === "v") {
            $roboSantaY--;
        }

        if ($inputData[$i] === ">") {
            $roboSantaX++;
        }

        if ($inputData[$i] === "<") {
            $roboSantaX--;
        }

        $visitedHouses["$roboSantaX,$roboSantaY"] = true;
    }
}

echo count($visitedHouses);

