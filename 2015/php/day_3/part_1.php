<?php

$inputData = file_get_contents("./input.txt");

//$inputData = ">";
//$inputData = "^>v<";
//$inputData = "^v^v^v^v^v";

// ^ - north y+1
// v - south y-1
// > - east x+1
// < - west x-1

// Santas position = {x, y}
$x = 0;
$y = 0;

// ["x,y" => visited]
$visitedHouses = ["0,0" => true];

for ($i = 0; $i < strlen($inputData); $i++) {
    if ($inputData[$i] === "^") {
        $y++;
    }

    if ($inputData[$i] === "v") {
        $y--;
    }

    if ($inputData[$i] === ">") {
        $x++;
    }

    if ($inputData[$i] === "<") {
        $x--;
    }

    $visitedHouses["$x,$y"] =  true;
}

//var_dump($visitedHouses);

// unique houses
echo count($visitedHouses);
