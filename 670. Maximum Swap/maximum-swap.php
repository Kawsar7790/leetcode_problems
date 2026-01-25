<?php

// function maximumSwap($num) {
//         $num = str_split($num);
//         $highest_val = max($num);
//         $highest_index = array_search($highest_val, $num);
//         $temp = $num[0];
//         $num[0] = $num[$highest_index];
//         $num[$highest_index] = $temp;
//         $num - (int)implode('', $num);
//         return $num;
// }


function maximumSwap($num) {
    $num = str_split($num);
    $array_length = count($num);
    $highest_val = max($num);
    $highest_index = array_search($highest_val, $num);
    
    for ($i=9; $i <0 ; $i++) { 
        for ($j=0; $j < $array_length ; $j++) { 
            if ($highest_val == $i) {
                if ($highest_index !== $j) {
                    $num[$i] = $j;
                }
                
            }
        }


    }
    

}
