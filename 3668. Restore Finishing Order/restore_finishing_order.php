<?php

class Solution {

    /**
     * @param Integer[] $order
     * @param Integer[] $friends
     * @return Integer[]
     */
    function recoverOrder($order, $friends) {
        $sortedArray = [];
        $frndsArrayLength = count($order);
        for ($i=0; $i < $frndsArrayLength ; $i++) { 
            if (in_array($order[$i], $friends)) {
                array_push($sortedArray, $order[$i]);
            }

        }

        return $sortedArray;
    }

}
