<?php

class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {

    $result = 0;
        
    for( $i = 0; $i < strlen($jewels); $i++ ){
        for ($j = 0; $j < strlen($stones); $j++){
                if($jewels[$i] === $stones[$j]){
                $result ++;
                }
            }
        }
    return $result;
    }
    
}