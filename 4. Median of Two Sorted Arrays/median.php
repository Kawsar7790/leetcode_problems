<?php

function findMedianSortedArrays($nums1, $nums2) {

    $sum = 0;
    $toal_count = count($nums1) + count($nums2);  
    $final_array = array_merge($nums1, $nums2);
    sort($final_array);

    if ($toal_count % 2 == 0) {

        $result = $toal_count / 2;

        for ($i=0; $i <= $result; $i++) { 


            if ($i == $result) {
                $sum += $final_array[$i - 1] + $final_array[$i];
            }
        
           
            
        }

        $sum = floatval($sum/2);
    }

    else {

        
        $result = round($toal_count / 2);

        for ($i=0; $i <= $result; $i++) { 

            if ($i == $result) {
                $sum += $final_array[$i-1];
            }
        
           
            
        }


    }

    return $sum;

}

findMedianSortedArrays([1,3], [2]);

