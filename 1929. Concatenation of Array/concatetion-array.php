<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
     $count = count($nums);

    for ($i=0; $i<$count; $i++){
      $nums[$count+$i] = $nums[$i];
    }
     return $nums;
    }
}