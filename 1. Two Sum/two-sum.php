<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
  function twoSum($nums, $target) {

      for ( $i=0; $i < count($nums) ; $i++) { 

          for ($j=$i+1; $j < count($nums) ; $j++) { 
              
              $sum_value = $nums[$i]+$nums[$j];

              if ($sum_value == $target) {
                  
                  return [$i,$j];
              }   

              

          }
      }
      
  }
}