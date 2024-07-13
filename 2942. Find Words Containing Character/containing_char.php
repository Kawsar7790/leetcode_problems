<?php

str_contains("lfeet", "e");

function findWordsContaining($words, $x) {

    $indices = [];

    for ($i=0; $i <count($words) ; $i++) { 
        $contains = str_contains($words[$i], $x);

        if ($contains) {
            array_push($indices, $i);
        }
    }
    return $indices;
}

findWordsContaining(["abc","bcd","aaaa","cbc"], "z");