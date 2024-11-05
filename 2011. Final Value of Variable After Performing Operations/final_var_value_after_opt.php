<?php

function finalValueAfterOperations($operations) {
    $x=0;
    foreach ($operations as $operation) {
        if ($operation == "--X") {
            $x = $x-1;
        } 
        else if ($operation == "X--") {
            $x = $x-1;
        }
        else if ($operation == "++X") {
            $x = $x+1;
        }
        
        else {
            $x = $x+1;
        }
        
    }

    return $x;
        
}