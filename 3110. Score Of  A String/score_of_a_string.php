<?php

function scoreOfString($s) {
    $sum = 0;
    
    for($i=1; $i<strlen($s); $i++){
        $sum += abs(ord($s[$i-1]) - ord($s[$i]));

    }
    
    return $sum;
}

scoreOfString("zaz");