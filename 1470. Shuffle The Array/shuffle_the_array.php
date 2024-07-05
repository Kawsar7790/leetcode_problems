<?php

function shuffle_array($nums, $n) {

    $array_after_shuffle = [];

    for ($i=0,$j=$n; $i<$n,$j < count($nums) ; $i++,$j++) {
        array_push($array_after_shuffle,$nums[$i]);
        array_push($array_after_shuffle,$nums[$j]);


    }
    return $array_after_shuffle;
}

shuffle_array([1,2,3,4,4,3,2,1], 4);
