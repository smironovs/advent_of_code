<?php

$inputdata = trim(file_get_contents("./input.txt"));

//$tempkey = "abcdef";

$currentnumber = 1;
while (true) {
    $currentfivesymbols = substr(md5($inputdata . $currentnumber), 0, 5);

    // we regex boys
    if (preg_match("/[0]{5}/", $currentfivesymbols)) {
        echo "found number $currentnumber";
        break;
    }

    $currentnumber++;
}
